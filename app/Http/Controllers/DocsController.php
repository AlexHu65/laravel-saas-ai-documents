<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;

class DocsController extends Controller
{
    public function index(): View
    {
        return $this->show('index');
    }

    public function show(string $page): View
    {
        abort_unless(preg_match('/^[A-Z0-9_-]+$/i', $page), 404);

        $path = base_path("docs/{$page}.md");
        abort_unless(File::exists($path), 404);

        $markdown = File::get($path);
        [$title, $content] = $this->extractFrontMatter($markdown, $page);

        $html = Str::markdown($content, [
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);

        return view('docs-page', [
            'title' => $title,
            'menu' => $this->menuHtml(),
            'content' => $this->prepareContent($html),
        ]);
    }

    private function extractFrontMatter(string $markdown, string $fallbackTitle): array
    {
        if (! preg_match('/\A---\s*(.*?)\s*---\s*(.*)\z/s', $markdown, $matches)) {
            return [Str::headline($fallbackTitle), $markdown];
        }

        preg_match('/^title:\s*(.+)$/m', $matches[1], $titleMatch);

        return [
            trim($titleMatch[1] ?? Str::headline($fallbackTitle), '"\' '),
            $matches[2],
        ];
    }

    private function menuHtml(): string
    {
        $menu = File::get(base_path('docs/_includes/menu.html'));

        return $this->localizeDocsLinks($menu);
    }

    private function prepareContent(string $html): string
    {
        $html = $this->localizeDocsLinks($html);

        return preg_replace(
            '/<pre><code class="language-mermaid">(.*?)<\/code><\/pre>/s',
            '<div class="mermaid">$1</div>',
            $html
        );
    }

    private function localizeDocsLinks(string $html): string
    {
        return preg_replace_callback(
            '/href="\.\/([^"]+)\.html"/',
            fn (array $matches): string => $matches[1] === 'index'
                ? 'href="/"'
                : 'href="/docs/' . $matches[1] . '"',
            $html
        );
    }
}

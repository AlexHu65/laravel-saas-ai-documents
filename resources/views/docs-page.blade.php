<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} | Laravel SaaS AI Documents</title>
        <link rel="stylesheet" href="{{ url('/docs-assets/css/style.css') }}">
    </head>
    <body>
        <div class="wrapper">
            <header></header>

            <section class="sidebar">
                {!! $menu !!}
            </section>

            <section>
                {!! $content !!}
            </section>

            <footer>
                <p><small>Documentación local del proyecto Laravel SaaS AI Documents</small></p>
            </footer>
        </div>

        <script type="module">
            import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
            mermaid.initialize({ startOnLoad: true });
        </script>
    </body>
</html>

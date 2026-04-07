---
layout: default
title: Roles y Permisos
nav_order: 8
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Roles y</span><br>
      <span class="highlight">Permisos</span>
    </h1>
    <p class="hero-subtitle">
      Control de acceso basado en roles (RBAC)<br>
      <strong>🔐 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">📋 roles</span>
      <span class="tag">🔗 role_user</span>
      <span class="tag">🛡️ Middleware</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">📌</div>
    <h2>Resumen</h2>
    <p>El sistema implementa <strong>RBAC</strong>: los usuarios se relacionan con uno o varios registros en <code>roles</code> mediante la tabla pivote <code>role_user</code>. La autorización por ruta se aplica con el middleware <code>EnsureUserHasRole</code> registrado como alias <code>role</code>.</p>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">🧱 Estructura en base de datos</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">👤</span>
        <h3>users</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge">Tabla existente de usuarios</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Relación many-to-many con roles</span>
        </div>
      </div>
    </div>
    <div class="stack-category">
      <div class="category-header database">
        <span class="category-icon">📋</span>
        <h3>roles</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge">name (string) — ej. admin, user, manager</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">timestamps</span>
        </div>
      </div>
    </div>
    <div class="stack-category">
      <div class="category-header infrastructure">
        <span class="category-icon">🔗</span>
        <h3>role_user</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge">user_id → users (cascade on delete)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">role_id → roles (cascade on delete)</span>
        </div>
        <p class="layer-note">La convención de Laravel para el pivote es <code>role_user</code> (orden alfabético). El archivo de migración puede llamarse <code>create_user_roles_table</code>, pero la tabla creada es <code>role_user</code>.</p>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🧠</div>
    <h2>Modelo User</h2>
    <p>Relación y comprobación por nombre de rol:</p>
    <div class="rules-box code-wrap">
      <pre><code>roles(): BelongsToMany — belongsToMany(Role::class)

hasRole(string $role): bool
  → $this->roles()->where('name', $role)->exists()</code></pre>
    </div>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">🔐 Middleware EnsureUserHasRole</h2>
  <div class="b2b-content">
    <div class="rules-box">
      <div class="rule-list">
        <div class="rule-item">
          <span class="rule-icon">🏷️</span>
          <span>Alias registrado en <code>bootstrap/app.php</code>: <code>'role' => EnsureUserHasRole::class</code></span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">✅</span>
          <span>Si el usuario está autenticado y tiene el rol indicado, continúa la petición</span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">⛔</span>
          <span>Si no hay sesión o no tiene el rol: <code>abort(403, 'Unauthorized')</code></span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="flow-section">
  <h2 class="section-title">🚀 Uso en rutas</h2>
  <div class="b2b-content">
    <div class="rules-box code-wrap">
      <pre><code>Route::get('/admin', ...)->middleware('role:admin');
Route::get('/user', ...)->middleware('role:user');
Route::get('/manager', ...)->middleware('role:manager');</code></pre>
    </div>
    <p class="section-intro">El parámetro después de los dos puntos es el <strong>name</strong> del rol en la tabla <code>roles</code>, no el ID.</p>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">📋</div>
    <h2>Notas operativas</h2>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">Asignar roles vía pivote role_user (seeders, tinker o panel futuro)</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">Los nombres admin / user / manager son referencia en migración y rutas de prueba</span>
      </div>
    </div>
  </div>
</div>

<style>
.hero-section.architecture {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 60px 20px;
  text-align: center;
  color: white;
}

.objective-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.objective-card {
  background: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.objective-card code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 4px;
  font-size: 0.9em;
}

.stack-section {
  padding: 40px 20px;
}

.stack-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.stack-category {
  background: white;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.stack-category:hover {
  transform: translateY(-5px);
}

.category-header {
  padding: 20px;
  display: flex;
  align-items: center;
  gap: 15px;
  font-weight: bold;
  color: white;
}

.category-header.backend {
  background: linear-gradient(135deg, #667eea, #764ba2);
}

.category-header.database {
  background: linear-gradient(135deg, #74b9ff, #0984e3);
}

.category-header.infrastructure {
  background: linear-gradient(135deg, #a29bfe, #6c5ce7);
}

.category-icon {
  font-size: 24px;
}

.tech-list {
  padding: 20px;
}

.tech-item {
  margin-bottom: 10px;
}

.tech-badge {
  display: inline-block;
  padding: 8px 15px;
  border-radius: 20px;
  font-size: 13px;
  font-weight: 500;
  color: white;
  background: #6c757d;
}

.layer-note {
  font-size: 13px;
  color: #495057;
  margin: 16px 0 0;
  line-height: 1.5;
}

.layer-note code {
  background: #e9ecef;
  padding: 1px 5px;
  border-radius: 4px;
}

.section-card {
  background: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 800px;
  margin: 40px auto;
  text-align: center;
}

.rules-box {
  background: white;
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
  text-align: left;
  margin-top: 16px;
}

.rules-box.code-wrap pre {
  margin: 0;
  font-size: 13px;
  line-height: 1.5;
  overflow-x: auto;
}

.rules-box code {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
}

.rule-list {
  margin-top: 0;
}

.rule-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 15px;
  background: #f8f9fa;
  border-radius: 12px;
  margin-bottom: 12px;
}

.rule-item:last-child {
  margin-bottom: 0;
}

.rule-icon {
  font-size: 20px;
  flex-shrink: 0;
}

.rule-item code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 4px;
  font-size: 12px;
}

.auth-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.auth-features {
  display: grid;
  grid-template-columns: 1fr;
  gap: 12px;
  margin-top: 20px;
}

.feature-item {
  display: flex;
  align-items: center;
  justify-content: center;
}

.feature-badge {
  background: #f8f9fa;
  border: 2px solid #e9ecef;
  border-radius: 25px;
  padding: 12px 20px;
  font-size: 14px;
  font-weight: 500;
  text-align: center;
  line-height: 1.4;
}

.b2b-model-section {
  padding: 40px 20px;
}

.b2b-content {
  max-width: 800px;
  margin: 0 auto;
}

.flow-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.section-intro {
  text-align: center;
  color: #495057;
  font-size: 15px;
  margin-top: 20px;
}

.section-intro code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 4px;
}

.future-section {
  padding: 40px 20px;
}

@media (max-width: 768px) {
  .stack-grid {
    grid-template-columns: 1fr;
  }
}
</style>

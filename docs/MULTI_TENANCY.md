---
layout: default
title: Multi-Tenancy
nav_order: 7
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Multi-Tenancy</span><br>
      <span class="highlight">por empresa</span>
    </h1>
    <p class="hero-subtitle">
      Aislamiento por <code>company</code>, contexto en el contenedor y políticas de acceso<br>
      <strong>🏢 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🏢 Company context</span>
      <span class="tag">🔒 Global scope</span>
      <span class="tag">🛡️ Policies</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">📌</div>
    <h2>Resumen</h2>
    <p>El sistema implementa multi-tenancy basado en empresas (<strong>companies</strong>): cada usuario pertenece a una empresa y los datos sensibles se filtran y autorizan en función de ese vínculo.</p>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">🔐 Contexto de empresa</h2>
  <div class="b2b-content">
    <div class="model-description">
      <p>El middleware <strong>SetCompanyContext</strong> registra la empresa del usuario autenticado en el contenedor cuando existe relación <code>user → company</code>.</p>
    </div>
    <div class="rules-box">
      <h3>Acceso en código</h3>
      <div class="rule-list">
        <div class="rule-item">
          <span class="rule-icon">📦</span>
          <span><code>app('company')</code> — instancia de <code>Company</code> si está enlazada en el request</span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">🔧</span>
          <span><code>company()</code> — helper en <code>app/helpers.php</code>; devuelve la empresa o <code>null</code></span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">🧱 Modelo y datos</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">👤</span>
        <h3>User</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge">company_id asignable (mass assignment)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Relación belongsTo(Company)</span>
        </div>
      </div>
    </div>
    <div class="stack-category">
      <div class="category-header database">
        <span class="category-icon">🏢</span>
        <h3>Company</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge">hasMany(User)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Suscripciones, planes y uso de IA por empresa</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🔍</div>
    <h2>Trait BelongsToCompany</h2>
    <p>Los modelos que usen el trait aplican un <strong>global scope</strong> llamado <code>company</code>: cuando el contenedor tiene enlazada la empresa actual, las consultas filtran por <code>tabla.company_id = app('company')->id</code>.</p>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">Sin contexto: no se aplica el filtro por company_id</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">Con contexto: consultas acotadas al tenant</span>
      </div>
    </div>
  </div>
</div>

<div class="flow-section">
  <h2 class="section-title">🛡️ CompanyPolicy</h2>
  <div class="b2b-content">
    <div class="rules-box">
      <div class="rule-list">
        <div class="rule-item">
          <span class="rule-icon">✅</span>
          <span><strong>view:</strong> el usuario solo puede ver una empresa si <code>$user->company_id === $company->id</code></span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">⛔</span>
          <span>Resto de acciones (viewAny, create, update, delete, etc.) denegadas por defecto en esta fase</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="status-section">
  <h2 class="section-title">✨ Cambios recientes (commit de hardening)</h2>
  <p class="section-intro">Incluye el trabajo descrito en <em>feat: add company relationship to User model and update menu with multi-tenant documentation link</em>, más el refinamiento actual del contexto y pruebas.</p>
  <div class="status-grid">
    <div class="status-card detected">
      <h3>Modelo y aislamiento</h3>
      <div class="detected-list">
        <div class="detected-item">
          <span class="framework-badge laravel">company_id en fillable de User</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge php">Relación User ↔ Company</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge tools">Trait BelongsToCompany (global scope por tenant)</span>
        </div>
      </div>
    </div>
    <div class="status-card detected">
      <h3>Seguridad y API</h3>
      <div class="detected-list">
        <div class="detected-item">
          <span class="framework-badge laravel">CompanyPolicy (ownership en view)</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge php">SetCompanyContext en la pila global de middleware</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge tools">Helper global company()</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge tools">GET /api/health en routes/api.php</span>
        </div>
      </div>
    </div>
    <div class="status-card detected">
      <h3>Documentación y pruebas</h3>
      <div class="detected-list">
        <div class="detected-item">
          <span class="framework-badge laravel">Página Fortalecimiento Multi-Tenant + enlace en el menú del sitio de docs</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge php">UserCompanyTest — relación usuario-empresa</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge tools">CompanyContextTest — contexto enlazado / no enlazado según auth y company</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">❤️</div>
    <h2>Health check (API)</h2>
    <p>Ruta definida en el proyecto:</p>
    <div class="rules-box health-box">
      <div class="rule-item">
        <span class="rule-icon">🌐</span>
        <span><code>GET /api/health</code> — JSON con status, nombre de la app y timestamp</span>
      </div>
    </div>
    <p class="note-small">Las rutas API están registradas en <code>bootstrap/app.php</code> (<code>api: routes/api.php</code>), con prefijo <code>/api</code> por defecto en Laravel.</p>
  </div>
</div>

<style>
.hero-section.architecture {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 60px 20px;
  text-align: center;
  color: white;
}

.hero-subtitle code {
  background: rgba(255, 255, 255, 0.2);
  padding: 2px 8px;
  border-radius: 6px;
  font-size: 0.95em;
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

.b2b-model-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.b2b-content {
  max-width: 800px;
  margin: 0 auto;
}

.model-description {
  text-align: center;
  font-size: 18px;
  margin-bottom: 30px;
  color: #2c3e50;
}

.rules-box {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.rules-box h3 {
  margin-top: 0;
  color: #2c3e50;
}

.rule-list {
  margin-top: 20px;
}

.rule-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 15px;
  background: #f8f9fa;
  border-radius: 12px;
  margin-bottom: 15px;
  transition: all 0.3s ease;
}

.rule-item:hover {
  transform: translateX(5px);
  background: #e9ecef;
}

.rule-item code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 6px;
  font-size: 13px;
}

.rule-icon {
  font-size: 20px;
  width: 30px;
  text-align: center;
  flex-shrink: 0;
}

.stack-section {
  padding: 40px 20px;
}

.stack-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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

.section-card {
  background: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 800px;
  margin: 40px auto;
  text-align: center;
}

.auth-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 15px;
  margin-top: 25px;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 10px;
}

.feature-badge {
  background: #f8f9fa;
  border: 2px solid #e9ecef;
  border-radius: 25px;
  padding: 12px 20px;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.feature-badge:hover {
  border-color: #667eea;
  background: #f0f7ff;
}

.flow-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.status-section {
  padding: 40px 20px;
}

.section-intro {
  text-align: center;
  max-width: 720px;
  margin: 0 auto 24px;
  color: #495057;
  font-size: 16px;
}

.status-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  margin: 30px 0;
}

.status-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  border-left: 5px solid #e9ecef;
}

.status-card.initial {
  border-left-color: #e17055;
}

.status-card.detected {
  border-left-color: #27ae60;
}

.detected-list {
  margin-top: 15px;
}

.detected-item {
  margin-bottom: 10px;
}

.framework-badge {
  display: inline-block;
  padding: 6px 12px;
  border-radius: 15px;
  font-size: 12px;
  font-weight: bold;
  color: white;
}

.framework-badge.laravel {
  background: linear-gradient(135deg, #ff2d20, #d63031);
}

.framework-badge.php {
  background: linear-gradient(135deg, #777bb4, #4f5b93);
}

.framework-badge.tools {
  background: linear-gradient(135deg, #6c757d, #495057);
}

.framework-badge.pending {
  background: linear-gradient(135deg, #fdcb6e, #e17055);
}

.health-box {
  max-width: 560px;
  margin: 20px auto;
  text-align: left;
}

.note-small {
  font-size: 13px;
  color: #6c757d;
  max-width: 560px;
  margin: 16px auto 0;
}

@media (max-width: 768px) {
  .stack-grid,
  .status-grid {
    grid-template-columns: 1fr;
  }

  .auth-features {
    grid-template-columns: 1fr;
  }
}
</style>

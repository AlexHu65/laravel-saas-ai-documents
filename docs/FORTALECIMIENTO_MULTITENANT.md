---
layout: default
title: Fortalecimiento Multi-Tenant
nav_order: 5
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Día 10</span><br>
      <span class="highlight">Hardening del Core</span>
    </h1>
    <p class="hero-subtitle">
      Fortalecimiento de la base multi-tenant del sistema<br>
      <strong>🏢 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🏢 User → Company</span>
      <span class="tag">🔐 Seguridad</span>
      <span class="tag">🧪 Testing</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🎯</div>
    <h2>Objetivo</h2>
    <p>Fortalecer la base multi-tenant del sistema.</p>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">🏢 Relación User → Company</h2>
  <div class="b2b-content">
    <div class="model-description">
      <p>Se implementó la relación:</p>
    </div>
    <div class="rules-box">
      <div class="rule-list">
        <div class="rule-item">
          <span class="rule-icon">👤</span>
          <span>Un usuario pertenece a una empresa</span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">🏢</span>
          <span>Una empresa tiene muchos usuarios</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🔐</div>
    <h2>Seguridad Multi-Tenant</h2>
    <p>Se preparó la infraestructura para:</p>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">🔍 Global scopes por empresa</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">🛡️ Policies de ownership</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">🚫 Prevención de fuga de datos</span>
      </div>
    </div>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">🧪 Testing</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">✅</span>
        <h3>Pruebas agregadas</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge">Relación usuario-empresa</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Integridad del core</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">❤️</div>
    <h2>Health Check</h2>
    <p>Endpoint disponible:</p>
    <div class="rules-box" style="max-width: 400px; margin: 20px auto;">
      <div class="rule-item">
        <span class="rule-icon">🌐</span>
        <span><code>GET /api/health</code></span>
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

.rule-list {
  margin-top: 20px;
}

.rule-item {
  display: flex;
  align-items: center;
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
  padding: 4px 8px;
  border-radius: 6px;
  font-size: 14px;
}

.rule-icon {
  font-size: 20px;
  width: 30px;
  text-align: center;
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

.auth-features,
.future-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 15px;
  margin-top: 25px;
}

.feature-item,
.future-item {
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

@media (max-width: 768px) {
  .auth-features,
  .future-features {
    grid-template-columns: 1fr;
  }

  .stack-grid {
    grid-template-columns: 1fr;
  }
}
</style>

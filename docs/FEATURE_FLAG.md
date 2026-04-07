---
layout: default
title: Feature Flags
nav_order: 9
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Feature</span><br>
      <span class="highlight">Flags</span>
    </h1>
    <p class="hero-subtitle">
      Control de funcionalidades por plan y empresa<br>
      <strong>🚀 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">📋 features</span>
      <span class="tag">🔗 feature_plan</span>
      <span class="tag">🏢 company()</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🎯</div>
    <h2>Objetivo</h2>
    <p>Habilitar o restringir funcionalidades según el plan activo de cada empresa, manteniendo una validación centralizada en código.</p>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">🧱 Estructura actual</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">✨</span>
        <h3>features</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item"><span class="tech-badge">code (único)</span></div>
        <div class="tech-item"><span class="tech-badge">name</span></div>
      </div>
    </div>
    <div class="stack-category">
      <div class="category-header database">
        <span class="category-icon">🔗</span>
        <h3>feature_plan</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item"><span class="tech-badge">plan_id + feature_id</span></div>
        <div class="tech-item"><span class="tech-badge">limit (nullable)</span></div>
        <div class="tech-item"><span class="tech-badge">is_enabled (default true)</span></div>
        <p class="layer-note">La tabla pivote creada por migración es <code>feature_plan</code>.</p>
      </div>
    </div>
    <div class="stack-category">
      <div class="category-header infrastructure">
        <span class="category-icon">📦</span>
        <h3>plans</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item"><span class="tech-badge">Relación many-to-many con Feature</span></div>
        <div class="tech-item"><span class="tech-badge">Campos de límites del plan</span></div>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🧠</div>
    <h2>Cómo se valida una feature</h2>
    <div class="rules-box code-wrap">
      <pre><code>// helper global
feature('ai_generate')

// internamente
feature($code) -> company()?->hasFeature($code)

// Company::hasFeature()
company->activeSubscription->plan->features()
    ->where('code', $featureCode)
    ->exists();</code></pre>
    </div>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">🏢 Flujo por empresa</h2>
  <div class="b2b-content">
    <div class="rule-list">
      <div class="rule-item">
        <span class="rule-icon">1️⃣</span>
        <span>Se obtiene la empresa actual con <code>company()</code>.</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">2️⃣</span>
        <span>Se toma la suscripción activa de esa empresa.</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">3️⃣</span>
        <span>Se consulta si el plan activo tiene la feature por su <code>code</code>.</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">4️⃣</span>
        <span>Si no hay empresa o suscripción, el resultado es <code>false</code>.</span>
      </div>
    </div>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">📌</div>
    <h2>Notas de implementación</h2>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">`Plan::hasFeature()` existe y consulta el campo JSON `features` (legacy).</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">La validación en runtime multi-tenant actualmente usa la relación `features()` del plan vía pivote `feature_plan`.</span>
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
}

.layer-note code,
.rule-item code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 4px;
}

.auth-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.section-card {
  background: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 800px;
  margin: 0 auto;
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

.b2b-model-section {
  padding: 40px 20px;
}

.b2b-content {
  max-width: 800px;
  margin: 0 auto;
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
  margin-bottom: 12px;
}

.rule-icon {
  font-size: 20px;
  flex-shrink: 0;
}

.future-section {
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

@media (max-width: 768px) {
  .stack-grid {
    grid-template-columns: 1fr;
  }
}
</style>

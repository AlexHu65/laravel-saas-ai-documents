---
layout: default
title: Arquitectura Enterprise
nav_order: 2
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Arquitectura</span><br>
      <span class="highlight">Enterprise</span>
    </h1>
    <p class="hero-subtitle">
      Clean Architecture, Domain Separation y Multi-Tenancy B2B<br>
      <strong>🏛 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🏛 Clean Architecture</span>
      <span class="tag">🔌 Desacoplado</span>
      <span class="tag">🏢 Multi-tenant</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🎯</div>
    <h2>Objetivos de la arquitectura</h2>
    <div class="objectives-grid">
      <div class="obj-item">
        <span class="obj-icon">🔌</span>
        <span>Desacoplamiento de proveedores externos</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">📈</span>
        <span>Escalabilidad horizontal</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🔒</span>
        <span>Multi-tenant seguro</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">💳</span>
        <span>Soporte multi-gateway de pagos</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🤖</span>
        <span>Control de consumo de IA por plan</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">✨</span>
        <span>Código mantenible para equipos grandes</span>
      </div>
    </div>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">🧱 Capas del sistema</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">🟦</span>
        <h3>Domain</h3>
      </div>
      <div class="tech-list">
        <p class="layer-desc">Contiene las reglas de negocio puras.</p>
        <div class="tech-item">
          <span class="tech-badge">Contracts (interfaces)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Reglas de negocio</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Definición del dominio</span>
        </div>
        <p class="layer-no"><strong>NO contiene:</strong> Eloquent, APIs externas, Controllers</p>
      </div>
    </div>

    <div class="stack-category">
      <div class="category-header frontend">
        <span class="category-icon">🟩</span>
        <h3>Application</h3>
      </div>
      <div class="tech-list">
        <p class="layer-desc">Orquesta los casos de uso.</p>
        <div class="tech-item">
          <span class="tech-badge">Use cases</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Coordinación de servicios</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Validaciones de negocio</span>
        </div>
        <p class="layer-examples"><strong>Ejemplos:</strong> SubscribeCompany, GenerateDocument</p>
      </div>
    </div>

    <div class="stack-category">
      <div class="category-header database">
        <span class="category-icon">🟧</span>
        <h3>Infrastructure</h3>
      </div>
      <div class="tech-list">
        <p class="layer-desc">Implementaciones técnicas.</p>
        <div class="tech-item">
          <span class="tech-badge">Gateways de pago</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Proveedores de IA</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Persistencia Eloquent</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Integraciones externas</span>
        </div>
      </div>
    </div>

    <div class="stack-category">
      <div class="category-header infrastructure">
        <span class="category-icon">🟪</span>
        <h3>HTTP Layer</h3>
      </div>
      <div class="tech-list">
        <p class="layer-desc">Capa más superficial.</p>
        <div class="tech-item">
          <span class="tech-badge">Controllers delgados</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Middleware</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Requests</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="flow-section">
  <h2 class="section-title">🔄 Flujo general del sistema</h2>
  <div class="flow-diagram">
    <div class="flow-step">
      <div class="step-number">1</div>
      <div class="step-content">
        <h4>👤 User</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">2</div>
      <div class="step-content">
        <h4>🌐 Controller</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">3</div>
      <div class="step-content">
        <h4>⚙️ Application</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">4</div>
      <div class="step-content">
        <h4>📜 Domain Contracts</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">5</div>
      <div class="step-content">
        <h4>💾 Infrastructure</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">6</div>
      <div class="step-content">
        <h4>🔗 External Services</h4>
      </div>
    </div>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">💳 Flujo de Suscripciones</h2>
  <div class="flow-diagram">
    <div class="flow-step">
      <div class="step-number">1</div>
      <div class="step-content">
        <h4>🏢 Company</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">2</div>
      <div class="step-content">
        <h4>📋 SubscribeCompany</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">3</div>
      <div class="step-content">
        <h4>📜 PaymentGatewayInterface</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">4</div>
      <div class="step-content">
        <h4>💳 FakeGateway</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">5</div>
      <div class="step-content">
        <h4>💾 Subscription DB</h4>
      </div>
    </div>
  </div>
</div>

<div class="ai-integration-section">
  <h2 class="section-title">🤖 Flujo de Generación con IA</h2>
  <div class="flow-diagram">
    <div class="flow-step">
      <div class="step-number">1</div>
      <div class="step-content">
        <h4>👤 User</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">2</div>
      <div class="step-content">
        <h4>📝 GenerateDocument</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">3</div>
      <div class="step-content">
        <h4>📜 AIProviderInterface</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">4</div>
      <div class="step-content">
        <h4>🤖 FakeAIProvider → DocumentCreated</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">5</div>
      <div class="step-content">
        <h4>📊 AIUsageLogged</h4>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🏢</div>
    <h2>Multi-Tenancy</h2>
    <p>El sistema utiliza aislamiento por empresa mediante:</p>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">👤 users.company_id</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">🔗 Context binding por middleware</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">🔍 Filtrado por compañía en operaciones críticas</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">📋 Suscripciones por empresa</span>
      </div>
    </div>
  </div>
</div>

<div class="status-section">
  <h2 class="section-title">📈 Estado actual</h2>
  <div class="status-grid">
    <div class="status-card detected">
      <h3>✅ Completado</h3>
      <div class="detected-list">
        <div class="detected-item">
          <span class="framework-badge laravel">Arquitectura enterprise base</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge php">Billing desacoplado</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge tools">AI desacoplada</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge laravel">Control de consumo</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge php">Multi-tenant funcional</span>
        </div>
      </div>
    </div>

    <div class="status-card initial">
      <h3>🚧 Pendiente</h3>
      <div class="detected-list">
        <div class="detected-item">
          <span class="framework-badge pending">Integración Stripe real</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge pending">OpenAI real</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge pending">Dashboard de métricas</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">🚀</div>
    <h2>Próximos pasos</h2>
    <div class="future-features">
      <div class="future-item">
        <span class="future-icon">💳</span>
        <span>Integración real de Stripe</span>
      </div>
      <div class="future-item">
        <span class="future-icon">🤖</span>
        <span>Integración real de OpenAI</span>
      </div>
      <div class="future-item">
        <span class="future-icon">🆓</span>
        <span>Sistema de trials</span>
      </div>
      <div class="future-item">
        <span class="future-icon">🚩</span>
        <span>Feature flags por plan</span>
      </div>
      <div class="future-item">
        <span class="future-icon">📊</span>
        <span>Métricas de uso</span>
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

.objectives-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.obj-item {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 15px;
  background: #f8f9fa;
  border-radius: 12px;
  transition: all 0.3s ease;
}

.obj-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.obj-icon {
  font-size: 24px;
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

.category-header.frontend {
  background: linear-gradient(135deg, #00b894, #00cec9);
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

.layer-desc,
.layer-no,
.layer-examples {
  font-size: 14px;
  color: #2c3e50;
  margin-bottom: 15px;
}

.layer-no,
.layer-examples {
  margin-top: 15px;
  padding-top: 15px;
  border-top: 1px solid #e9ecef;
  font-size: 13px;
  color: #6c757d;
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

.b2b-model-section {
  padding: 40px 20px;
  background: #f8f9fa;
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
.scalability-points,
.future-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 15px;
  margin-top: 25px;
}

.feature-item,
.point-item,
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

.ai-integration-section {
  padding: 40px 20px;
}

.flow-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.flow-diagram {
  max-width: 600px;
  margin: 30px auto;
  text-align: center;
}

.flow-step {
  background: white;
  border-radius: 16px;
  padding: 25px;
  margin: 15px 0;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  position: relative;
  transition: transform 0.3s ease;
}

.flow-step:hover {
  transform: scale(1.02);
}

.step-number {
  position: absolute;
  top: -15px;
  left: 50%;
  transform: translateX(-50%);
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
}

.flow-arrow {
  font-size: 24px;
  color: #667eea;
  margin: 10px 0;
}

.status-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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
  border-left-color: #e74c3c;
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

@media (max-width: 768px) {
  .objectives-grid,
  .stack-grid,
  .status-grid {
    grid-template-columns: 1fr;
  }

  .auth-features,
  .scalability-points,
  .future-features {
    grid-template-columns: 1fr;
  }
}
</style>

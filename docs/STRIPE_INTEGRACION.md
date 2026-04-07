---
layout: default
title: Integración Stripe
nav_order: 10
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Integración</span><br>
      <span class="highlight">Stripe</span>
    </h1>
    <p class="hero-subtitle">
      Billing desacoplado con Checkout y <code>PaymentGatewayInterface</code><br>
      <strong>💳 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🔌 Gateway</span>
      <span class="tag">🛒 Checkout</span>
      <span class="tag">🏢 Multi-tenant</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🎯</div>
    <h2>Objetivo</h2>
    <p>Permitir que una empresa suscriba un plan usando <strong>Stripe Checkout</strong> en modo suscripción, manteniendo la lógica de pago detrás de un contrato de dominio (<code>PaymentGatewayInterface</code>) e implementación en <code>StripeGateway</code>.</p>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">⚙️ Configuración</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">🔑</span>
        <h3>Variables de entorno</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item"><span class="tech-badge">STRIPE_KEY</span></div>
        <div class="tech-item"><span class="tech-badge">STRIPE_SECRET</span></div>
        <div class="tech-item"><span class="tech-badge">STRIPE_WEBHOOK_SECRET</span> (reservado para webhooks)</div>
        <p class="layer-note">Mapeadas en <code>config/services.php</code> bajo la clave <code>stripe</code>.</p>
      </div>
    </div>
    <div class="stack-category">
      <div class="category-header database">
        <span class="category-icon">📋</span>
        <h3>Plan y precio en Stripe</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item"><span class="tech-badge">plans.stripe_price_id</span></div>
        <div class="tech-item"><span class="tech-badge">Migración: add_stripe_price_id_to_plans_table</span></div>
        <p class="layer-note">Cada plan debe tener el <strong>Price ID</strong> de Stripe que se usará en Checkout.</p>
      </div>
    </div>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">🔄 Flujo de suscripción</h2>
  <div class="b2b-content">
    <div class="rule-list">
      <div class="rule-item">
        <span class="rule-icon">1️⃣</span>
        <span>El usuario visita <code>GET /subscribe/{plan}</code> (<code>SubscriptionController@subscribe</code>).</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">2️⃣</span>
        <span><code>SubscribeCompany</code> recibe la <code>Company</code> del contexto (<code>company()</code>) y el <code>Plan</code> resuelto por ruta.</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">3️⃣</span>
        <span>El gateway crea un <strong>Customer</strong> en Stripe con el nombre de la empresa.</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">4️⃣</span>
        <span>Se crea una <strong>Checkout Session</strong> en modo <code>subscription</code> con el <code>price_id</code> del plan.</span>
      </div>
      <div class="rule-item">
        <span class="rule-icon">5️⃣</span>
        <span>La app redirige al usuario a la URL de Checkout (<code>success_url</code> / <code>cancel_url</code> configuradas en el gateway).</span>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🧩</div>
    <h2>Componentes en código</h2>
    <div class="rules-box code-wrap">
      <pre><code>PaymentGatewayInterface
  → StripeGateway (createCustomer, createSubscription, cancelSubscription)

SubscribeCompany::execute(Company, Plan)
  → createCustomer(['name' => ...])
  → createSubscription([
      'customer_id',
      'price_id' => $plan->stripe_price_id,
    ])
  → return URL de Checkout</code></pre>
    </div>
    <p class="section-intro">En <code>AppServiceProvider</code>, <code>PaymentGatewayInterface</code> está enlazado a <code>StripeGateway</code> (último <code>bind</code> efectivo). Existe también <code>FakeGateway</code> para pruebas o desarrollo sin Stripe.</p>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">📌</div>
    <h2>Pendientes habituales</h2>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">Webhook de Stripe para crear/actualizar <code>subscriptions</code> locales tras el pago</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">Rutas <code>/success</code> y <code>/cancel</code> alineadas con el producto (hoy definidas en <code>StripeGateway</code>)</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">Proteger <code>/subscribe/{plan}</code> con autenticación y contexto de empresa cuando aplique</span>
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

.objective-card code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 4px;
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
  background: linear-gradient(135deg, #635bff, #0a2540);
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

.layer-note {
  font-size: 13px;
  color: #495057;
  margin: 16px 0 0;
  line-height: 1.5;
}

.layer-note code,
.rule-item code,
.section-intro code {
  background: #e9ecef;
  padding: 2px 6px;
  border-radius: 4px;
}

.b2b-model-section {
  padding: 40px 20px;
  background: #f8f9fa;
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
  align-items: flex-start;
  gap: 15px;
  padding: 15px;
  background: white;
  border-radius: 12px;
  margin-bottom: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
}

.rule-icon {
  font-size: 20px;
  flex-shrink: 0;
}

.auth-section {
  padding: 40px 20px;
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
  background: #f8f9fa;
  border-radius: 16px;
  padding: 24px;
  text-align: left;
  margin-top: 16px;
}

.rules-box.code-wrap pre {
  margin: 0;
  font-size: 13px;
  line-height: 1.5;
  overflow-x: auto;
}

.section-intro {
  text-align: center;
  color: #495057;
  font-size: 15px;
  margin-top: 20px;
  line-height: 1.5;
}

.future-section {
  padding: 40px 20px;
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

.feature-badge code {
  background: #e9ecef;
  padding: 1px 5px;
  border-radius: 4px;
}

@media (max-width: 768px) {
  .stack-grid {
    grid-template-columns: 1fr;
  }
}
</style>

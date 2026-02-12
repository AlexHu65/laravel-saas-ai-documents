---
layout: default
title: Flujo de negocio
nav_order: 3
---

<div class="hero-section business-flow">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Flujo de</span><br>
      <span class="highlight">Negocio</span>
    </h1>
    <p class="hero-subtitle">
      Operativa real del sistema B2B<br>
      <strong>🔄 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🏢 B2B México</span>
      <span class="tag">🤖 IA Integration</span>
      <span class="tag">💳 Suscripciones</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🧠</div>
    <h2>Objetivo</h2>
    <p class="objective-text">
      Documentar el flujo real de uso del sistema en un contexto <strong>B2B (México / LATAM)</strong>, mostrando:
    </p>
    <div class="objective-grid">
      <div class="obj-item">
        <span class="obj-icon">🏢</span>
        <span>Cómo interactúa una empresa con el sistema</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🤖</span>
        <span>Dónde entra la IA</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">💳</span>
        <span>Cómo se controlan los créditos</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">💰</span>
        <span>Cómo se conecta con el modelo de suscripción</span>
      </div>
    </div>
  </div>
</div>

<div class="scenario-section">
  <h2 class="section-title">🏢 Escenario Real (B2B México)</h2>
  <div class="scenario-card">
    <div class="scenario-header">
      <div class="scenario-icon">🇲🇽</div>
      <div class="scenario-info">
        <h3>Empresa ejemplo:</h3>
        <p>Despacho contable, consultoría, agencia o constructora que necesita generar documentos internos y externos con apoyo de IA.</p>
      </div>
    </div>
    
    <div class="company-types">
      <h4>🏢 Tipos de empresas objetivo:</h4>
      <div class="types-grid">
        <div class="type-card">
          <span class="type-icon">📋</span>
          <span>Despachos contables</span>
        </div>
        <div class="type-card">
          <span class="type-icon">📈</span>
          <span>Consultorías</span>
        </div>
        <div class="type-card">
          <span class="type-icon">🎨</span>
          <span>Agencias creativas</span>
        </div>
        <div class="type-card">
          <span class="type-icon">🏗️</span>
          <span>Constructoras</span>
        </div>
        <div class="type-card">
          <span class="type-icon">⚖️</span>
          <span>Despachos legales</span>
        </div>
        <div class="type-card">
          <span class="type-icon">🏥</span>
          <span>Inmobiliarias</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main-flow-section">
  <h2 class="section-title">🚀 Flujo General del Sistema</h2>
  <div class="flow-container">
    <div class="flow-diagram">
      <div class="flow-step start">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>📝 Empresa se registra</h4>
          <p>Proceso de onboarding inicial</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>🏢 Se crea registro en companies</h4>
          <p>Establecimiento del tenant empresarial</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>👥 Admin crea usuarios</h4>
          <p>Configuración del equipo de trabajo</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>🔑 Usuario inicia sesión</h4>
          <p>Autenticación en el sistema</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step">
        <div class="step-number">5</div>
        <div class="step-content">
          <h4>🛡️ Middleware detecta company_id</h4>
          <p>Establecimiento del contexto empresarial</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step">
        <div class="step-number">6</div>
        <div class="step-content">
          <h4>🏢 Contexto de empresa activo</h4>
          <p>Todas las operaciones filtradas por empresa</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step">
        <div class="step-number">7</div>
        <div class="step-content">
          <h4>🤖 Usuario solicita generación con IA</h4>
          <p>Inicio del procesamiento inteligente</p>
        </div>
      </div>
      <div class="flow-arrow">↓</div>
      
      <div class="flow-step decision">
        <div class="step-number">8</div>
        <div class="step-content">
          <h4>🔍 Sistema valida plan y créditos</h4>
          <p>Verificación de límites y permissions</p>
        </div>
      </div>
      <div class="flow-split">
        <div class="flow-branch success">
          <div class="branch-arrow success">✓ Sí</div>
          <div class="flow-step success">
            <div class="step-number">9a</div>
            <div class="step-content">
              <h4>🤖 IA genera contenido</h4>
              <p>Procesamiento asíncrono mediante queues</p>
            </div>
          </div>
          <div class="flow-arrow">↓</div>
          <div class="flow-step end">
            <div class="step-number">10</div>
            <div class="step-content">
              <h4>💾 Documento se guarda</h4>
              <p>Almacenamiento en BD con metadatos</p>
            </div>
          </div>
        </div>
        
        <div class="flow-branch error">
          <div class="branch-arrow error">✗ No</div>
          <div class="flow-step error">
            <div class="step-number">9b</div>
            <div class="step-content">
              <h4>💳 Solicitar upgrade de plan</h4>
              <p>Redirección a facturación</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.hero-section.business-flow {
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
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

.objective-text {
  font-size: 18px;
  color: #2c3e50;
  margin-bottom: 30px;
  line-height: 1.6;
}

.objective-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.obj-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 20px;
  background: #f8f9fa;
  border-radius: 12px;
  transition: all 0.3s ease;
  border-left: 4px solid #667eea;
}

.obj-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  border-left-color: #764ba2;
}

.obj-icon {
  font-size: 24px;
  color: #667eea;
}

.scenario-section {
  padding: 40px 20px;
}

.scenario-card {
  background: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
  max-width: 1000px;
  margin: 0 auto;
  border-top: 5px solid #e74c3c;
}

.scenario-header {
  display: flex;
  align-items: flex-start;
  gap: 25px;
  margin-bottom: 35px;
  padding-bottom: 25px;
  border-bottom: 2px solid #f8f9fa;
}

.scenario-icon {
  font-size: 48px;
  padding: 15px;
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.scenario-info h3 {
  color: #e74c3c;
  font-size: 22px;
  margin-bottom: 15px;
}

.scenario-info p {
  color: #2c3e50;
  font-size: 16px;
  line-height: 1.6;
}

.company-types h4 {
  color: #2c3e50;
  margin-bottom: 25px;
  font-size: 18px;
}

.types-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
}

.type-card {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 20px;
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  border-radius: 12px;
  transition: all 0.3s ease;
  border-left: 4px solid #e74c3c;
}

.type-card:hover {
  transform: translateY(-3px) scale(1.02);
  background: linear-gradient(135deg, #e9ecef, #dee2e6);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.type-icon {
  font-size: 24px;
  color: #e74c3c;
}

.type-card span:last-child {
  font-weight: 500;
  color: #2c3e50;
}

.main-flow-section {
  padding: 50px 20px;
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
}

.flow-container {
  max-width: 800px;
  margin: 0 auto;
}

.flow-diagram {
  position: relative;
}

.flow-step {
  background: white;
  border-radius: 16px;
  padding: 25px;
  margin: 20px 0;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  position: relative;
  transition: all 0.3s ease;
  border-left: 5px solid #667eea;
}

.flow-step:hover {
  transform: translateX(10px);
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
}

.flow-step.start {
  border-left-color: #27ae60;
  background: linear-gradient(135deg, #d5f5d5, #b8e6b8);
}

.flow-step.decision {
  border-left-color: #f39c12;
  background: linear-gradient(135deg, #ffeaa7, #fdcb6e);
}

.flow-step.success {
  border-left-color: #27ae60;
  background: linear-gradient(135deg, #d5f5d5, #b8e6b8);
}

.flow-step.error {
  border-left-color: #e74c3c;
  background: linear-gradient(135deg, #ffdddd, #ffa8a8);
}

.flow-step.end {
  border-left-color: #9b59b6;
  background: linear-gradient(135deg, #e8d5f5, #d1b3f5);
}

.step-number {
  position: absolute;
  top: -15px;
  left: 25px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 14px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.step-content h4 {
  color: #2c3e50;
  margin-bottom: 8px;
  font-size: 18px;
}

.step-content p {
  color: #6c757d;
  font-size: 14px;
  margin: 0;
  line-height: 1.4;
}

.flow-arrow {
  text-align: center;
  font-size: 32px;
  color: #667eea;
  margin: 15px 0;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.flow-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  margin: 30px 0;
  position: relative;
}

.flow-branch {
  position: relative;
}

.branch-arrow {
  text-align: center;
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 15px;
  padding: 10px;
  border-radius: 25px;
  color: white;
}

.branch-arrow.success {
  background: linear-gradient(135deg, #27ae60, #2ecc71);
}

.branch-arrow.error {
  background: linear-gradient(135deg, #e74c3c, #c0392b);
}

.flow-branch .flow-step {
  margin: 10px 0;
}

.flow-branch .flow-arrow {
  font-size: 24px;
  margin: 10px 0;
}

@media (max-width: 768px) {
  .objective-grid,
  .types-grid {
    grid-template-columns: 1fr;
  }
  
  .scenario-header {
    flex-direction: column;
    text-align: center;
  }
  
  .flow-split {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .flow-step {
    padding: 20px;
  }
  
  .flow-step:hover {
    transform: translateY(-5px);
  }
  
  .step-content h4 {
    font-size: 16px;
  }
}
</style>


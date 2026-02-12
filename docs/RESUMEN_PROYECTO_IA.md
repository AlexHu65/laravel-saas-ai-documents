---
layout: default
title: Resumen del Proyecto para IA
nav_order: 6
---

<div class="hero-section ai-summary">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Guía Rápida</span><br>
      <span class="highlight">Para IA & Asistentes</span>
    </h1>
    <p class="hero-subtitle">
      Contexto condensado y reglas operativas<br>
      <strong>🤖 Optimizado para sesiones de IA</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">📋 Resumen Ejecutivo</span>
      <span class="tag">🎯 Estado Inicial</span>
      <span class="tag">⚡ Referencia Rápida</span>
    </div>
  </div>
</div>

<div class="context-section">
  <div class="context-card main">
    <div class="card-icon">🧠</div>
    <h2>Contexto del Proyecto</h2>
    <div class="context-content">
      <p class="project-description">
        <strong>Laravel SaaS AI Documents</strong> es una plataforma SaaS enfocada en el procesamiento inteligente de documentos corporativos. El proyecto está en <span class="status-badge initial">estado inicial</span> (Laravel 11.31 recién instalado) sin funcionalidad de negocio implementada.
      </p>
      
      <div class="key-features">
        <div class="feature-row">
          <span class="feature-icon">🏢</span>
          <span>Arquitectura <strong>multi-tenant</strong> donde cada empresa opera independientemente</span>
        </div>
        <div class="feature-row">
          <span class="feature-icon">📄</span>
          <span>Core del negocio: recibir documentos (PDF, Word), procesarlos con <strong>APIs de IA</strong></span>
        </div>
        <div class="feature-row">
          <span class="feature-icon">💰</span>
          <span>Sistema de <strong>suscripciones</strong> con límites de uso mensual de tokens IA</span>
        </div>
        <div class="feature-row">
          <span class="feature-icon">🏗️</span>
          <span>Arquitectura <strong>Domain Driven Design</strong> con capas bien definidas</span>
        </div>
        <div class="feature-row">
          <span class="feature-icon">⚡</span>
          <span><strong>Processing queues</strong> para manejo asíncrono + event sourcing</span>
        </div>
        <div class="feature-row">
          <span class="feature-icon">🔒</span>
          <span><strong>UUID públicos</strong> para seguridad + rate limiting por plan</span>
        </div>
      </div>

      <div class="warning-box">
        <span class="warning-icon">⚠️</span>
        <p><strong>Estado crítico:</strong> Sin modelos, migraciones o integraciones implementadas - requiere construcción completa desde cero siguiendo especificaciones del ERD.</p>
      </div>
    </div>
  </div>
</div>

<div class="entities-section">
  <h2 class="section-title">🗄️ Entidades Principales</h2>
  <div class="entities-grid">
    <div class="entity-card">
      <div class="entity-icon">👤</div>
      <h3>User</h3>
      <p>Usuarios con roles por empresa<br>(Admin, Member, Viewer)</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">🏢</div>
      <h3>Company</h3>
      <p>Organizaciones multi-tenant con configuraciones independientes</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">📄</div>
      <h3>Document</h3>
      <p>Archivos cargados para procesamiento IA con metadatos</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">⚙️</div>
      <h3>ProcessingJob</h3>
      <p>Jobs asíncronos de análisis IA con tracking de tokens/costos</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">💳</div>
      <h3>Subscription</h3>
      <p>Suscripciones con límites de uso y facturación Stripe</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">📊</div>
      <h3>Plan</h3>
      <p>Definición de características y límites por tipo</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">🤖</div>
      <h3>AIProvider</h3>
      <p>Configuración de servicios IA (OpenAI, Claude, etc.)</p>
    </div>
    <div class="entity-card">
      <div class="entity-icon">📈</div>
      <h3>Usage</h3>
      <p>Tracking detallado para facturación y control de límites</p>
    </div>
  </div>
</div>

<div class="flows-section">
  <h2 class="section-title">🔄 Flujos Críticos</h2>
  <div class="flows-grid">
    <div class="flow-card">
      <div class="flow-number">1</div>
      <h3>Onboarding</h3>
      <div class="flow-steps">
        <div class="step">📝 Registro</div>
        <div class="arrow">→</div>
        <div class="step">✅ Verificación</div>
        <div class="arrow">→</div>
        <div class="step">💳 Selección Plan</div>
        <div class="arrow">→</div>
        <div class="step">🏢 Setup Empresa</div>
        <div class="arrow">→</div>
        <div class="step">📄 Primer Documento</div>
      </div>
    </div>
    
    <div class="flow-card">
      <div class="flow-number">2</div>
      <h3>Procesamiento</h3>
      <div class="flow-steps">
        <div class="step">📤 Upload</div>
        <div class="arrow">→</div>
        <div class="step">🔍 Validación</div>
        <div class="arrow">→</div>
        <div class="step">⏳ Queue</div>
        <div class="arrow">→</div>
        <div class="step">🤖 IA Analysis</div>
        <div class="arrow">→</div>
        <div class="step">💾 Storage</div>
        <div class="arrow">→</div>
        <div class="step">🔔 Notification</div>
      </div>
    </div>
    
    <div class="flow-card">
      <div class="flow-number">3</div>
      <h3>Facturación</h3>
      <div class="flow-steps">
        <div class="step">📊 Uso</div>
        <div class="arrow">→</div>
        <div class="step">📈 Agregación</div>
        <div class="arrow">→</div>
        <div class="step">🚫 Límites</div>
        <div class="arrow">→</div>
        <div class="step">💰 Facturación</div>
        <div class="arrow">→</div>
        <div class="step">🔄 Renovación</div>
      </div>
    </div>
  </div>
</div>

<div class="architecture-section">
  <h2 class="section-title">🏗️ Decisiones Arquitectónicas Clave</h2>
  <div class="architecture-grid">
    <div class="architecture-card">
      <div class="arch-icon">🏢</div>
      <h4>Multi-tenancy</h4>
      <p>company_id en todas las entidades principales</p>
    </div>
    <div class="architecture-card">
      <div class="arch-icon">⏳</div>
      <h4>Queue System</h4>
      <p>Obligatorio para procesamiento asíncrono de IA</p>
    </div>
    <div class="architecture-card">
      <div class="arch-icon">🔒</div>
      <h4>UUID Públicos</h4>
      <p>Para Documents (seguridad)</p>
    </div>
    <div class="architecture-card">
      <div class="arch-icon">📋</div>
      <h4>JSON Fields</h4>
      <p>Configuraciones flexibles (settings, limits, results)</p>
    </div>
    <div class="architecture-card">
      <div class="arch-icon">🗑️</div>
      <h4>Soft Deletes</h4>
      <p>Entidades de negocio + auditoría completa en logs</p>
    </div>
    <div class="architecture-card">
      <div class="arch-icon">🚦</div>
      <h4>Rate Limiting</h4>
      <p>Por company y plan para proteger APIs externas</p>
    </div>
  </div>
</div>

<div class="rules-section">
  <h2 class="section-title">⚠️ Reglas que la IA debe Respetar</h2>
  <div class="rules-container">
    <div class="rules-grid">
      <div class="rule-card critical">
        <div class="rule-number">1</div>
        <div class="rule-content">
          <h4>🚫 Archivos Core</h4>
          <p><strong>NUNCA modificar</strong> archivos vendor o configuraciones core sin confirmación</p>
        </div>
      </div>
      
      <div class="rule-card critical">
        <div class="rule-number">2</div>
        <div class="rule-content">
          <h4>🗄️ Migraciones</h4>
          <p><strong>SIEMPRE crear migraciones</strong> antes de implementar modelos</p>
        </div>
      </div>
      
      <div class="rule-card critical">
        <div class="rule-number">3</div>
        <div class="rule-content">
          <h4>🏢 Multi-tenant</h4>
          <p><strong>OBLIGATORIO filtrar por company_id</strong> en todas las queries</p>
        </div>
      </div>
      
      <div class="rule-card important">
        <div class="rule-number">4</div>
        <div class="rule-content">
          <h4>📊 Límites</h4>
          <p><strong>VALIDAR límites de plan</strong> antes de procesar documentos</p>
        </div>
      </div>
      
      <div class="rule-card important">
        <div class="rule-number">5</div>
        <div class="rule-content">
          <h4>⏳ Queues</h4>
          <p><strong>USAR queues</strong> para procesamiento IA (nunca síncrono)</p>
        </div>
      </div>
      
      <div class="rule-card important">
        <div class="rule-number">6</div>
        <div class="rule-content">
          <h4>🔄 Try-Catch</h4>
          <p><strong>IMPLEMENTAR try-catch</strong> en integraciones externas con reintentos</p>
        </div>
      </div>
      
      <div class="rule-card standard">
        <div class="rule-number">7</div>
        <div class="rule-content">
          <h4>📝 Convenciones</h4>
          <p><strong>SEGUIR convenciones Laravel</strong>: PascalCase modelos, camelCase variables</p>
        </div>
      </div>
      
      <div class="rule-card standard">
        <div class="rule-number">8</div>
        <div class="rule-content">
          <h4>🧪 Tests</h4>
          <p><strong>CREAR tests</strong> para funcionalidades críticas de procesamiento</p>
        </div>
      </div>
      
      <div class="rule-card standard">
        <div class="rule-number">9</div>
        <div class="rule-content">
          <h4>📋 Logs</h4>
          <p><strong>LOGS detallados</strong> para debugging de procesamiento IA</p>
        </div>
      </div>
      
      <div class="rule-card standard">
        <div class="rule-number">10</div>
        <div class="rule-content">
          <h4>💾 Backup</h4>
          <p><strong>BACKUP antes</strong> de cambios en estructura de BD existente</p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.hero-section.ai-summary {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 60px 20px;
  text-align: center;
  color: white;
}

.context-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.context-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 1000px;
  margin: 0 auto;
}

.context-card .card-icon {
  font-size: 48px;
  margin-bottom: 20px;
  display: block;
}

.project-description {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 30px;
  color: #2c3e50;
}

.status-badge.initial {
  background: linear-gradient(135deg, #ffeaa7, #fab1a0);
  color: #2d3436;
  padding: 4px 12px;
  border-radius: 20px;
  font-weight: bold;
  font-size: 14px;
}

.key-features {
  margin: 30px 0;
}

.feature-row {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  padding: 12px;
  background: #f8f9fa;
  border-radius: 8px;
  transition: transform 0.2s ease;
}

.feature-row:hover {
  transform: translateX(5px);
}

.feature-icon {
  font-size: 24px;
  margin-right: 15px;
  width: 40px;
}

.warning-box {
  background: linear-gradient(135deg, #fdcb6e, #e17055);
  color: white;
  padding: 20px;
  border-radius: 12px;
  margin-top: 30px;
  display: flex;
  align-items: center;
}

.warning-icon {
  font-size: 24px;
  margin-right: 15px;
}

.entities-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.entity-card {
  background: white;
  border-radius: 12px;
  padding: 25px;
  text-align: center;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.entity-card:hover {
  transform: translateY(-5px);
  border-color: #667eea;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.entity-icon {
  font-size: 36px;
  margin-bottom: 15px;
  display: block;
}

.entity-card h3 {
  color: #2c3e50;
  margin-bottom: 10px;
  font-size: 18px;
}

.entity-card p {
  color: #6c757d;
  font-size: 14px;
  line-height: 1.4;
}

.flows-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.flow-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  position: relative;
}

.flow-number {
  position: absolute;
  top: -15px;
  left: 30px;
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

.flow-steps {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 10px;
  margin-top: 15px;
}

.step {
  background: #f8f9fa;
  padding: 8px 12px;
  border-radius: 8px;
  font-size: 12px;
  font-weight: 500;
  color: #495057;
}

.arrow {
  color: #667eea;
  font-weight: bold;
}

.architecture-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.architecture-card {
  background: white;
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.architecture-card:hover {
  transform: translateY(-3px);
}

.arch-icon {
  font-size: 32px;
  margin-bottom: 10px;
  display: block;
}

.architecture-card h4 {
  color: #2c3e50;
  margin-bottom: 8px;
}

.architecture-card p {
  color: #6c757d;
  font-size: 13px;
}

.rules-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.rule-card {
  background: white;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: flex-start;
  transition: all 0.3s ease;
  border-left: 4px solid #e9ecef;
}

.rule-card.critical {
  border-left-color: #e74c3c;
}

.rule-card.important {
  border-left-color: #f39c12;
}

.rule-card.standard {
  border-left-color: #3498db;
}

.rule-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.rule-number {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 14px;
  margin-right: 15px;
  flex-shrink: 0;
}

.rule-content h4 {
  color: #2c3e50;
  margin-bottom: 5px;
  font-size: 16px;
}

.rule-content p {
  color: #6c757d;
  font-size: 13px;
  line-height: 1.4;
  margin: 0;
}

@media (max-width: 768px) {
  .entities-grid,
  .flows-grid,
  .architecture-grid,
  .rules-grid {
    grid-template-columns: 1fr;
  }
  
  .flow-steps {
    flex-direction: column;
    align-items: flex-start;
  }
  
  .arrow {
    transform: rotate(90deg);
  }
}
</style>

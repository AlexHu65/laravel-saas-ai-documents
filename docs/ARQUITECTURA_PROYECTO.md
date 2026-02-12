---
layout: default
title: Arquitectura del proyecto
nav_order: 1
---

<div class="hero-section architecture">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Arquitectura</span><br>
      <span class="highlight">del Proyecto</span>
    </h1>
    <p class="hero-subtitle">
      Diseño técnico completo del sistema<br>
      <strong>🏗️ Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🏢 Multi-tenant B2B</span>
      <span class="tag">🤖 IA Integration</span>
      <span class="tag">⚡ Escalable</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🎯</div>
    <h2>Objetivo del Sistema</h2>
    <div class="objectives-grid">
      <div class="obj-item">
        <span class="obj-icon">🏢</span>
        <span>Multi-empresa (B2B)</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🔒</span>
        <span>Segura y escalable</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🇲🇽</span>
        <span>Enfocada en PyMEs de México</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🤖</span>
        <span>Con uso práctico de IA</span>
      </div>
    </div>
  </div>
</div>

<div class="stack-section">
  <h2 class="section-title">🧩 Stack Tecnológico</h2>
  <div class="stack-grid">
    <div class="stack-category">
      <div class="category-header backend">
        <span class="category-icon">⚙️</span>
        <h3>Backend</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge php">PHP 8.2</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge laravel">Laravel 11</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Arquitectura MVC + servicios</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Jobs y colas para IA</span>
        </div>
      </div>
    </div>

    <div class="stack-category">
      <div class="category-header frontend">
        <span class="category-icon">🎨</span>
        <h3>Frontend</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge github">GitHub Pages (Docs)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge future">Futuro: React o Angular</span>
        </div>
      </div>
    </div>

    <div class="stack-category">
      <div class="category-header database">
        <span class="category-icon">🗄️</span>
        <h3>Base de datos</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge mysql">MySQL / MariaDB</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge">Modelo relacional normalizado</span>
        </div>
      </div>
    </div>

    <div class="stack-category">
      <div class="category-header infrastructure">
        <span class="category-icon">☁️</span>
        <h3>Infraestructura</h3>
      </div>
      <div class="tech-list">
        <div class="tech-item">
          <span class="tech-badge github">GitHub Actions (CI)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge github">GitHub Pages (Docs)</span>
        </div>
        <div class="tech-item">
          <span class="tech-badge pending">Hosting cloud (por definir)</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="b2b-model-section">
  <h2 class="section-title">🏢 Modelo B2B (Multi-empresa)</h2>
  <div class="b2b-content">
    <div class="model-description">
      <p>Cada entidad principal opera de forma independiente por empresa:</p>
    </div>
    <div class="rules-box">
      <h3>🔐 Reglas clave:</h3>
      <div class="rule-list">
        <div class="rule-item">
          <span class="rule-icon">👤</span>
          <span>Un usuario pertenece a una empresa</span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">🚫</span>
          <span>Los datos NO se comparten entre empresas</span>
        </div>
        <div class="rule-item">
          <span class="rule-icon">🔍</span>
          <span>Toda consulta se filtra por empresa</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="auth-section">
  <div class="section-card">
    <div class="card-icon">🔐</div>
    <h2>Autenticación y Contexto</h2>
    <div class="auth-features">
      <div class="feature-item">
        <span class="feature-badge">🔑 Autenticación basada en Laravel</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">🏢 Contexto de empresa cargado en cada request</span>
      </div>
      <div class="feature-item">
        <span class="feature-badge">🛡️ Middleware para asegurar aislamiento de datos</span>
      </div>
    </div>
  </div>
</div>

<div class="ai-integration-section">
  <h2 class="section-title">🤖 Integración con IA</h2>
  <div class="ai-content">
    <div class="ai-uses">
      <h3>La IA se utiliza para:</h3>
      <div class="uses-grid">
        <div class="use-card">
          <span class="use-icon">📝</span>
          <span>Generar documentos a partir de prompts</span>
        </div>
        <div class="use-card">
          <span class="use-icon">📄</span>
          <span>Resumir textos</span>
        </div>
        <div class="use-card">
          <span class="use-icon">✏️</span>
          <span>Mejorar redacción</span>
        </div>
        <div class="use-card">
          <span class="use-icon">📂</span>
          <span>Clasificar contenido</span>
        </div>
      </div>
    </div>
    
    <div class="ai-design">
      <h3>🎨 Diseño</h3>
      <div class="design-features">
        <div class="design-item">
          <span class="design-icon">🔧</span>
          <span>Servicio desacoplado (AIService)</span>
        </div>
        <div class="design-item">
          <span class="design-icon">⏳</span>
          <span>Uso de colas para tareas pesadas</span>
        </div>
        <div class="design-item">
          <span class="design-icon">🔄</span>
          <span>Respuesta asíncrona</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="flow-section">
  <h2 class="section-title">🔄 Flujo General</h2>
  <div class="flow-diagram">
    <div class="flow-step">
      <div class="step-number">1</div>
      <div class="step-content">
        <h4>🔑 Usuario inicia sesión</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">2</div>
      <div class="step-content">
        <h4>🏢 Se establece contexto de empresa</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">3</div>
      <div class="step-content">
        <h4>📝 Usuario solicita generación de documento</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">4</div>
      <div class="step-content">
        <h4>⏳ Se envía tarea a cola</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">5</div>
      <div class="step-content">
        <h4>🤖 IA procesa y devuelve resultado</h4>
      </div>
    </div>
    <div class="flow-arrow">↓</div>
    <div class="flow-step">
      <div class="step-number">6</div>
      <div class="step-content">
        <h4>💾 Documento se guarda y versiona</h4>
      </div>
    </div>
  </div>
</div>

<div class="scalability-section">
  <div class="section-card">
    <div class="card-icon">📈</div>
    <h2>Escalabilidad</h2>
    <div class="scalability-points">
      <div class="point-item">
        <span class="point-icon">🏢</span>
        <span>Escalar por empresa</span>
      </div>
      <div class="point-item">
        <span class="point-icon">📊</span>
        <span>Limitar uso de IA por plan</span>
      </div>
      <div class="point-item">
        <span class="point-icon">🔍</span>
        <span>Monitorear consumo</span>
      </div>
    </div>
  </div>
</div>

<div class="future-section">
  <div class="section-card">
    <div class="card-icon">🔮</div>
    <h2>Evolución Futura</h2>
    <div class="future-features">
      <div class="future-item">
        <span class="future-icon">👥</span>
        <span>Roles y permisos</span>
      </div>
      <div class="future-item">
        <span class="future-icon">📋</span>
        <span>Auditoría</span>
      </div>
      <div class="future-item">
        <span class="future-icon">🔗</span>
        <span>Integraciones externas</span>
      </div>
      <div class="future-item">
        <span class="future-icon">💰</span>
        <span>Facturación automática</span>
      </div>
    </div>
  </div>
</div>

<div class="notes-section">
  <div class="notes-card">
    <div class="card-icon">📌</div>
    <h2>Notas Finales</h2>
    <p>Esta arquitectura prioriza:</p>
    <div class="priority-list">
      <div class="priority-item">
        <span class="priority-icon">✨</span>
        <span>Simplicidad inicial</span>
      </div>
      <div class="priority-item">
        <span class="priority-icon">🏆</span>
        <span>Buenas prácticas</span>
      </div>
      <div class="priority-item">
        <span class="priority-icon">📈</span>
        <span>Crecimiento progresivo</span>
      </div>
    </div>
  </div>
</div>

<div class="status-section">
  <h2 class="section-title">🚀 Estado Actual del Proyecto</h2>
  <div class="status-grid">
    <div class="status-card initial">
      <h3>🔴 Estado Inicial</h3>
      <p><strong>Proyecto en estado inicial/esqueleto</strong> - Laravel 11.31 recién instalado sin funcionalidad de negocio implementada.</p>
    </div>
    
    <div class="status-card detected">
      <h3>🔍 Stack Detectado</h3>
      <div class="detected-list">
        <div class="detected-item">
          <span class="framework-badge laravel">Laravel 11.31</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge php">PHP ^8.2</span>
        </div>
        <div class="detected-item">
          <span class="framework-badge tools">Laravel Pail, Pint, Sail</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="architecture-diagram">
    <h3>🏗️ Arquitectura Actual</h3>
    <div class="layers-diagram">
      <div class="layer presentation">
        <h4>🌐 Presentación</h4>
        <p>Rutas Web + API - Básicas</p>
      </div>
      <div class="layer application">
        <h4>⚙️ Aplicación</h4>
        <p>Controladores - N/A</p>
      </div>
      <div class="layer domain">
        <h4>🧠 Dominio</h4>
        <p>Modelos - N/A</p>
      </div>
      <div class="layer infrastructure">
        <h4>💾 Infraestructura</h4>
        <p>BD, APIs Externas - N/A</p>
      </div>
    </div>
  </div>
</div>

<div class="modules-section">
  <h2 class="section-title">📦 Módulos Futuros Requeridos</h2>
  <div class="modules-grid">
    <div class="module-card">
      <div class="module-icon">🔑</div>
      <h3>Módulo de Autenticación</h3>
      <ul>
        <li>Sistema de registro/login</li>
        <li>Gestión de usuarios</li>
        <li>Roles y permisos</li>
      </ul>
    </div>
    
    <div class="module-card">
      <div class="module-icon">🏢</div>
      <h3>Módulo de Empresas</h3>
      <ul>
        <li>Gestión multi-tenant</li>
        <li>Contexto empresarial</li>
        <li>Configuraciones por empresa</li>
      </ul>
    </div>
    
    <div class="module-card">
      <div class="module-icon">🤖</div>
      <h3>Módulo de Documentos con IA</h3>
      <ul>
        <li>Carga y procesamiento</li>
        <li>Integración con APIs de IA</li>
        <li>Análisis y extracción de datos</li>
      </ul>
    </div>
    
    <div class="module-card">
      <div class="module-icon">💳</div>
      <h3>Módulo de Suscripciones</h3>
      <ul>
        <li>Gestión de planes</li>
        <li>Facturación</li>
        <li>Límites de uso</li>
      </ul>
    </div>
    
    <div class="module-card">
      <div class="module-icon">📊</div>
      <h3>Módulo de API</h3>
      <ul>
        <li>API REST para integraciones</li>
        <li>Autenticación con tokens</li>
        <li>Rate limiting</li>
      </ul>
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
  background: linear-gradient(135deg, #ffeaa7, #fab1a0);
}

.category-header.database {
  background: linear-gradient(135deg, #74b9ff, #0984e3);
}

.category-header.infrastructure {
  background: linear-gradient(135deg, #fd79a8, #e84393);
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

.tech-badge.php {
  background: linear-gradient(135deg, #777bb4, #252730);
}

.tech-badge.laravel {
  background: linear-gradient(135deg, #ff2d20, #d63031);
}

.tech-badge.mysql {
  background: linear-gradient(135deg, #e97e22, #d63031);
}

.tech-badge.github {
  background: linear-gradient(135deg, #333, #24292e);
}

.tech-badge.future {
  background: linear-gradient(135deg, #fdcb6e, #e17055);
}

.tech-badge.pending {
  background: linear-gradient(135deg, #a29bfe, #6c5ce7);
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

.ai-content {
  max-width: 1000px;
  margin: 0 auto;
}

.uses-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
  margin: 20px 0;
}

.use-card {
  background: white;
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.use-card:hover {
  transform: translateY(-3px);
}

.use-icon {
  font-size: 32px;
  display: block;
  margin-bottom: 10px;
}

.design-features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  margin-top: 20px;
}

.design-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  background: white;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.design-icon {
  font-size: 24px;
  color: #667eea;
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

.layers-diagram {
  max-width: 500px;
  margin: 20px auto;
}

.layer {
  margin: 10px 0;
  padding: 20px;
  border-radius: 12px;
  text-align: center;
}

.layer.presentation {
  background: linear-gradient(135deg, #ff7675, #fd79a8);
  color: white;
}

.layer.application {
  background: linear-gradient(135deg, #fdcb6e, #e17055);
  color: white;
}

.layer.domain {
  background: linear-gradient(135deg, #74b9ff, #0984e3);
  color: white;
}

.layer.infrastructure {
  background: linear-gradient(135deg, #fd79a8, #e84393);
  color: white;
}

.modules-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  margin-top: 30px;
}

.module-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  border-top: 4px solid #667eea;
}

.module-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.module-icon {
  font-size: 36px;
  margin-bottom: 15px;
  display: block;
  text-align: center;
}

.module-card h3 {
  color: #2c3e50;
  margin-bottom: 15px;
  text-align: center;
}

.module-card ul {
  list-style: none;
  padding: 0;
}

.module-card li {
  padding: 8px 0;
  border-bottom: 1px solid #f8f9fa;
  color: #6c757d;
}

.module-card li:before {
  content: '✓';
  color: #27ae60;
  margin-right: 10px;
  font-weight: bold;
}

.notes-card {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
  max-width: 600px;
  margin: 40px auto;
  text-align: center;
}

.priority-list {
  margin-top: 25px;
}

.priority-item {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  padding: 15px;
  margin-bottom: 15px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  backdrop-filter: blur(10px);
}

.priority-icon {
  font-size: 20px;
}

@media (max-width: 768px) {
  .objectives-grid,
  .stack-grid,
  .uses-grid,
  .design-features,
  .status-grid,
  .modules-grid {
    grid-template-columns: 1fr;
  }
  
  .auth-features,
  .scalability-points,
  .future-features {
    grid-template-columns: 1fr;
  }
}
</style>



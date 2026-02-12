---
layout: default
title: Diagrama Entidad-Relación
nav_order: 2
---

<div class="hero-section erd">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Diagrama</span><br>
      <span class="highlight">Entidad-Relación</span>
    </h1>
    <p class="hero-subtitle">
      Modelo de datos completo del sistema<br>
      <strong>📊 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🗄️ Base de Datos</span>
      <span class="tag">🔗 Relaciones</span>
      <span class="tag">🏢 Multi-tenant</span>
    </div>
  </div>
</div>

<div class="objective-section">
  <div class="objective-card">
    <div class="card-icon">🧠</div>
    <h2>Objetivo</h2>
    <p class="objective-text">
      Definir el <strong>modelo de datos base</strong> del sistema <em>Laravel SaaS AI Documents</em>, asegurando:
    </p>
    <div class="objective-grid">
      <div class="obj-item">
        <span class="obj-icon">🏢</span>
        <span>Arquitectura multi-empresa (multi-tenant)</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">📈</span>
        <span>Escalabilidad B2B</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🔒</span>
        <span>Integridad referencial</span>
      </div>
      <div class="obj-item">
        <span class="obj-icon">🛠️</span>
        <span>Base sólida para migraciones en Laravel</span>
      </div>
    </div>
  </div>
</div>

<div class="entities-section">
  <h2 class="section-title">🏢 Entidad: Company</h2>
  <div class="entity-card company">
    <div class="entity-header">
      <div class="entity-icon">🏢</div>
      <div class="entity-info">
        <h3>companies</h3>
        <p class="entity-description">Tabla central del sistema multi-tenant</p>
      </div>
    </div>
    
    <div class="fields-grid">
      <div class="field-item primary">
        <span class="field-name">id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">Primary key</span>
      </div>
      <div class="field-item">
        <span class="field-name">name</span>
        <span class="field-type">string</span>
        <span class="field-desc">Company name</span>
      </div>
      <div class="field-item unique">
        <span class="field-name">slug</span>
        <span class="field-type">string</span>
        <span class="field-desc">Unique identifier</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">created_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Created</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">updated_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Updated</span>
      </div>
    </div>
    
    <div class="relations-section">
      <h4>🔗 Relaciones</h4>
      <div class="relations-list">
        <div class="relation-item">
          <span class="relation-icon">👥</span>
          <span>Una empresa tiene muchos usuarios</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">📄</span>
          <span>Una empresa tiene muchos documentos</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">⚙️</span>
          <span>Una empresa tiene muchos procesos</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">🤖</span>
          <span>Una empresa tiene muchas solicitudes de IA</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="entities-section">
  <h2 class="section-title">👤 Entidad: Users</h2>
  <div class="entity-card users">
    <div class="entity-header">
      <div class="entity-icon">👤</div>
      <div class="entity-info">
        <h3>users</h3>
        <p class="entity-description">Usuarios del sistema vinculados a empresas</p>
      </div>
    </div>
    
    <div class="fields-grid">
      <div class="field-item primary">
        <span class="field-name">id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">PK</span>
      </div>
      <div class="field-item foreign">
        <span class="field-name">company_id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">FK → companies.id</span>
      </div>
      <div class="field-item">
        <span class="field-name">name</span>
        <span class="field-type">string</span>
        <span class="field-desc">User name</span>
      </div>
      <div class="field-item unique">
        <span class="field-name">email</span>
        <span class="field-type">string</span>
        <span class="field-desc">Email</span>
      </div>
      <div class="field-item">
        <span class="field-name">password</span>
        <span class="field-type">string</span>
        <span class="field-desc">Hash password</span>
      </div>
      <div class="field-item">
        <span class="field-name">remember_token</span>
        <span class="field-type">string</span>
        <span class="field-desc">Token</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">created_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Fecha de creación</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">updated_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Fecha de actualización</span>
      </div>
    </div>
    
    <div class="relations-section">
      <h4>🔗 Relaciones</h4>
      <div class="relations-list">
        <div class="relation-item">
          <span class="relation-icon">🏢</span>
          <span>Belongs to a company</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">📄</span>
          <span>Can create documents</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">🤖</span>
          <span>Can generate AI requests</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="entities-section">
  <h2 class="section-title">📄 Entidad: Document</h2>
  <div class="entity-card documents">
    <div class="entity-header">
      <div class="entity-icon">📄</div>
      <div class="entity-info">
        <h3>documents</h3>
        <p class="entity-description">Documentos generados y gestionados con IA</p>
      </div>
    </div>
    
    <div class="fields-grid">
      <div class="field-item primary">
        <span class="field-name">id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">Primary key</span>
      </div>
      <div class="field-item foreign">
        <span class="field-name">company_id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">FK → companies.id</span>
      </div>
      <div class="field-item foreign">
        <span class="field-name">user_id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">FK → users.id</span>
      </div>
      <div class="field-item">
        <span class="field-name">title</span>
        <span class="field-type">string</span>
        <span class="field-desc">Document title</span>
      </div>
      <div class="field-item">
        <span class="field-name">content</span>
        <span class="field-type">longText</span>
        <span class="field-desc">Generated content</span>
      </div>
      <div class="field-item">
        <span class="field-name">version</span>
        <span class="field-type">integer</span>
        <span class="field-desc">Document version</span>
      </div>
      <div class="field-item">
        <span class="field-name">status</span>
        <span class="field-type">string</span>
        <span class="field-desc">draft / published</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">created_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Created</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">updated_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Updated</span>
      </div>
    </div>
    
    <div class="relations-section">
      <h4>🔗 Relaciones</h4>
      <div class="relations-list">
        <div class="relation-item">
          <span class="relation-icon">🏢</span>
          <span>Belongs to a company</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">👤</span>
          <span>Belongs to a user</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">🔄</span>
          <span>Can have multiple versions</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="entities-section">
  <h2 class="section-title">⚙️ Entidad: Process</h2>
  <div class="entity-card processes">
    <div class="entity-header">
      <div class="entity-icon">⚙️</div>
      <div class="entity-info">
        <h3>processes</h3>
        <p class="entity-description">Procesos empresariales definidos</p>
      </div>
    </div>
    
    <div class="fields-grid">
      <div class="field-item primary">
        <span class="field-name">id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">Primary key</span>
      </div>
      <div class="field-item foreign">
        <span class="field-name">company_id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">FK → companies.id</span>
      </div>
      <div class="field-item">
        <span class="field-name">name</span>
        <span class="field-type">string</span>
        <span class="field-desc">Process name</span>
      </div>
      <div class="field-item">
        <span class="field-name">description</span>
        <span class="field-type">text</span>
        <span class="field-desc">Description</span>
      </div>
      <div class="field-item">
        <span class="field-name">active</span>
        <span class="field-type">boolean</span>
        <span class="field-desc">Status</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">created_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Created</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">updated_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Updated</span>
      </div>
    </div>
    
    <div class="relations-section">
      <h4>🔗 Relaciones</h4>
      <div class="relations-list">
        <div class="relation-item">
          <span class="relation-icon">🏢</span>
          <span>Belongs to a company</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">📄</span>
          <span>Can be associated with documents</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="entities-section">
  <h2 class="section-title">🤖 Entidad: AIRequest</h2>
  <div class="entity-card ai-requests">
    <div class="entity-header">
      <div class="entity-icon">🤖</div>
      <div class="entity-info">
        <h3>ai_requests</h3>
        <p class="entity-description">Solicitudes de procesamiento con IA</p>
      </div>
    </div>
    
    <div class="fields-grid">
      <div class="field-item primary">
        <span class="field-name">id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">Primary key</span>
      </div>
      <div class="field-item foreign">
        <span class="field-name">company_id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">FK → companies.id</span>
      </div>
      <div class="field-item foreign">
        <span class="field-name">user_id</span>
        <span class="field-type">bigint</span>
        <span class="field-desc">FK → users.id</span>
      </div>
      <div class="field-item">
        <span class="field-name">type</span>
        <span class="field-type">string</span>
        <span class="field-desc">summary / writing / analysis</span>
      </div>
      <div class="field-item">
        <span class="field-name">prompt</span>
        <span class="field-type">text</span>
        <span class="field-desc">Sent prompt</span>
      </div>
      <div class="field-item">
        <span class="field-name">tokens_used</span>
        <span class="field-type">integer</span>
        <span class="field-desc">Consumed tokens</span>
      </div>
      <div class="field-item">
        <span class="field-name">status</span>
        <span class="field-type">string</span>
        <span class="field-desc">pending / completed / error</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">created_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Created</span>
      </div>
      <div class="field-item timestamp">
        <span class="field-name">updated_at</span>
        <span class="field-type">timestamp</span>
        <span class="field-desc">Updated</span>
      </div>
    </div>
    
    <div class="relations-section">
      <h4>🔗 Relaciones</h4>
      <div class="relations-list">
        <div class="relation-item">
          <span class="relation-icon">🏢</span>
          <span>Belongs to a company</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">👤</span>
          <span>Belongs to a user</span>
        </div>
        <div class="relation-item">
          <span class="relation-icon">📄</span>
          <span>Can generate documents</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="global-relations">
  <h2 class="section-title">🔗 Relaciones Globales</h2>
  <div class="relations-card">
    <div class="global-relation-info">
      <p>El sistema implementa un modelo <strong>multi-tenant estricto</strong> donde todas las entidades principales están vinculadas a empresas mediante <code>company_id</code>.</p>
    </div>
  </div>
</div>

<style>
.hero-section.erd {
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

.entities-section {
  padding: 40px 20px;
  margin-bottom: 40px;
}

.entity-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
  max-width: 1000px;
  margin: 30px auto;
  border-top: 5px solid #667eea;
  transition: all 0.3s ease;
}

.entity-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.entity-card.company {
  border-top-color: #e74c3c;
}

.entity-card.users {
  border-top-color: #3498db;
}

.entity-card.documents {
  border-top-color: #f39c12;
}

.entity-card.processes {
  border-top-color: #9b59b6;
}

.entity-card.ai-requests {
  border-top-color: #2ecc71;
}

.entity-header {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-bottom: 30px;
  padding-bottom: 20px;
  border-bottom: 2px solid #f8f9fa;
}

.entity-icon {
  font-size: 48px;
  padding: 15px;
  background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.entity-info h3 {
  color: #2c3e50;
  font-size: 24px;
  margin-bottom: 8px;
  font-family: 'Courier New', monospace;
  background: #f8f9fa;
  padding: 8px 15px;
  border-radius: 8px;
  display: inline-block;
}

.entity-description {
  color: #6c757d;
  font-style: italic;
  font-size: 16px;
}

.fields-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 15px;
  margin-bottom: 30px;
}

.field-item {
  display: grid;
  grid-template-columns: 1fr 1fr 1.5fr;
  gap: 15px;
  align-items: center;
  padding: 15px;
  background: #f8f9fa;
  border-radius: 10px;
  transition: all 0.3s ease;
  border-left: 4px solid #e9ecef;
}

.field-item:hover {
  background: #e9ecef;
  transform: translateX(5px);
}

.field-item.primary {
  border-left-color: #e74c3c;
  background: linear-gradient(135deg, #ffeaa7, #fab1a0);
  color: #2d3436;
}

.field-item.foreign {
  border-left-color: #3498db;
  background: linear-gradient(135df, #a29bfe, #74b9ff);
  color: white;
}

.field-item.unique {
  border-left-color: #f39c12;
  background: linear-gradient(135deg, #fdcb6e, #e17055);
  color: white;
}

.field-item.timestamp {
  border-left-color: #6c757d;
}

.field-name {
  font-family: 'Courier New', monospace;
  font-weight: bold;
  font-size: 14px;
}

.field-type {
  background: rgba(0, 0, 0, 0.1);
  padding: 4px 8px;
  border-radius: 6px;
  font-size: 12px;
  text-align: center;
  font-weight: 500;
}

.field-desc {
  font-size: 13px;
  color: #6c757d;
}

.field-item.primary .field-desc,
.field-item.foreign .field-desc,
.field-item.unique .field-desc {
  color: inherit;
  opacity: 0.8;
}

.relations-section {
  background: #f8f9fa;
  border-radius: 12px;
  padding: 25px;
  border: 2px solid #e9ecef;
}

.relations-section h4 {
  color: #2c3e50;
  margin-bottom: 20px;
  font-size: 18px;
}

.relations-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 15px;
}

.relation-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px;
  background: white;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.relation-item:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

.relation-icon {
  font-size: 18px;
  color: #667eea;
}

.global-relations {
  padding: 40px 20px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
}

.relations-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  padding: 30px;
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.global-relation-info {
  font-size: 18px;
  line-height: 1.6;
}

.global-relation-info code {
  background: rgba(255, 255, 255, 0.2);
  padding: 4px 8px;
  border-radius: 6px;
  font-weight: bold;
}

@media (max-width: 768px) {
  .objective-grid {
    grid-template-columns: 1fr;
  }
  
  .fields-grid {
    grid-template-columns: 1fr;
  }
  
  .field-item {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .relations-list {
    grid-template-columns: 1fr;
  }
  
  .entity-header {
    flex-direction: column;
    text-align: center;
  }
}
</style>


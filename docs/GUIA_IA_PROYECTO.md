---
layout: default
title: Guía de Operación IA
nav_order: 4
---

<div class="hero-section ai-guide">
  <div class="hero-content">
    <h1 class="hero-title">
      <span class="gradient-text">Guía de</span><br>
      <span class="highlight">Operación IA</span>
    </h1>
    <p class="hero-subtitle">
      Manual completo para IAs y Asistentes<br>
      <strong>🤖 Laravel SaaS AI Documents</strong>
    </p>
    <div class="hero-tags">
      <span class="tag">🛡️ Operaciones Seguras</span>
      <span class="tag">📋 Convenciones</span>
      <span class="tag">⚡ Estado Inicial</span>
    </div>
  </div>
</div>

<div class="introduction-section">
  <div class="intro-card">
    <div class="card-icon">💡</div>
    <h2>Introducción</h2>
    <p class="intro-text">
      Este proyecto es un <strong>Laravel SaaS recién inicializado</strong> enfocado en el procesamiento de documentos con IA. 
      El proyecto está en <span class="status-badge initial">estado inicial</span>, sin funcionalidad de negocio implementada.
    </p>
    <div class="intro-highlight">
      <span class="highlight-icon">⚠️</span>
      <p><strong>Estado crítico:</strong> Proyecto esqueleto - Requiere implementación completa desde cero</p>
    </div>
  </div>
</div>

<div class="structure-section">
  <h2 class="section-title">📁 Estructura del Proyecto</h2>
  <div class="structure-grid">
    <div class="structure-card">
      <h3>🗂️ Directorios Clave</h3>
      <div class="directory-tree">
        <div class="dir-item root">
          <span class="dir-icon">📁</span>
          <span>laravel-saas-ai-documents/</span>
        </div>
        <div class="dir-item">
          <span class="dir-icon">📁</span>
          <span><strong>app/</strong> - Lógica de aplicación <em>(vacío)</em></span>
        </div>
        <div class="dir-item">
          <span class="dir-icon">📁</span>
          <span><strong>config/</strong> - Configuraciones Laravel</span>
        </div>
        <div class="dir-item">
          <span class="dir-icon">📁</span>
          <span><strong>database/</strong> - Migraciones y seeders <em>(vacío)</em></span>
        </div>
        <div class="dir-item">
          <span class="dir-icon">📁</span>
          <span><strong>docs/</strong> - Documentación del proyecto</span>
        </div>
        <div class="dir-item">
          <span class="dir-icon">📁</span>
          <span><strong>routes/</strong> - Definición de rutas</span>
          <div class="sub-dir">
            <span class="dir-icon">📄</span>
            <span>web.php - Rutas web básicas</span>
          </div>
        </div>
        <div class="dir-item">
          <span class="dir-icon">📄</span>
          <span><strong>composer.json</strong> - Dependencias PHP</span>
        </div>
      </div>
    </div>
    
    <div class="structure-card">
      <h3>📊 Archivos Críticos Actuales</h3>
      <div class="critical-files">
        <div class="file-item config">
          <span class="file-icon">⚙️</span>
          <div class="file-info">
            <h4>config/app.php</h4>
            <p>Configuración principal de Laravel</p>
          </div>
        </div>
        <div class="file-item routes">
          <span class="file-icon">🛫</span>
          <div class="file-info">
            <h4>routes/web.php</h4>
            <p>Rutas web (básicas + test)</p>
          </div>
        </div>
        <div class="file-item php">
          <span class="file-icon">📦</span>
          <div class="file-info">
            <h4>composer.json</h4>
            <p>Dependencias del proyecto</p>
          </div>
        </div>
        <div class="file-item docs">
          <span class="file-icon">📄</span>
          <div class="file-info">
            <h4>docs/arranque-proyecto.md</h4>
            <p>Documentación de análisis</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="rules-section">
  <h2 class="section-title">📜 Reglas para Modificación de Archivos</h2>
  <div class="rules-grid">
    <div class="rules-card safe">
      <div class="rule-header safe">
        <span class="rule-icon">✅</span>
        <h3>Operaciones Seguras</h3>
      </div>
      <div class="rule-list">
        <div class="rule-item">
          <span class="item-icon">🛫</span>
          <span><strong>Agregar rutas</strong> en routes/web.php o routes/api.php</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🎮</span>
          <span><strong>Crear controladores</strong> en app/Http/Controllers/</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">📇</span>
          <span><strong>Crear modelos</strong> en app/Models/</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🗄️</span>
          <span><strong>Agregar migraciones</strong> con php artisan make:migration</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">📦</span>
          <span><strong>Instalar dependencias</strong> via composer require</span>
        </div>
      </div>
    </div>
    
    <div class="rules-card warning">
      <div class="rule-header warning">
        <span class="rule-icon">⚠️</span>
        <h3>Precauciones</h3>
      </div>
      <div class="rule-list">
        <div class="rule-item">
          <span class="item-icon">🚫</span>
          <span><strong>NO modificar</strong> config/app.php sin confirmar cambios</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🚫</span>
          <span><strong>NO eliminar</strong> rutas existentes sin verificar dependencias</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🔄</span>
          <span><strong>Siempre crear migraciones</strong> antes de modificar BD</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🔍</span>
          <span><strong>Validar compatibilidad</strong> de dependencias antes de instalar</span>
        </div>
      </div>
    </div>
    
    <div class="rules-card danger">
      <div class="rule-header danger">
        <span class="rule-icon">❌</span>
        <h3>Operaciones Prohibidas</h3>
      </div>
      <div class="rule-list">
        <div class="rule-item">
          <span class="item-icon">🚫</span>
          <span>Modificar archivos de <strong>vendor</strong></span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🚫</span>
          <span>Cambiar configuraciones de <strong>entorno</strong> sin backup</span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🚫</span>
          <span>Eliminar archivos de <strong>configuración Laravel</strong></span>
        </div>
        <div class="rule-item">
          <span class="item-icon">🚫</span>
          <span>Modificar <strong>.htaccess</strong> sin comprensión completa</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="conventions-section">
  <h2 class="section-title">📋 Convenciones del Proyecto</h2>
  <div class="conventions-grid">
    <div class="convention-card">
      <h3>🏷️ Nomenclatura</h3>
      <div class="naming-rules">
        <div class="naming-item">
          <span class="naming-label">Modelos:</span>
          <span class="naming-example">PascalCase singular</span>
          <code>User, Document, Company</code>
        </div>
        <div class="naming-item">
          <span class="naming-label">Controladores:</span>
          <span class="naming-example">PascalCase + Controller</span>
          <code>DocumentController</code>
        </div>
        <div class="naming-item">
          <span class="naming-label">Rutas:</span>
          <span class="naming-example">kebab-case</span>
          <code>/api/process-document</code>
        </div>
        <div class="naming-item">
          <span class="naming-label">Variables:</span>
          <span class="naming-example">camelCase</span>
          <code>$documentData</code>
        </div>
      </div>
    </div>
    
    <div class="convention-card">
      <h3>📁 Estructura de Archivos</h3>
      <div class="file-structure">
        <div class="structure-group">
          <h4>🎮 Controladores</h4>
          <div class="structure-tree">
            <div class="tree-item">app/Http/Controllers/</div>
            <div class="tree-item sub">├── Api/ <em># API endpoints</em></div>
            <div class="tree-item sub">├── Auth/ <em># Autenticación</em></div>
            <div class="tree-item sub">└── Admin/ <em># Panel administrativo</em></div>
          </div>
        </div>
        
        <div class="structure-group">
          <h4>📇 Modelos</h4>
          <div class="structure-tree">
            <div class="tree-item">app/Models/</div>
            <div class="tree-item sub">├── User.php</div>
            <div class="tree-item sub">├── Document.php</div>
            <div class="tree-item sub">└── Company.php</div>
          </div>
        </div>
        
        <div class="structure-group">
          <h4>🔧 Servicios</h4>
          <div class="structure-tree">
            <div class="tree-item">app/Services/</div>
            <div class="tree-item sub">├── AI/ <em># Servicios de IA</em></div>
            <div class="tree-item sub">├── Payment/ <em># Procesamiento de pagos</em></div>
            <div class="tree-item sub">└── Document/ <em># Lógica de documentos</em></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="convention-card">
      <h3>🗄️ Base de Datos</h3>
      <div class="db-conventions">
        <div class="db-rule">
          <span class="db-icon">🕰️</span>
          <span><strong>Migraciones:</strong> Siempre usar timestamps</span>
        </div>
        <div class="db-rule">
          <span class="db-icon">🔗</span>
          <span><strong>Relaciones:</strong> Definir relaciones bidireccionales</span>
        </div>
        <div class="db-rule">
          <span class="db-icon">🗑️</span>
          <span><strong>Soft Deletes:</strong> Implementar donde sea relevante</span>
        </div>
        <div class="db-rule">
          <span class="db-icon">🏷️</span>
          <span><strong>UUID:</strong> Considerar para entidades principales</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="workflow-section">
  <h2 class="section-title">🔄 Flujo de Trabajo Recomendado</h2>
  <div class="workflow-grid">
    <div class="workflow-card">
      <div class="workflow-header">
        <span class="workflow-icon">🎆</span>
        <h3>Para Nuevas Funcionalidades</h3>
      </div>
      <div class="workflow-steps">
        <div class="step-item">
          <span class="step-number">1</span>
          <span><strong>Crear migración</strong> para cambios de BD</span>
        </div>
        <div class="step-item">
          <span class="step-number">2</span>
          <span><strong>Crear modelo</strong> con relaciones</span>
        </div>
        <div class="step-item">
          <span class="step-number">3</span>
          <span><strong>Crear controlador</strong> con métodos básicos</span>
        </div>
        <div class="step-item">
          <span class="step-number">4</span>
          <span><strong>Definir rutas</strong> en archivos correspondientes</span>
        </div>
        <div class="step-item">
          <span class="step-number">5</span>
          <span><strong>Crear tests</strong> unitarios y de integración</span>
        </div>
        <div class="step-item">
          <span class="step-number">6</span>
          <span><strong>Documentar</strong> cambios realizados</span>
        </div>
      </div>
    </div>
    
    <div class="workflow-card">
      <div class="workflow-header">
        <span class="workflow-icon">🤖</span>
        <h3>Para Integraciones de IA</h3>
      </div>
      <div class="workflow-steps">
        <div class="step-item">
          <span class="step-number">1</span>
          <span><strong>Instalar dependencia</strong> del proveedor de IA</span>
        </div>
        <div class="step-item">
          <span class="step-number">2</span>
          <span><strong>Crear service class</strong> para abstracción</span>
        </div>
        <div class="step-item">
          <span class="step-number">3</span>
          <span><strong>Configurar variables</strong> de entorno</span>
        </div>
        <div class="step-item">
          <span class="step-number">4</span>
          <span><strong>Implementar queue jobs</strong> para procesamiento asíncrono</span>
        </div>
        <div class="step-item">
          <span class="step-number">5</span>
          <span><strong>Agregar manejo de errores</strong> y reintentos</span>
        </div>
        <div class="step-item">
          <span class="step-number">6</span>
          <span><strong>Establecer límites</strong> de uso y rate limiting</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="dependencies-section">
  <h2 class="section-title">📦 Manejo de Dependencias</h2>
  <div class="dependencies-grid">
    <div class="dependencies-card installation">
      <h3>🚀 Instalación de Paquetes</h3>
      <div class="code-blocks">
        <div class="code-block">
          <div class="code-header">
            <span class="code-icon">🎣</span>
            <span>Para producción</span>
          </div>
          <code>composer require package-name</code>
        </div>
        
        <div class="code-block">
          <div class="code-header">
            <span class="code-icon">🚀</span>
            <span>Para desarrollo</span>
          </div>
          <code>composer require package-name --dev</code>
        </div>
        
        <div class="code-block">
          <div class="code-header">
            <span class="code-icon">🔄</span>
            <span>Actualizar autoload</span>
          </div>
          <code>composer dump-autoload</code>
        </div>
      </div>
    </div>
    
    <div class="dependencies-card recommended">
      <h3>🌟 Paquetes Recomendados a Instalar</h3>
      <div class="packages-list">
        <div class="package-item ai">
          <span class="package-icon">🤖</span>
          <div class="package-info">
            <h4>openai/client</h4>
            <p>Para integración con OpenAI</p>
          </div>
        </div>
        <div class="package-item auth">
          <span class="package-icon">🔐</span>
          <div class="package-info">
            <h4>laravel/breeze</h4>
            <p>Para autenticación básica</p>
          </div>
        </div>
        <div class="package-item permissions">
          <span class="package-icon">🏅</span>
          <div class="package-info">
            <h4>spatie/laravel-permission</h4>
            <p>Para roles y permisos</p>
          </div>
        </div>
        <div class="package-item queues">
          <span class="package-icon">📈</span>
          <div class="package-info">
            <h4>laravel/horizon</h4>
            <p>Para monitoreo de queues</p>
          </div>
        </div>
        <div class="package-item storage">
          <span class="package-icon">☁️</span>
          <div class="package-info">
            <h4>league/flysystem-aws-s3-v3</h4>
            <p>Para almacenamiento S3</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="errors-section">
  <h2 class="section-title">🚑 Manejo de Errores Comunes</h2>
  <div class="errors-grid">
    <div class="error-card">
      <div class="error-header">
        <span class="error-icon">❌</span>
        <h4>Error: Class not found</h4>
      </div>
      <div class="error-solution">
        <code>composer dump-autoload</code>
      </div>
    </div>
    
    <div class="error-card">
      <div class="error-header">
        <span class="error-icon">❌</span>
        <h4>Error: Migration not found</h4>
      </div>
      <div class="error-solution">
        <code>php artisan migrate:status</code><br>
        <code>php artisan migrate</code>
      </div>
    </div>
    
    <div class="error-card">
      <div class="error-header">
        <span class="error-icon">❌</span>
        <h4>Error: Route not defined</h4>
      </div>
      <div class="error-solution">
        <p>• Verificar routes/web.php o routes/api.php</p>
        <p>• Ejecutar <code>php artisan route:list</code></p>
      </div>
    </div>
  </div>
</div>

<div class="best-practices-section">
  <h2 class="section-title">🎆 Mejores Prácticas para IA</h2>
  <div class="practices-grid">
    <div class="practice-card context">
      <div class="practice-header">
        <span class="practice-icon">📝</span>
        <h3>1. Siempre Contextualizar Cambios</h3>
      </div>
      <div class="practice-list">
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Explicar el propósito de cada modificación</span>
        </div>
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Mencionar archivos afectados</span>
        </div>
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Documentar dependencias nuevas</span>
        </div>
      </div>
    </div>
    
    <div class="practice-card validation">
      <div class="practice-header">
        <span class="practice-icon">✅</span>
        <h3>2. Validar Antes de Implementar</h3>
      </div>
      <div class="practice-list">
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Revisar compatibilidad Laravel 11.31</span>
        </div>
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Verificar que no se rompa funcionalidad existente</span>
        </div>
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Confirmar estructura de directorios</span>
        </div>
      </div>
    </div>
    
    <div class="practice-card consistency">
      <div class="practice-header">
        <span class="practice-icon">🎆</span>
        <h3>3. Mantener Consistencia</h3>
      </div>
      <div class="practice-list">
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Seguir convenciones Laravel</span>
        </div>
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Usar patrones establecidos</span>
        </div>
        <div class="practice-item">
          <span class="item-bullet">•</span>
          <span>Documentar decisiones arquitectónicas</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="scripts-section">
  <h2 class="section-title">📜 Scripts Útiles</h2>
  <div class="scripts-card">
    <h3>⚙️ Comandos Artisan Frecuentes</h3>
    <div class="commands-grid">
      <div class="command-group">
        <h4>🏗️ Crear entidades</h4>
        <div class="command-list">
          <div class="command-item">
            <code>php artisan make:model ModelName -mcr</code>
          </div>
          <div class="command-item">
            <code>php artisan make:controller ControllerName</code>
          </div>
          <div class="command-item">
            <code>php artisan make:migration create_table_name</code>
          </div>
        </div>
      </div>
      
      <div class="command-group">
        <h4>🗄️ Base de datos</h4>
        <div class="command-list">
          <div class="command-item">
            <code>php artisan migrate</code>
          </div>
          <div class="command-item">
            <code>php artisan db:seed</code>
          </div>
        </div>
      </div>
      
      <div class="command-group">
        <h4>⚡ Caché y optimización</h4>
        <div class="command-list">
          <div class="command-item">
            <code>php artisan config:cache</code>
          </div>
          <div class="command-item">
            <code>php artisan route:cache</code>
          </div>
          <div class="command-item">
            <code>php artisan view:cache</code>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="status-section">
  <h2 class="section-title">🚀 Estado Actual de Desarrollo</h2>
  <div class="status-grid">
    <div class="status-card completed">
      <div class="status-header completed">
        <span class="status-icon">✅</span>
        <h3>Completado</h3>
      </div>
      <div class="status-list">
        <div class="status-item">
          <span class="item-check">✓</span>
          <span>Instalación Laravel 11.31</span>
        </div>
        <div class="status-item">
          <span class="item-check">✓</span>
          <span>Configuración básica</span>
        </div>
        <div class="status-item">
          <span class="item-check">✓</span>
          <span>Estructura de directorios</span>
        </div>
        <div class="status-item">
          <span class="item-check">✓</span>
          <span>Ruta de prueba company-context</span>
        </div>
      </div>
    </div>
    
    <div class="status-card progress">
      <div class="status-header progress">
        <span class="status-icon">🔄</span>
        <h3>En Progreso</h3>
      </div>
      <div class="status-list">
        <div class="status-item">
          <span class="item-progress">🔄</span>
          <span>Documentación del proyecto</span>
        </div>
        <div class="status-item">
          <span class="item-progress">🔄</span>
          <span>Definición de arquitectura</span>
        </div>
      </div>
    </div>
    
    <div class="status-card pending">
      <div class="status-header pending">
        <span class="status-icon">⏳</span>
        <h3>Pendiente</h3>
      </div>
      <div class="status-list">
        <div class="status-item">
          <span class="item-pending">⏳</span>
          <span>Modelos de datos</span>
        </div>
        <div class="status-item">
          <span class="item-pending">⏳</span>
          <span>Sistema de autenticación</span>
        </div>
        <div class="status-item">
          <span class="item-pending">⏳</span>
          <span>Integración con IA</span>
        </div>
        <div class="status-item">
          <span class="item-pending">⏳</span>
          <span>Sistema de pagos</span>
        </div>
        <div class="status-item">
          <span class="item-pending">⏳</span>
          <span>Tests unitarios</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="support-section">
  <div class="support-card">
    <div class="card-icon">📞</div>
    <h2>Contacto y Soporte</h2>
    <p class="support-intro">Para dudas específicas del proyecto:</p>
    <div class="support-steps">
      <div class="support-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Consultar esta guía primero</h4>
          <p>Revisar toda la documentación disponible</p>
        </div>
      </div>
      <div class="support-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Revisar documentación Laravel oficial</h4>
          <p>Verificar compatibilidad y mejores prácticas</p>
        </div>
      </div>
      <div class="support-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Verificar logs en storage/logs/</h4>
          <p>Revisar errores y warnings del sistema</p>
        </div>
      </div>
      <div class="support-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Usar php artisan tinker para debugging</h4>
          <p>Probar código en tiempo real</p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.hero-section.ai-guide {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  padding: 60px 20px;
  text-align: center;
  color: white;
}

.introduction-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.intro-card {
  background: white;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.intro-text {
  font-size: 18px;
  color: #2c3e50;
  margin-bottom: 30px;
  line-height: 1.6;
}

.status-badge.initial {
  background: linear-gradient(135deg, #ffeaa7, #fab1a0);
  color: #2d3436;
  padding: 4px 12px;
  border-radius: 20px;
  font-weight: bold;
  font-size: 14px;
}

.intro-highlight {
  background: linear-gradient(135deg, #fdcb6e, #e17055);
  color: white;
  padding: 20px;
  border-radius: 12px;
  margin-top: 20px;
  display: flex;
  align-items: center;
  gap: 15px;
}

.highlight-icon {
  font-size: 24px;
}

.structure-section {
  padding: 40px 20px;
}

.structure-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.structure-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  border-top: 4px solid #667eea;
  transition: all 0.3s ease;
}

.structure-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.directory-tree {
  margin-top: 20px;
  font-family: 'Courier New', monospace;
}

.dir-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px;
  margin-bottom: 5px;
  border-radius: 6px;
  transition: background 0.2s ease;
}

.dir-item:hover {
  background: #f8f9fa;
}

.dir-item.root {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  font-weight: bold;
  border-radius: 8px;
}

.sub-dir {
  margin-left: 30px;
  padding-left: 15px;
  border-left: 2px solid #e9ecef;
}

.dir-icon {
  font-size: 16px;
  color: #667eea;
}

.critical-files {
  margin-top: 20px;
}

.file-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  margin-bottom: 15px;
  border-radius: 12px;
  transition: all 0.3s ease;
  border-left: 4px solid #e9ecef;
}

.file-item:hover {
  transform: translateX(10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.file-item.config {
  border-left-color: #f39c12;
  background: linear-gradient(135deg, #ffeaa7, #fdcb6e);
}

.file-item.routes {
  border-left-color: #3498db;
  background: linear-gradient(135deg, #74b9ff, #0984e3);
  color: white;
}

.file-item.php {
  border-left-color: #9b59b6;
  background: linear-gradient(135deg, #a29bfe, #6c5ce7);
  color: white;
}

.file-item.docs {
  border-left-color: #27ae60;
  background: linear-gradient(135deg, #00b894, #00a085);
  color: white;
}

.file-icon {
  font-size: 24px;
}

.file-info h4 {
  margin: 0 0 5px 0;
  font-size: 16px;
}

.file-info p {
  margin: 0;
  font-size: 13px;
  opacity: 0.9;
}

.rules-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.rules-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.rules-card {
  background: white;
  border-radius: 16px;
  padding: 0;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.rules-card:hover {
  transform: translateY(-5px);
}

.rule-header {
  padding: 25px;
  display: flex;
  align-items: center;
  gap: 15px;
  color: white;
  font-weight: bold;
}

.rule-header.safe {
  background: linear-gradient(135deg, #27ae60, #2ecc71);
}

.rule-header.warning {
  background: linear-gradient(135deg, #f39c12, #e67e22);
}

.rule-header.danger {
  background: linear-gradient(135deg, #e74c3c, #c0392b);
}

.rule-icon {
  font-size: 24px;
}

.rule-list {
  padding: 25px;
}

.rule-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 12px 0;
  border-bottom: 1px solid #f8f9fa;
}

.rule-item:last-child {
  border-bottom: none;
}

.item-icon {
  font-size: 18px;
  color: #667eea;
  margin-top: 2px;
}

.conventions-section {
  padding: 40px 20px;
}

.conventions-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.convention-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  border-top: 4px solid #667eea;
  transition: all 0.3s ease;
}

.convention-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.naming-rules {
  margin-top: 20px;
}

.naming-item {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
  padding: 12px;
  margin-bottom: 10px;
  background: #f8f9fa;
  border-radius: 8px;
  align-items: center;
}

.naming-item code {
  background: #e9ecef;
  padding: 4px 8px;
  border-radius: 4px;
  font-size: 12px;
  color: #495057;
  grid-column: 1 / -1;
  margin-top: 8px;
}

.naming-label {
  font-weight: bold;
  color: #2c3e50;
}

.naming-example {
  color: #6c757d;
  font-style: italic;
}

.file-structure {
  margin-top: 20px;
}

.structure-group {
  margin-bottom: 25px;
}

.structure-group h4 {
  color: #2c3e50;
  margin-bottom: 15px;
  padding-bottom: 8px;
  border-bottom: 2px solid #e9ecef;
}

.structure-tree {
  font-family: 'Courier New', monospace;
  font-size: 13px;
}

.tree-item {
  padding: 4px 0;
  color: #495057;
}

.tree-item.sub {
  color: #6c757d;
  margin-left: 20px;
}

.tree-item em {
  color: #28a745;
  font-style: italic;
}

.db-conventions {
  margin-top: 20px;
}

.db-rule {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  margin-bottom: 12px;
  background: #f8f9fa;
  border-radius: 10px;
  border-left: 4px solid #667eea;
  transition: all 0.3s ease;
}

.db-rule:hover {
  transform: translateX(5px);
  background: #e9ecef;
}

.db-icon {
  font-size: 20px;
  color: #667eea;
}

.workflow-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.workflow-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.workflow-card {
  background: white;
  border-radius: 16px;
  padding: 0;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.workflow-card:hover {
  transform: translateY(-5px);
}

.workflow-header {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  padding: 25px;
  display: flex;
  align-items: center;
  gap: 15px;
}

.workflow-icon {
  font-size: 28px;
}

.workflow-steps {
  padding: 25px;
}

.step-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px 0;
  border-bottom: 1px solid #f8f9fa;
  transition: all 0.3s ease;
}

.step-item:hover {
  padding-left: 10px;
}

.step-item:last-child {
  border-bottom: none;
}

.step-number {
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
  flex-shrink: 0;
}

.dependencies-section {
  padding: 40px 20px;
}

.dependencies-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.dependencies-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  border-top: 4px solid #667eea;
}

.code-blocks {
  margin-top: 20px;
}

.code-block {
  margin-bottom: 20px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.code-header {
  background: #2c3e50;
  color: white;
  padding: 12px 15px;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  font-weight: 500;
}

.code-icon {
  font-size: 16px;
}

.code-block code {
  display: block;
  background: #34495e;
  color: #ecf0f1;
  padding: 15px;
  font-family: 'Courier New', monospace;
  font-size: 14px;
  margin: 0;
  border: none;
}

.packages-list {
  margin-top: 20px;
}

.package-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  margin-bottom: 15px;
  border-radius: 12px;
  transition: all 0.3s ease;
  border-left: 4px solid #e9ecef;
}

.package-item:hover {
  transform: translateX(10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.package-item.ai {
  border-left-color: #e74c3c;
  background: linear-gradient(135deg, #ffdddd, #ffa8a8);
}

.package-item.auth {
  border-left-color: #3498db;
  background: linear-gradient(135deg, #ddeeff, #a8d8ff);
}

.package-item.permissions {
  border-left-color: #f39c12;
  background: linear-gradient(135deg, #ffeaa7, #fdcb6e);
}

.package-item.queues {
  border-left-color: #9b59b6;
  background: linear-gradient(135deg, #e8d5f5, #d1b3f5);
}

.package-item.storage {
  border-left-color: #27ae60;
  background: linear-gradient(135deg, #d5f5d5, #b8e6b8);
}

.package-icon {
  font-size: 24px;
  color: #667eea;
}

.package-info h4 {
  margin: 0 0 5px 0;
  color: #2c3e50;
  font-size: 16px;
}

.package-info p {
  margin: 0;
  color: #6c757d;
  font-size: 13px;
}

.errors-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.errors-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.error-card {
  background: white;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  border-left: 4px solid #e74c3c;
  transition: transform 0.3s ease;
}

.error-card:hover {
  transform: translateY(-3px);
}

.error-header {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 15px;
}

.error-icon {
  font-size: 20px;
  color: #e74c3c;
}

.error-solution code {
  background: #2c3e50;
  color: white;
  padding: 8px 12px;
  border-radius: 6px;
  font-family: 'Courier New', monospace;
  font-size: 13px;
  display: block;
  margin: 5px 0;
}

.best-practices-section {
  padding: 40px 20px;
}

.practices-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.practice-card {
  background: white;
  border-radius: 16px;
  padding: 0;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.practice-card:hover {
  transform: translateY(-5px);
}

.practice-header {
  padding: 25px;
  color: white;
  display: flex;
  align-items: center;
  gap: 15px;
}

.practice-card.context .practice-header {
  background: linear-gradient(135deg, #3498db, #2980b9);
}

.practice-card.validation .practice-header {
  background: linear-gradient(135deg, #27ae60, #229954);
}

.practice-card.consistency .practice-header {
  background: linear-gradient(135deg, #9b59b6, #8e44ad);
}

.practice-icon {
  font-size: 24px;
}

.practice-list {
  padding: 25px;
}

.practice-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 10px 0;
  border-bottom: 1px solid #f8f9fa;
}

.practice-item:last-child {
  border-bottom: none;
}

.item-bullet {
  color: #667eea;
  font-weight: bold;
  margin-top: 3px;
}

.scripts-section {
  padding: 40px 20px;
  background: #f8f9fa;
}

.scripts-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  max-width: 1000px;
  margin: 0 auto;
  border-top: 4px solid #667eea;
}

.commands-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minrange(300px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.command-group {
  background: #f8f9fa;
  border-radius: 12px;
  padding: 20px;
}

.command-group h4 {
  color: #2c3e50;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.command-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.command-item {
  background: #2c3e50;
  border-radius: 8px;
  padding: 0;
}

.command-item code {
  display: block;
  color: #ecf0f1;
  padding: 12px 15px;
  font-family: 'Courier New', monospace;
  font-size: 13px;
  background: transparent;
  border: none;
  border-radius: 8px;
}

.status-section {
  padding: 40px 20px;
}

.status-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

.status-card {
  background: white;
  border-radius: 16px;
  padding: 0;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.status-card:hover {
  transform: translateY(-5px);
}

.status-header {
  padding: 25px;
  color: white;
  display: flex;
  align-items: center;
  gap: 15px;
  font-weight: bold;
}

.status-header.completed {
  background: linear-gradient(135deg, #27ae60, #2ecc71);
}

.status-header.progress {
  background: linear-gradient(135deg, #f39c12, #e67e22);
}

.status-header.pending {
  background: linear-gradient(135deg, #95a5a6, #7f8c8d);
}

.status-icon {
  font-size: 24px;
}

.status-list {
  padding: 25px;
}

.status-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 12px 0;
  border-bottom: 1px solid #f8f9fa;
}

.status-item:last-child {
  border-bottom: none;
}

.item-check {
  color: #27ae60;
  font-weight: bold;
  font-size: 16px;
}

.item-progress {
  font-size: 16px;
  color: #f39c12;
}

.item-pending {
  font-size: 16px;
  color: #95a5a6;
}

.support-section {
  padding: 40px 20px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
}

.support-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  padding: 40px;
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.support-intro {
  font-size: 18px;
  margin-bottom: 30px;
  opacity: 0.9;
}

.support-steps {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 25px;
  margin-top: 30px;
}

.support-step {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  padding: 20px;
  transition: all 0.3s ease;
}

.support-step:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-3px);
}

.support-step .step-number {
  background: rgba(255, 255, 255, 0.2);
  color: white;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  margin: 0 auto 15px;
}

.support-step .step-content h4 {
  color: white;
  margin-bottom: 8px;
  font-size: 16px;
}

.support-step .step-content p {
  color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
  line-height: 1.4;
}

@media (max-width: 768px) {
  .structure-grid,
  .rules-grid,
  .conventions-grid,
  .workflow-grid,
  .dependencies-grid,
  .errors-grid,
  .practices-grid,
  .commands-grid,
  .status-grid,
  .support-steps {
    grid-template-columns: 1fr;
  }
  
  .naming-item {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .file-item,
  .rule-item,
  .step-item,
  .package-item {
    flex-direction: column;
    text-align: center;
    gap: 10px;
  }
  
  .workflow-header,
  .practice-header,
  .status-header {
    flex-direction: column;
    text-align: center;
    gap: 10px;
  }
}
</style>


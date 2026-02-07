# Laravel SaaS AI Documents

[![Laravel](https://img.shields.io/badge/Laravel-11.31-red?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-%5E8.2-blue?style=flat-square&logo=php)](https://php.net)
[![Estado](https://img.shields.io/badge/Estado-Inicial-yellow?style=flat-square)](#)
[![Documentación](https://img.shields.io/badge/Docs-GitHub%20Pages-green?style=flat-square)](https://alejandrochavez.github.io/laravel-saas-ai-documents)

Plataforma SaaS para procesamiento inteligente de documentos corporativos con tecnologías de IA.

## 🚀 Estado del Proyecto

**Proyecto en estado inicial** - Laravel 11.31 recién instalado con documentación técnica completa pero sin funcionalidad de negocio implementada.

## 📚 Documentación

La documentación completa está disponible en **[GitHub Pages](https://alejandrochavez.github.io/laravel-saas-ai-documents)**

### Documentos Principales:
- 🏗️ **[Arquitectura del Proyecto](https://alejandrochavez.github.io/laravel-saas-ai-documents/ARQUITECTURA_PROYECTO.html)**
- 🤖 **[Guía de Operación para IA](https://alejandrochavez.github.io/laravel-saas-ai-documents/GUIA_IA_PROYECTO.html)**
- 🗄️ **[Diagrama Entidad-Relación](https://alejandrochavez.github.io/laravel-saas-ai-documents/DIAGRAMA_ENTIDAD_RELACION.html)**
- 📄 **[Resumen para IA](https://alejandrochavez.github.io/laravel-saas-ai-documents/RESUMEN_PROYECTO_IA.html)**

## 🛠️ Instalación

```bash
# Clonar repositorio
git clone https://github.com/alejandrochavez/laravel-saas-ai-documents.git
cd laravel-saas-ai-documents

# Instalar dependencias
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Configurar base de datos
php artisan migrate

# Iniciar servidor de desarrollo
php artisan serve
```

## 🏗️ Arquitectura Planificada

```
┌─────────────────────────────────────┐
│            Presentación             │
│   (API REST + Web Dashboard)        │
├─────────────────────────────────────┤
│            Aplicación               │
│  (Controllers + Services + Jobs)    │
├─────────────────────────────────────┤
│             Dominio                 │
│    (Models + Business Logic)        │
├─────────────────────────────────────┤
│          Infraestructura            │
│   (Database + AI APIs + Storage)    │
└─────────────────────────────────────┘
```

## 🎯 Funcionalidades Planificadas

### Core del Negocio
- ✅ **Multi-tenancy**: Empresas independientes
- ✅ **Procesamiento IA**: OpenAI, Claude integrations
- ✅ **Queue System**: Procesamiento asíncrono
- ✅ **SaaS Features**: Planes, límites, facturación

### Módulos Principales
- 🔐 **Autenticación**: Laravel Breeze/Jetstream
- 🏢 **Empresas**: Gestión multi-tenant
- 📄 **Documentos**: Upload, procesamiento, resultados
- 💳 **Suscripciones**: Stripe/Paddle integration
- 📊 **Analytics**: Usage tracking y reportes

## 🚦 Próximos Pasos

### Fase 1: Fundación (Semana 1-2)
- [ ] Implementar migraciones del ERD
- [ ] Configurar sistema de autenticación
- [ ] Setup multi-tenancy básico

### Fase 2: Core Features (Semana 3-4)
- [ ] Integración servicios IA
- [ ] Sistema de procesamiento asíncrono
- [ ] Upload y gestión de documentos

### Fase 3: SaaS Features (Semana 5-6)
- [ ] Sistema de planes y suscripciones
- [ ] Dashboard administrativo
- [ ] API REST completa

## 🤖 Para IA/Asistentes

Si eres una IA trabajando en este proyecto:

1. **LEE PRIMERO**: [Guía de Operación para IA](https://alejandrochavez.github.io/laravel-saas-ai-documents/GUIA_IA_PROYECTO.html)
2. **CONTEXTO**: [Resumen del Proyecto](https://alejandrochavez.github.io/laravel-saas-ai-documents/RESUMEN_PROYECTO_IA.html)
3. **ARQUITECTURA**: [ERD y Especificaciones](https://alejandrochavez.github.io/laravel-saas-ai-documents/DIAGRAMA_ENTIDAD_RELACION.html)

### Reglas Críticas:
- ✅ Siempre crear migraciones antes de modelos
- ✅ Filtrar por `company_id` en queries multi-tenant
- ✅ Usar queues para procesamiento IA (nunca síncrono)
- ❌ NO modificar archivos vendor sin confirmación

## 📋 Stack Tecnológico

| Componente | Tecnología | Estado |
|------------|------------|---------|
| Backend | Laravel 11.31, PHP ^8.2 | ✅ Instalado |
| Base de Datos | MySQL/PostgreSQL | ⏳ Por configurar |
| IA Processing | OpenAI, Claude | ⏳ Por integrar |
| Autenticación | Laravel Breeze | ⏳ Por instalar |
| Pagos | Stripe/Paddle | ⏳ Por configurar |
| Queues | Redis/Database | ⏳ Por configurar |
| Storage | AWS S3 | ⏳ Por configurar |

## 📞 Soporte

- **Documentación**: [GitHub Pages](https://alejandrochavez.github.io/laravel-saas-ai-documents)
- **Issues**: [GitHub Issues](https://github.com/alejandrochavez/laravel-saas-ai-documents/issues)
- **Wiki**: [Project Wiki](https://github.com/alejandrochavez/laravel-saas-ai-documents/wiki)

---

**⚠️ Nota**: Este proyecto está en desarrollo inicial. La documentación describe la arquitectura planificada, no la implementación actual.

# Laravel SaaS AI Documents

[![Laravel](https://img.shields.io/badge/Laravel-11.31-red?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-%5E8.2-blue?style=flat-square&logo=php)](https://php.net)
[![Docker](https://img.shields.io/badge/Docker-Sail-2496ED?style=flat-square&logo=docker)](https://laravel.com/docs/sail)
[![Documentación](https://img.shields.io/badge/Docs-GitHub%20Pages-green?style=flat-square)](https://alexhu65.github.io/laravel-saas-ai-documents/)

Plataforma SaaS para procesamiento inteligente de documentos corporativos con tecnologías de IA.

## 🚀 Estado del Proyecto

**Proyecto en desarrollo activo** — Laravel 11.31 con arquitectura multi-tenant, planes, suscripciones, roles y seeders demo listos para desarrollo local con Docker/Sail.

## 📚 Documentación

La documentación completa está disponible en **[GitHub Pages](https://alexhu65.github.io/laravel-saas-ai-documents/)**

### Documentos Principales:
- 🏗️ **[Arquitectura del Proyecto](https://alexhu65.github.io/laravel-saas-ai-documents/ARQUITECTURA_PROYECTO.html)**
- 🤖 **[Guía de Operación para IA](https://alexhu65.github.io/laravel-saas-ai-documents/GUIA_IA_PROYECTO.html)**
- 🗄️ **[Diagrama Entidad-Relación](https://alexhu65.github.io/laravel-saas-ai-documents/DIAGRAMA_ENTIDAD_RELACION.html)**
- 🐳 **[Desarrollo Local con Sail](https://alexhu65.github.io/laravel-saas-ai-documents/DESARROLLO_LOCAL_SAIL.html)**
- 📄 **[Resumen para IA](https://alexhu65.github.io/laravel-saas-ai-documents/RESUMEN_PROYECTO_IA.html)**

## 🛠️ Requisitos

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Composer](https://getcomposer.org/) (solo si `vendor/` no está instalado)

## 🐳 Instalación con Laravel Sail

```bash
# Clonar repositorio
git clone https://github.com/AlexHu65/laravel-saas-ai-documents.git
cd laravel-saas-ai-documents

# Instalar dependencias PHP (si aplica)
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Levantar contenedores (MySQL, Redis, Mailpit)
./vendor/bin/sail up -d

# Preparar base de datos y datos demo manualmente, si necesitas reiniciar todo
./vendor/bin/sail artisan migrate:fresh --seed

# Instalar dependencias frontend (opcional)
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

### Alias opcional para Sail

```bash
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```

## 🧪 Comandos frecuentes

| Comando | Descripción |
|---------|-------------|
| `./vendor/bin/sail up -d` | Levantar contenedores en segundo plano |
| `./vendor/bin/sail down` | Detener contenedores |
| `./vendor/bin/sail artisan migrate:fresh --seed` | Reiniciar BD con datos demo |
| `./vendor/bin/sail artisan test` | Ejecutar tests |
| `./vendor/bin/sail shell` | Entrar al contenedor de la app |
| `./vendor/bin/sail composer install` | Instalar dependencias PHP |
| `./vendor/bin/sail npm run dev` | Compilar assets con Vite |

## 🌐 URLs locales

| Servicio | URL |
|----------|-----|
| Aplicación | http://localhost |
| Mailpit (correos) | http://localhost:8025 |
| MySQL (desde host) | `127.0.0.1:3306` |
| MySQL (desde contenedor) | host `mysql` |

## 👤 Datos demo (seeders)

Contraseña para todos los usuarios demo: `password`

| Email | Empresa | Rol |
|-------|---------|-----|
| admin@acme.test | Acme Corporation | admin |
| manager@acme.test | Acme Corporation | manager |
| user@acme.test | Acme Corporation | user |
| admin@globex.test | Globex Industries | admin |
| user@globex.test | Globex Industries | user |
| admin@initech.test | Initech Solutions | admin |

### Datos incluidos

- **Planes**: Basic, Pro, Enterprise (con features y pivote `feature_plan`)
- **Features**: ai_generate, export_pdf, collaboration, analytics, priority_support
- **Roles**: admin, manager, user
- **Empresas**: Acme Corporation, Globex Industries, Initech Solutions
- **Suscripciones**: activas y canceladas por empresa
- **Documentos** y **AIUsage**: registros demo por tenant

Al iniciar `laravel.test`, Sail ejecuta automáticamente:

```bash
php artisan migrate --force
php artisan db:seed --force
```

Esto mantiene la base preparada cada vez que levantas Docker. Usa `migrate:fresh --seed` solo cuando quieras borrar y reconstruir todos los datos.

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

## 🤖 Para IA/Asistentes

Si eres una IA trabajando en este proyecto:

1. **LEE PRIMERO**: [Guía de Operación para IA](https://alexhu65.github.io/laravel-saas-ai-documents/GUIA_IA_PROYECTO.html)
2. **CONTEXTO**: [Resumen del Proyecto](https://alexhu65.github.io/laravel-saas-ai-documents/RESUMEN_PROYECTO_IA.html)
3. **ARQUITECTURA**: [ERD y Especificaciones](https://alexhu65.github.io/laravel-saas-ai-documents/DIAGRAMA_ENTIDAD_RELACION.html)
4. **ENTORNO LOCAL**: [Desarrollo con Sail](https://alexhu65.github.io/laravel-saas-ai-documents/DESARROLLO_LOCAL_SAIL.html)

### Reglas Críticas:
- ✅ Siempre crear migraciones antes de modelos
- ✅ Filtrar por `company_id` en queries multi-tenant
- ✅ Usar queues para procesamiento IA (nunca síncrono)
- ❌ NO modificar archivos vendor sin confirmación

## 📋 Stack Tecnológico

| Componente | Tecnología | Estado |
|------------|------------|---------|
| Backend | Laravel 11.31, PHP ^8.2 | ✅ Instalado |
| Entorno local | Laravel Sail (Docker) | ✅ Configurado |
| Base de Datos | MySQL 8.4 | ✅ Configurado |
| Cache/Queues | Redis | ✅ Configurado |
| Correo local | Mailpit | ✅ Configurado |
| IA Processing | OpenAI, Claude | ⏳ Por integrar |
| Autenticación | Laravel Breeze | ⏳ Por instalar |
| Pagos | Stripe | ⏳ Por configurar |
| Storage | AWS S3 | ⏳ Por configurar |

## 📞 Soporte

- **Documentación**: [GitHub Pages](https://alexhu65.github.io/laravel-saas-ai-documents/)
- **Issues**: [GitHub Issues](https://github.com/AlexHu65/laravel-saas-ai-documents/issues)

---

**Nota**: El proyecto incluye seeders demo determinísticos para desarrollo local. Ejecuta `sail artisan migrate:fresh --seed` para cargar datos de prueba.

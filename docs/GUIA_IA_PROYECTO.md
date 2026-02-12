---
layout: default
title: Guía de Operación IA
nav_order: 4
---

# Guía de Operación IA - Laravel SaaS AI Documents

## Introducción
Este proyecto es un **Laravel SaaS recién inicializado** enfocado en el procesamiento de documentos con IA. El proyecto está en **estado inicial**, sin funcionalidad de negocio implementada.

## Estructura del Proyecto

### Directorios Clave
```
/Users/alejandrochavez/Desktop/proyectos/laravel-saas-ai-documents/
├── app/                    # Lógica de aplicación (vacío)
├── config/                 # Configuraciones Laravel
├── database/              # Migraciones y seeders (vacío)
├── docs/                  # Documentación del proyecto
├── routes/                # Definición de rutas
│   └── web.php           # Rutas web básicas
└── composer.json         # Dependencias PHP
```

### Archivos Críticos Actuales
- `config/app.php` - Configuración principal de Laravel
- `routes/web.php` - Rutas web (básicas + test)
- `composer.json` - Dependencias del proyecto
- `docs/arranque-proyecto.md` - Documentación de análisis

## Reglas para Modificación de Archivos

### ✅ Operaciones Seguras
1. **Agregar rutas** en `routes/web.php` o `routes/api.php`
2. **Crear controladores** en `app/Http/Controllers/`
3. **Crear modelos** en `app/Models/`
4. **Agregar migraciones** con `php artisan make:migration`
5. **Instalar dependencias** via `composer require`

### ⚠️ Precauciones
1. **NO modificar** `config/app.php` sin confirmar cambios
2. **NO eliminar** rutas existentes sin verificar dependencias
3. **Siempre crear migraciones** antes de modificar BD
4. **Validar compatibilidad** de dependencias antes de instalar

### ❌ Operaciones Prohibidas
1. Modificar archivos de vendor
2. Cambiar configuraciones de entorno sin backup
3. Eliminar archivos de configuración Laravel
4. Modificar .htaccess sin comprensión completa

## Convenciones del Proyecto

### Nomenclatura
- **Modelos**: PascalCase singular (User, Document, Company)
- **Controladores**: PascalCase + Controller (DocumentController)
- **Rutas**: kebab-case (/api/process-document)
- **Variables**: camelCase ($documentData)

### Estructura de Archivos
```php
// Controladores
app/Http/Controllers/
├── Api/              # API endpoints
├── Auth/            # Autenticación
└── Admin/           # Panel administrativo

// Modelos
app/Models/
├── User.php
├── Document.php
└── Company.php

// Servicios
app/Services/
├── AI/              # Servicios de IA
├── Payment/         # Procesamiento de pagos
└── Document/        # Lógica de documentos
```

### Base de Datos
- **Migraciones**: Siempre usar timestamps
- **Relaciones**: Definir relaciones bidireccionales
- **Soft Deletes**: Implementar donde sea relevante
- **UUID**: Considerar para entidades principales

## Flujo de Trabajo Recomendado

### Para Nuevas Funcionalidades
1. **Crear migración** para cambios de BD
2. **Crear modelo** con relaciones
3. **Crear controlador** con métodos básicos
4. **Definir rutas** en archivos correspondientes
5. **Crear tests** unitarios y de integración
6. **Documentar** cambios realizados

### Para Integraciones de IA
1. **Instalar dependencia** del proveedor de IA
2. **Crear service class** para abstracción
3. **Configurar variables** de entorno
4. **Implementar queue jobs** para procesamiento asíncrono
5. **Agregar manejo de errores** y reintentos
6. **Establecer límites** de uso y rate limiting

## Manejo de Dependencias

### Instalación de Paquetes
```bash
# Para producción
composer require package-name

# Para desarrollo
composer require package-name --dev

# Actualizar autoload
composer dump-autoload
```

### Paquetes Recomendados a Instalar
```json
{
  "openai/client": "Para integración con OpenAI",
  "laravel/breeze": "Para autenticación básica",
  "spatie/laravel-permission": "Para roles y permisos",
  "laravel/horizon": "Para monitoreo de queues",
  "league/flysystem-aws-s3-v3": "Para almacenamiento S3"
}
```

## Manejo de Errores Comunes

### Error: Class not found
```bash
composer dump-autoload
```

### Error: Migration not found
```bash
php artisan migrate:status
php artisan migrate
```

### Error: Route not defined
- Verificar `routes/web.php` o `routes/api.php`
- Ejecutar `php artisan route:list`

## Mejores Prácticas para IA

### 1. Siempre Contextualizar Cambios
- Explicar el propósito de cada modificación
- Mencionar archivos afectados
- Documentar dependencias nuevas

### 2. Validar Antes de Implementar
- Revisar compatibilidad Laravel 11.31
- Verificar que no se rompa funcionalidad existente
- Confirmar estructura de directorios

### 3. Mantener Consistencia
- Seguir convenciones Laravel
- Usar patrones establecidos
- Documentar decisiones arquitectónicas

## Scripts Útiles

### Comandos Artisan Frecuentes
```bash
# Crear entidades
php artisan make:model ModelName -mcr
php artisan make:controller ControllerName
php artisan make:migration create_table_name

# Base de datos
php artisan migrate
php artisan db:seed

# Caché y optimización
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Estado Actual de Desarrollo

### ✅ Completado
- Instalación Laravel 11.31
- Configuración básica
- Estructura de directorios
- Ruta de prueba company-context

### 🔄 En Progreso
- Documentación del proyecto
- Definición de arquitectura

### ⏳ Pendiente
- Modelos de datos
- Sistema de autenticación
- Integración con IA
- Sistema de pagos
- Tests unitarios

## Contacto y Soporte

Para dudas específicas del proyecto:
1. Consultar esta guía primero
2. Revisar documentación Laravel oficial
3. Verificar logs en `storage/logs/`
4. Usar `php artisan tinker` para debugging


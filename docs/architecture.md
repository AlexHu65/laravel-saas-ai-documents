# Arquitectura del Proyecto - Laravel SaaS AI Documents

## Estado Actual del Proyecto
**Proyecto en estado inicial/esqueleto** - Laravel 11.31 recién instalado sin funcionalidad de negocio implementada.

## Stack Tecnológico Detectado

### Backend
- **Framework**: Laravel 11.31
- **PHP**: ^8.2
- **Dependencias Core**: 
  - laravel/framework ^11.31
  - laravel/tinker ^2.9

### Herramientas de Desarrollo
- Laravel Pail (logging)
- Laravel Pint (code styling)
- Laravel Sail (Docker environment)
- PHPUnit (testing)
- Mockery (mocking)

## Arquitectura Actual

### Estructura de Capas
```
┌─────────────────────────────────────┐
│            Presentación             │
│   (Rutas Web + API - Básicas)       │
├─────────────────────────────────────┤
│            Aplicación               │
│      (Controladores - N/A)          │
├─────────────────────────────────────┤
│             Dominio                 │
│       (Modelos - N/A)               │
├─────────────────────────────────────┤
│          Infraestructura            │
│    (BD, APIs Externas - N/A)        │
└─────────────────────────────────────┘
```

### Rutas Identificadas
- `GET /` → Vista welcome (básica)
- `GET /test-company-context` → Endpoint de prueba

## Módulos Futuros Requeridos

### 1. Módulo de Autenticación
- Sistema de registro/login
- Gestión de usuarios
- Roles y permisos

### 2. Módulo de Empresas/Organizaciones
- Gestión multi-tenant
- Contexto empresarial
- Configuraciones por empresa

### 3. Módulo de Documentos con IA
- Carga y procesamiento de documentos
- Integración con APIs de IA
- Análisis y extracción de datos

### 4. Módulo de Suscripciones
- Gestión de planes
- Facturación
- Límites de uso

### 5. Módulo de API
- API REST para integraciones
- Autenticación con tokens
- Rate limiting

## Flujos Críticos a Implementar

### 1. Onboarding de Usuario
```
Registro → Verificación → Selección Plan → Setup Empresa → Primer Documento
```

### 2. Procesamiento de Documentos
```
Upload → Validación → Queue → IA Processing → Almacenamiento → Notificación
```

### 3. Gestión de Suscripciones
```
Selección Plan → Pago → Activación → Monitoreo Uso → Renovación/Cancelación
```

## Dependencias Críticas Faltantes

### IA y Procesamiento
- `openai/client` o similar para OpenAI
- `anthropic/claude` para Claude
- `league/flysystem` para almacenamiento de archivos

### Autenticación y Autorización
- `laravel/breeze` o `laravel/jetstream`
- `spatie/laravel-permission`

### Pagos y Suscripciones
- `laravel/cashier-stripe` o `laravel/cashier-paddle`

### Procesamiento en Cola
- `laravel/horizon` para monitoreo de queues
- Redis o database driver para queues

## Áreas Críticas para Desarrollo

### 1. Definición del Modelo de Datos
- Entidades principales
- Relaciones entre modelos
- Migraciones de base de datos

### 2. Arquitectura de Servicios
- Service Layer para lógica de negocio
- Repository Pattern para acceso a datos
- Event/Listener para procesos asíncronos

### 3. Integración con IA
- Abstracción de proveedores de IA
- Manejo de tokens y límites
- Procesamiento asíncrono

### 4. Seguridad
- Validación de archivos subidos
- Sanitización de datos
- Rate limiting para APIs de IA

## Recomendaciones Arquitectónicas

1. **Implementar Domain Driven Design (DDD)** para organizar la lógica de negocio
2. **Usar Repository Pattern** para abstraer acceso a datos
3. **Implementar Event Sourcing** para auditoría de cambios
4. **Configurar Queue System** para procesamiento asíncrono
5. **Establecer API First Design** para futuras integraciones

## Próximos Pasos Críticos

1. Crear migraciones para entidades principales
2. Implementar sistema de autenticación
3. Configurar integración con servicios de IA
4. Establecer sistema de queues
5. Implementar tests unitarios y de integración

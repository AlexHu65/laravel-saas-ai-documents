---
layout: default
title: Arquitectura del proyecto
nav_order: 1
---


# Arquitectura del Proyecto

Este documento describe la arquitectura general del sistema **Laravel SaaS AI Documents**, un SaaS B2B enfocado en automatización de documentación y procesos internos mediante IA.

---

## 🎯 Objetivo del sistema

Proveer una plataforma:
- Multi-empresa (B2B)
- Segura y escalable
- Enfocada en PyMEs de México
- Con uso práctico de IA

---

## 🧩 Stack tecnológico

### Backend
- **PHP 8.2**
- **Laravel 11**
- Arquitectura MVC + servicios
- Jobs y colas para IA

### Frontend
- GitHub Pages (Docs)
- Futuro: React o Angular (dashboard)

### Base de datos
- MySQL / MariaDB
- Modelo relacional normalizado

### Infraestructura
- GitHub Actions (CI)
- GitHub Pages (Docs)
- Hosting cloud (por definir)

---

## 🏢 Modelo B2B (Multi-empresa)

Cada entidad principal:


## 🔐 Reglas clave:
- Un usuario pertenece a una empresa
- Los datos NO se comparten entre empresas
- Toda consulta se filtra por empresa

---

## 🔐 Autenticación y contexto

- Autenticación basada en Laravel
- Contexto de empresa cargado en cada request
- Middleware para asegurar aislamiento de datos

---

## 🤖 Integración con IA

La IA se utiliza para:

- Generar documentos a partir de prompts
- Resumir textos
- Mejorar redacción
- Clasificar contenido

### Diseño
- Servicio desacoplado (`AIService`)
- Uso de colas para tareas pesadas
- Respuesta asíncrona

---

## 🔄 Flujo general

1. Usuario inicia sesión
2. Se establece contexto de empresa
3. Usuario solicita generación de documento
4. Se envía tarea a cola
5. IA procesa y devuelve resultado
6. Documento se guarda y versiona

---

## 📈 Escalabilidad

Pensado para:
- Escalar por empresa
- Limitar uso de IA por plan
- Monitorear consumo

---

## 🔮 Evolución futura

- Roles y permisos
- Auditoría
- Integraciones externas
- Facturación automática

---

## 📌 Notas finales

Esta arquitectura prioriza:
- Simplicidad inicial
- Buenas prácticas
- Crecimiento progresivo

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



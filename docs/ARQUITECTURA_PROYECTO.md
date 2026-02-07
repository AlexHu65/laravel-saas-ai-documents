---
layout: default
title: Arquitectura del Proyecto
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



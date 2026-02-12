---
layout: default
title: Diagrama Entidad-Relación
nav_order: 2
---

# 📊 Diagrama Entidad–Relación  
**Laravel SaaS AI Documents**

---

## 🧠 Objetivo

Definir el **modelo de datos base** del sistema *Laravel SaaS AI Documents*, asegurando:

- Arquitectura multi-empresa (multi-tenant)
- Escalabilidad B2B
- Integridad referencial
- Base sólida para migraciones en Laravel

---

## 🏢 Entidad: Company

Tabla: `companies`

| Field | Type | Description |
|------|------|-------------|
| id | bigint | Primary key |
| name | string | Company name |
| slug | string | Unique identifier |
| created_at | timestamp | Created |
| updated_at | timestamp | Updated |


**Relaciones**
- Una empresa tiene muchos usuarios
- Una empresa tiene muchos documentos
- Una empresa tiene muchos procesos
- Una empresa tiene muchas solicitudes de IA

---

## 👤 Entidad: Users

Tabla: `users`

| Campo        | Tipo       | Descripción |
|-------------|------------|-------------|
| id          | bigint     | PK |
| company_id  | bigint     | FK → companies.id |
| name        | string       | User name |
| email       | string     | Email |
| password    | string     | Hash pasword |
| remember_token | string  | Token |
| created_at  | timestamp  | Fecha de creación |
| updated_at  | timestamp  | Fecha de actualización |

**Relaciones**
- Belongs to a company
- Can create documents
- Can generate AI requests

---

## 📄 Entidad: Document

Tabla: `documents`

| Field | Type | Description |
|------|------|-------------|
| id | bigint | Primary key |
| company_id | bigint | FK → companies.id |
| user_id | bigint | FK → users.id |
| title | string | Document title |
| content | longText | Generated content |
| version | integer | Document version |
| status | string | draft / published |
| created_at | timestamp | Created |
| updated_at | timestamp | Updated |

**Relaciones**
- Belongs to a company
- Belongs to a user
- Can have multiple versions

---

## ⚙️ Entidad: Process

Tabla: `processes`

| Field | Type | Description |
|------|------|-------------|
| id | bigint | Primary key |
| company_id | bigint | FK → companies.id |
| name | string | Process name |
| description | text | Description |
| active | boolean | Status |
| created_at | timestamp | Created |
| updated_at | timestamp | Updated |

**Relaciones**
- Belongs to a company
- Can be associated with documents

---

## 🤖 Entidad: AIRequest

Tabla: `ai_requests`

| Field | Type | Description |
|------|------|-------------|
| id | bigint | Primary key |
| company_id | bigint | FK → companies.id |
| user_id | bigint | FK → users.id |
| type | string | summary / writing / analysis |
| prompt | text | Sent prompt |
| tokens_used | integer | Consumed tokens |
| status | string | pending / completed / error |
| created_at | timestamp | Created |
| updated_at | timestamp | Updated |

**Relaciones**
- Belongs to a company
- Belongs to a user
- Can generate documents

---

## 🔗 Relaciones Globales


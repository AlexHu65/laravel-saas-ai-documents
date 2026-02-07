# Laravel SaaS AI Documents – Master Plan

Proyecto SaaS B2B enfocado en negocios locales (México y LATAM),
basado en suscripción mensual y generación de documentos administrativos con IA.

---

## 🎯 Objetivos del proyecto

- Construir un SaaS multi-tenant profesional en Laravel
- Integrar IA como servicio desacoplado
- Monetizar vía suscripciones mensuales
- Publicar repositorios GitHub de alto nivel técnico
- Documentación viva con GitHub Pages

---

## 🧱 Stack Tecnológico

### Backend
- Laravel 11
- PHP 8.3
- MySQL
- PHPUnit

### Frontend (fase posterior)
- React 18
- Angular 17+

### Infra / DevOps
- GitHub Actions (CI)
- GitHub Pages (Docs)
- Docker (opcional, fase 2)

### Pagos
- Stripe (preferente)
- MercadoPago (México)

### IA
- OpenAI (o proveedor intercambiable)
- Arquitectura desacoplada (Strategy Pattern)

---

## 📁 Estructura del repositorio

```text
laravel-saas-ai-documents/
├── app/
│   ├── Domain/
│   ├── Services/
│   │   └── AI/
│   └── Http/
│       └── Middleware/
├── config/
├── database/
├── routes/
├── tests/
├── docs/
│   ├── index.md
│   ├── architecture.md
│   ├── roadmap.md
│   └── project-plan.md
├── .github/
│   └── workflows/
│       └── ci.yml
├── docker/
├── README.md
└── .env.example

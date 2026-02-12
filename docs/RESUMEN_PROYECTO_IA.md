# Resumen del Proyecto para IA - Laravel SaaS AI Documents

## Contexto del Proyecto (25 líneas máximo)
**Laravel SaaS AI Documents** es una plataforma SaaS enfocada en el procesamiento inteligente de documentos corporativos. El proyecto está en **estado inicial** (Laravel 11.31 recién instalado) sin funcionalidad de negocio implementada. Utiliza arquitectura **multi-tenant** donde cada empresa opera de forma independiente con sus usuarios, documentos y límites de uso. El core del negocio es recibir documentos (PDF, Word, etc.), procesarlos con APIs de IA (OpenAI, Claude), y entregar análisis estructurados. Incluye sistema de suscripciones con planes que limitan uso mensual de tokens IA. La arquitectura planificada sigue **Domain Driven Design** con capas bien definidas: Presentación (API/Web), Aplicación (Controllers/Services), Dominio (Models/Business Logic), e Infraestructura (Database/External APIs). Usa **processing queues** para manejar documentos de forma asíncrona, **event sourcing** para auditoría, y **UUID públicos** para seguridad. El sistema debe escalar para múltiples empresas simultáneas con **rate limiting** por plan y **usage tracking** preciso para facturación. Sin modelos, migraciones o integraciones implementadas - requiere construcción completa desde cero siguiendo las especificaciones del ERD definido.

## Entidades Principales
- **User**: Usuarios con roles por empresa (Admin, Member, Viewer)
- **Company**: Organizaciones multi-tenant con configuraciones independientes  
- **Document**: Archivos cargados para procesamiento IA con metadatos
- **ProcessingJob**: Jobs asíncronos de análisis IA con tracking de tokens/costos
- **Subscription**: Suscripciones con límites de uso y facturación Stripe
- **Plan**: Definición de características y límites por tipo de suscripción
- **AIProvider**: Configuración de servicios IA (OpenAI, Claude, etc.)
- **Usage**: Tracking detallado para facturación y control de límites

## Flujos Críticos
1. **Onboarding**: Registro → Verificación → Selección Plan → Setup Empresa → Primer Documento
2. **Procesamiento**: Upload → Validación → Queue → IA Analysis → Storage → Notification  
3. **Facturación**: Uso → Agregación → Límites → Facturación → Renovación/Cancelación

## Decisiones Arquitectónicas Clave
- **Multi-tenancy con company_id** en todas las entidades principales
- **Queue system** obligatorio para procesamiento asíncrono de IA
- **UUID públicos** para Documents (seguridad)
- **JSON fields** para configuraciones flexibles (settings, limits, results)
- **Soft deletes** en entidades de negocio, auditoría completa en logs
- **Rate limiting** por company y plan para proteger APIs externas

## Reglas que la IA debe Respetar
1. **NUNCA modificar** archivos vendor o configuraciones core sin confirmación
2. **SIEMPRE crear migraciones** antes de implementar modelos
3. **OBLIGATORIO filtrar por company_id** en todas las queries multi-tenant
4. **VALIDAR límites de plan** antes de procesar documentos
5. **USAR queues** para procesamiento IA (nunca síncrono)
6. **IMPLEMENTAR try-catch** en integraciones externas con reintentos
7. **SEGUIR convenciones Laravel**: PascalCase modelos, camelCase variables
8. **CREAR tests** para funcionalidades críticas de procesamiento
9. **LOGS detallados** para debugging de procesamiento IA
10. **BACKUP antes** de cambios en estructura de BD existente

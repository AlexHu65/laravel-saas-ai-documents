Act as a senior software architect. Your objective is to COMPLETELY ANALYZE this existing project and prepare essential documentation so that AI can operate from day one, without excuses or friction.

This command should generate the complete initial project assessment and prepare content to create the FOLLOWING FILES (don't create them yet; just deliver them in the chat for my review):

1. PROJECT_ARCHITECTURE.md
2. AI_PROJECT_GUIDE.md
3. PROJECT_METADATA.json
4. ENTITY_RELATIONSHIP_DIAGRAM.md
5. AI_PROJECT_SUMMARY.md

===========================================
FIRST STAGE — PROJECT ANALYSIS
===========================================

1. Initial scanning
   - Detect languages, frameworks and dependencies.
   - Map relevant folder structure.
   - Identify entry points, routes, controllers, jobs, workers, configs, env loading and external services.

2. Current project state (human summary)
   - Project objective.
   - Main functionalities.
   - Detected modules and layers.
   - Visible technical risks.
   - Important technical debt.
   - Architectural complexities.

3. Entity-Relationship
   - Analyze models, migrations or SQL schemas.
   - Identify key entities and relationships.
   - Deliver a complete ERD in **Mermaid**.

4. Architecture
   - Explain current architecture (layers, modules, flows).
   - Describe critical flows: authentication, main entity creation, business processes, payments, integrations.
   - List key source files.

5. Project metadata
   Generate a structured JSON containing:
   - Project name
   - Technology stack
   - Main entities
   - External services used
   - Main routes
   - Models and critical files
   - Modules
   - Critical flows
   - Important dependencies
   - Detected risks
   - Relevant comments for AI

===========================================
SECOND STAGE — PREPARE FILES FOR THE PROJECT
===========================================

Based on all the above, generate complete contents (ready to copy and paste) for the following files:

(1) **PROJECT_ARCHITECTURE.md**
     - Current architecture
     - Modules
     - Flows
     - Dependencies
     - Critical areas

(2) **AI_PROJECT_GUIDE.md**
     - Instructions for AI to operate within this project
     - How to read the structure
     - How to modify files without breaking anything
     - Project precautions and conventions

(3) **PROJECT_METADATA.json**
     - Clean, semantic, structured and reusable JSON for any future session

(4) **ENTITY_RELATIONSHIP_DIAGRAM.md**
     - ERD diagram (Mermaid)
     - Brief description of each entity and its role

(5) **AI_PROJECT_SUMMARY.md**
     - Summary optimized for use as "persistent context" of the project
     - Description in maximum 25 lines
     - List of entities
     - Critical flows
     - Key architectural decisions
     - Rules that AI must respect

===========================================
RULES
===========================================

- Don't modify project files yet.
- Don't propose refactors until finishing the assessment.
- All initial output must be delivered in a single organized message.
- Wait for my confirmation before writing files to disk.
- Maintain absolute compatibility with existing codebase.

===========================================
AT THE END
===========================================

Show:

1. A general index of what was found
2. The 5 complete files ready for creation
3. Risks, pending questions and technical recommendations
4. How to continue work immediately after startup

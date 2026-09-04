# Trilha DEV completa — estrutura e progressão de conceitos

Contexto de referência para propor exercícios, desafios ou gates novos. Esta é a trilha inteira (mesmo que este repositório, por ora, só tenha os arquivos de MC2 e MC3) — cada microcurso está aqui para você saber o que já foi visto antes dele e o que ainda não pode ser usado.

Programa de 12 meses, autoestudo com material gratuito. Formato: Fase → Módulo → Microcurso (MC) → Gate. 3 fases, 6 módulos, 16 microcursos, 6 gates (um projeto bloqueante por módulo, não só um capstone final). Duração estimada da trilha: 43 semanas (~10 meses), com folga de ~2 meses no programa.

Regra geral de progressão: um exercício de um microcurso só pode usar conceitos já introduzidos em microcursos anteriores (ou no próprio). Nunca "empreste" uma técnica do futuro só porque deixaria a solução mais elegante — isso quebra o propósito pedagógico da sequência.

## Fase 1 — Introdução Prática (semanas 01–08)

### Módulo 1 — Primeiros Passos

- **MC1 — Terminal, Ambiente de Dev e Git essencial** (sem 01–02). Linux/terminal básico (pwd, ls, cd, mkdir, touch, rm, cp, mv, cat), pipes/redirecionamento, chmod, variáveis de ambiente; instalar PHP+Composer+VS Code; Git/GitHub básico (init, add, commit, clone, push, pull, branch, PR). *Resolução de conflito de merge fica para o MC16 — não introduzir aqui.*
- **MC2 — Lógica de programação I** (sem 03–04). Variáveis, tipos, operadores. **Só código sequencial: sem `if`, sem laço, sem função.** Tema: Bhaskara, conversores de unidade, médias.
- **MC3 — Lógica de programação II** (sem 05–06). Aqui entram condicionais (`if`/`elseif`/`else`, `switch`/`match`) e laços (`for`/`while`/`do-while`). Ainda sem função própria, sem recursão. Tema: fizzbuzz, tabuada, CPF simplificado, pirâmides, +desafios (Fibonacci iterativo, jogo de adivinhação).
- **MC4 — Laboratório introdutório** (sem 07). Miniprojeto CLI (forca ou conversor de temperatura). *IA só como tutora/explicadora — nunca geradora de código aqui.*
- **Gate 1 — Calculadora de console completa** (sem 08). Ver critérios em `exercicios-e-gates.md`.

## Fase 2 — Fundamentos Básicos (semanas 09–19)

### Módulo 2 — Estruturas de Dados e Funções

- **MC5 — Funções, parâmetros e escopo** (sem 09). Primeira aparição de função própria e de recursão simples (fatorial, Fibonacci). Exercício típico: refatorar MC2/MC3 extraindo funções.
- **MC6 — Arrays e estruturas de dados** (sem 10–11). Ordenar/filtrar/buscar em array na mão e depois com `array_filter`/`array_map`/`usort`; pilha e fila manuais.
- **Gate 2 — Lista de tarefas via terminal com persistência em arquivo/JSON** (sem 12).

### Módulo 3 — POO e Qualidade, tema ITSM/GLPI

- **MC7 — POO em PHP** (sem 13–15). Primeira aparição de classes, objetos, herança, encapsulamento. **Domínio dos exercícios é ITSM/GLPI, não genérico** — ex.: classe abstrata `Chamado` com subclasses `Incidente`/`Requisição`, classe `Fila` gerenciando chamados, `GrupoDeUsuarios`/`Tecnico` com encapsulamento, ciclo de status (aberto → em atendimento → resolvido → fechado). Os materiais de apoio são de POO genérica; a contextualização ITSM é nossa, então os exercícios (não os materiais de estudo) devem ser propostos nesse domínio.
- **MC8 — Boas práticas e PSR** (sem 16–17). PSR-12 (PHP_CodeSniffer) sobre o código do MC7. *A partir daqui a IA pode ser usada para revisão de código (comparar sugestão com PSR) — ainda não para gerar a solução.*
- **Gate 3 — Mini-sistema de abertura de chamados (ITSM)** (sem 18–19).

## Fase 3 — Fundamentos Específicos (semanas 20–43)

### Módulo 4 — Banco de Dados

- **MC9 — Modelagem relacional e SGBDs** (sem 20–21). DER, normalização básica, MySQL x PostgreSQL (conceitual).
- **MC10 — SQL na prática** (sem 22–23). Bateria de 10+ queries (SELECT, JOIN, GROUP BY/HAVING, subqueries) sobre a Sakila.
- **MC11 — CRUD via PDO com prepared statements** (sem 24–25). Conexão PHP+MySQL via PDO, prepared statements, CRUD completo. **Proibido usar Migrations/Eloquent aqui — isso só entra no Módulo 5.** Exercícios de banco até este ponto são PDO puro.
- **Gate 4 — CLI com persistência real em MySQL** (sem 26–27). PDO puro, sem framework.

### Módulo 5 — Laravel e APIs

- **MC12 — Laravel essencial** (sem 28–29). Primeira aparição do framework: MVC, rotas, controllers, Blade.
- **MC13 — Migrations e Eloquent na prática** (sem 30–31). **É aqui que Eloquent/Migrations passam a ser permitidos.** Exercício-chave: refazer o CRUD do Gate 4 com Eloquent e comparar com a versão PDO manual. *(Nota: este microcurso está com só 2 materiais gratuitos catalogados — ver `materiais-didaticos.md`.)*
- **MC14 — APIs** (sem 32–34). REST, consumo de API externa, construção de endpoint, autenticação (Sanctum).
- **Gate 5 — Aplicação Laravel completa com API própria** (sem 35–36).

### Módulo 6 — Qualidade, Versionamento e Operação

- **MC15 — Testes automatizados (PHPUnit) e debugging** (sem 37–38).
- **MC16 — Git em fluxo de equipe + deploy/ambientes** (sem 39–40). **Resolução de conflito de merge real mora aqui** (não no MC1), branch por feature, PR com template, `.env` por ambiente.
- **Gate 6 — Projeto de fechamento da trilha / capstone** (sem 41–43).

## Premissas técnicas (baseline de set/2026 — reconfirme se muito tempo tiver passado)

PHP 8.3+ (ref. 8.5) · MySQL 8.4/9.7 LTS · Laravel 12 ou 13 · PSR-12 · PHPUnit (não Pest). PostgreSQL 18 é citado só conceitualmente no MC9.

## Escopo atual deste repositório

Só MC2, MC3 e o briefing do Gate 1 têm arquivos hoje (era a pendência prioritária). Os demais microcursos entram aqui quando alguém pedir "monte os exercícios do MCxx" — ao fazer isso, siga a mesma estrutura de pastas (`modulo-XX-nome/mcYY-nome/exercicios/`) e o formato descrito em `exercicios-e-gates.md`.

# Materiais didáticos — regras de curadoria e catálogo

Regras para indicar material de estudo para qualquer microcurso desta trilha (existente ou novo), seguidas do catálogo completo já escolhido para os 16 microcursos. Esse catálogo só estava documentado no artefato visual (mapa da trilha) e na nota do vault — replicado aqui pra IA não precisar abrir nenhum dos dois pra saber o que já foi escolhido.

## Regra inegociável: 100% gratuito

Nenhum material pago, nunca — nem "tem trecho grátis", nem trial. Fora da trilha por ora: **Alura, Laracasts, Udemy, LearnSQL** e qualquer plataforma paga equivalente. Se no futuro a empresa adquirir alguma licença corporativa, isso pode ser reavaliado — mas é uma decisão explícita do Andre, não uma suposição a fazer sozinho.

## Preferência de idioma

PT-BR quando existir material de qualidade equivalente ao inglês (ex.: Curso em Vídeo, freeCodeCamp em português, Rocketseat, Codamos, DIO). Documentação oficial em inglês é normal e aceitável (php.net, laravel.com, PSR-FIG, PHPUnit, Xdebug) — trainee de dev vai precisar ler documentação em inglês de qualquer forma.

## Nunca inventar link

Um material só entra na trilha se a URL for real e navegável. Se a curadoria não encontrar material suficiente para um microcurso, **sinalize a lacuna explicitamente** em vez de completar com um link fraco ou inventado. Exemplo real já registrado: o MC13 (Migrations e Eloquent) ficou com só 2 recursos gratuitos catalogados — isso está marcado como pendência a reforçar depois, não preenchido artificialmente só para bater uma cota de "3 a 4 materiais por microcurso".

## Tipos de material usados na trilha

- **Vídeo**: Curso em Vídeo (Gustavo Guanabara), freeCodeCamp, Celke (Laravel).
- **Texto / artigo**: freeCodeCamp em português, Rocketseat, Codamos, DIO, debxp.
- **Documentação oficial**: php.net, laravel.com/docs, PSR-FIG (psr-12), PHPUnit, Xdebug, MDN.
- **Interativo / juiz online**: beecrowd, Codewars, Exercism (tem mentoria humana gratuita), SQLZoo, GitHub Skills.
- **Dataset/projeto de referência**: MySQL Sakila Sample Database, roadmap.sh/php/projects (ideias de projeto, não curso).

Ao indicar um material novo, sempre anotar no mesmo formato usado no resto da trilha: **título — link — tipo (vídeo/texto/documentação/interativo) — duração se vídeo — idioma — "gratuito"**.

## Baseline de versão (setembro/2026 — reconfirme se muito tempo tiver passado)

PHP mínimo 8.3, referência 8.5 · MySQL 8.4 LTS ou 9.7 LTS · Laravel 12 (suporte de segurança até fev/2027) ou 13 (atual desde mar/2026) · PostgreSQL 18 citado só conceitualmente (comparação teórica no MC9, não uso prático) · PSR-12 · PHPUnit, não Pest. Prefira material rotulado com essas versões ou mais recente; material desatualizado pode ser usado se os conceitos de fundo continuarem válidos (ex.: o curso de PHP POO do Curso em Vídeo é uma gravação mais antiga, mas o conteúdo de POO em si não mudou).

## Catálogo de materiais já escolhidos, por microcurso

Curadoria validada por Andre (set/2026). Antes de sugerir algo novo pra um desses microcursos, confira se já não tem material equivalente aqui — e se completar a lista, mantenha o mesmo formato de linha.

**MC1 — Terminal, Ambiente de Dev e Git essencial**
- Curso de Git e GitHub — Curso em Vídeo (Gustavo Guanabara) — https://www.cursoemvideo.com/curso/curso-de-git-e-github/ — vídeo, 20h, PT-BR, gratuito.
- Curso de Linux — Primeiros Passos — Curso em Vídeo — https://cursa.com.br/curso-de-linux-primeiros-passos-por-curso-em-v%C3%ADdeo/41 — vídeo, 6h45, PT-BR, gratuito.
- O Manual de Comandos do Linux — freeCodeCamp — https://www.freecodecamp.org/portuguese/news/o-manual-de-comandos-do-linux-aprenda-comandos-do-linux-para-iniciantes/ — texto, PT-BR, gratuito (pipes, redirect, chmod com mais profundidade).
- Instalação oficial — PHP: https://www.php.net/downloads.php · Composer: https://getcomposer.org/download/ · VS Code: https://code.visualstudio.com/docs/languages/php — documentação, inglês, gratuito.

**MC2 — Lógica de programação I**
- Curso de PHP Moderno: Módulo 1 — Curso em Vídeo — https://www.cursoemvideo.com/curso/curso-de-php-moderno-modulo-01/ — vídeo, PT-BR, gratuito (usar só o bloco de variáveis/tipos/operadores; pular aulas de formulário HTML).
- O Manual do PHP — freeCodeCamp — https://www.freecodecamp.org/portuguese/news/o-manual-do-php-guia-para-iniciantes-em-php/ — texto, PT-BR, gratuito.
- PHP Manual — Types / Operators — https://www.php.net/manual/en/language.types.php · https://www.php.net/manual/en/language.operators.php — documentação oficial, inglês, gratuito.
- beecrowd (categoria Iniciante) — https://judge.beecrowd.com/ — interativo (juiz online), PT-BR, gratuito.

**MC3 — Lógica de programação II**
- O Manual do PHP — freeCodeCamp (seção condicionais/laços, mesma URL do MC2) — texto, PT-BR, gratuito.
- PHP Manual — Control Structures — https://www.php.net/manual/en/language.control-structures.php — documentação, inglês, gratuito.
- beecrowd (categoria Iniciante) — https://judge.beecrowd.com/ — interativo, PT-BR, gratuito.
- Validando CPF (algoritmo + código PHP) — https://debxp.org/validando-cpf-do-algoritmo-ao-codigo-php-python-js/ — texto, PT-BR, gratuito.
- roadmap.sh — PHP Projects (ideia pro jogo de adivinhação) — https://roadmap.sh/php/projects — lista de projetos, inglês, gratuito.

**MC4 — Laboratório introdutório**
- roadmap.sh — PHP Projects — https://roadmap.sh/php/projects — lista de ideias, inglês, gratuito ("Number Guessing Game", "Unit Converter").
- Jogo da Forca em PHP — Computer Science Master — https://www.computersciencemaster.com.br/jogo-da-forca-em-php/ — texto, PT-BR, gratuito (versão web; adaptar pra CLI com `fgets(STDIN)`).

**MC5 — Funções, parâmetros e escopo**
- PHP Manual — Functions / Variable scope — https://www.php.net/manual/en/language.functions.php · https://www.php.net/manual/en/language.variables.scope.php — documentação, inglês, gratuito.
- O Manual do PHP — freeCodeCamp (seção funções) — texto, PT-BR, gratuito.
- Problemas clássicos de lógica com PHP — Rocketseat — https://www.rocketseat.com.br/blog/artigos/post/problemas-classicos-logica-php-como-resolver — texto, PT-BR, gratuito (fatorial recursivo, Fibonacci).
- Exercism — PHP Track — https://exercism.org/tracks/php — interativo com mentoria humana gratuita, inglês, gratuito.

**MC6 — Arrays e estruturas de dados**
- PHP Manual — Array Functions — https://www.php.net/manual/en/ref.array.php — documentação, inglês, gratuito.
- Guia definitivo de arrays no PHP — Codamos — https://codamos.com.br/guia-arrays-no-php/ — texto, PT-BR, gratuito.
- O Manual do PHP — freeCodeCamp (seção arrays) — texto, PT-BR, gratuito.
- Codewars — PHP kata (8kyu/7kyu) — https://www.codewars.com/kata/search/php — interativo, inglês, gratuito.

**MC7 — POO em PHP**
- Curso em Vídeo — PHP POO [40h] — https://www.cursoemvideo.com/curso/php-poo/ — vídeo, PT-BR, gratuito (gravação mais antiga, conceitos continuam válidos).
- PHP Manual — Classes and Objects — https://www.php.net/manual/en/language.oop5.php — documentação, inglês, gratuito.
- PHP Tutorial — PHP OOP — https://www.phptutorial.net/php-oop/ — texto, inglês, gratuito.

**MC8 — Boas práticas e PSR**
- PSR-12: Extended Coding Style — https://www.php-fig.org/psr/psr-12/ — documentação oficial, inglês, gratuito.
- PHP: The Right Way (tradução PT-BR) — http://br.phptherightway.com/ — texto, PT-BR, gratuito.
- Como usar IA para revisar seu próprio código — Rocketseat — https://www.rocketseat.com.br/blog/artigos/post/ia-revisar-codigo-prompts-code-review — texto, PT-BR, gratuito (prompts prontos + alerta contra aceitar sugestão cegamente).

**MC9 — Modelagem relacional e SGBDs**
- Relational Database Design — freeCodeCamp — https://www.freecodecamp.org/news/learn-relational-database-design/ — vídeo, 6h, inglês, gratuito (DER, cardinalidade, formas normais até BCNF).
- MySQL ou PostgreSQL? — DIO — https://www.dio.me/articles/mysql-ou-postgresql-qual-banco-de-dados-relacional-escolher — texto, PT-BR, gratuito.
- PostgreSQL vs MySQL: Which to Choose in 2026? — Bytebase — https://www.bytebase.com/blog/postgres-vs-mysql/ — texto, inglês, gratuito.

**MC10 — SQL na prática**
- SQLZoo — https://sqlzoo.net/ — interativo, inglês, gratuito.
- MySQL Sakila Sample Database — https://dev.mysql.com/doc/sakila/en/sakila-usage.html (instalação: https://dev.mysql.com/doc/sakila/en/sakila-installation.html) — dataset oficial, inglês, gratuito.
- SQL and Databases – Full Course for Beginners — freeCodeCamp — https://www.freecodecamp.org/news/sql-and-databases-full-course/ — vídeo, 4h, inglês, gratuito.

**MC11 — CRUD via PDO com prepared statements**
- PHP Manual — PDO — https://www.php.net/manual/en/book.pdo.php — documentação oficial, inglês, gratuito.
- PHP PDO Tutorial — phptutorial.net — https://www.phptutorial.net/php-pdo/ — texto, inglês, gratuito (conexão, prepared statements, CRUD completo, transações).
- SQL injection em PHP: como se proteger — Rocketseat — https://www.rocketseat.com.br/blog/artigos/post/sql-injection-php-pdo-prepared-statements — texto, PT-BR, gratuito.

**MC12 — Laravel essencial**
- Documentação oficial — Routing / Controllers / Blade — https://laravel.com/docs/13.x/routing · /controllers · /blade — documentação, inglês, gratuito.
- Laravel Bootcamp (oficial) — https://laravel.com/learn — vídeo/interativo, inglês, gratuito.
- Curso gratuito de Laravel 12 — Celke — https://www.youtube.com/playlist?list=PLmY5AEiqDWwB29FbhTfTh86Zr0yjeFBwO — vídeo, 35 aulas, PT-BR, gratuito.

**MC13 — Migrations e Eloquent na prática**
- Documentação oficial — Migrations / Eloquent Relationships / Form Request Validation — https://laravel.com/docs/13.x/migrations · /eloquent-relationships · /validation#form-request-validation — documentação, inglês, gratuito.
- Curso gratuito de Laravel 12 — Celke (mesma playlist do MC12, parte Eloquent/Migrations) — vídeo, PT-BR, gratuito.
- ⚠️ Só 2 recursos catalogados aqui — pendência aberta pra reforçar (ver regra "nunca inventar link" acima). Não complete essa lista com um terceiro link só pra bater número; procure algo que realmente agregue.

**MC14 — APIs**
- MDN — HTTP Overview (pt-BR) — https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Guides/Overview — documentação, PT-BR, gratuito (fundamentos REST agnósticos de framework).
- Documentação oficial — HTTP Client — https://laravel.com/docs/13.x/http-client — documentação, inglês, gratuito (consumo de APIs externas).
- Documentação oficial — Sanctum — https://laravel.com/docs/13.x/sanctum — documentação, inglês, gratuito (autenticação de API).

**MC15 — Testes automatizados (PHPUnit) e debugging**
- Documentação oficial — Testing / Error Handling — https://laravel.com/docs/13.x/testing · /errors — documentação, inglês, gratuito.
- PHPUnit — Documentação oficial — https://docs.phpunit.de/en/12.5/ — documentação, inglês, gratuito.
- Xdebug — Instalação e Step Debugging — https://xdebug.org/docs/install · /docs/step_debug — documentação, inglês, gratuito.

**MC16 — Git em fluxo de equipe + deploy/ambientes**
- Pro Git (livro oficial, tradução PT-BR) — https://git-scm.com/book/pt-br/v2 — livro, PT-BR, gratuito (cap. 3 e 7.8: branching, merge, conflitos).
- Atlassian Git Tutorials (PT-BR) — https://www.atlassian.com/br/git/tutorials/comparing-workflows · /making-a-pull-request — texto, PT-BR, gratuito.
- GitHub Skills — "Resolve merge conflicts" — https://github.com/skills/resolve-merge-conflicts — interativo (repositório real), ~30min, inglês, gratuito.
- Documentação oficial — Configuration / Deployment — https://laravel.com/docs/13.x/configuration · /deployment — documentação, inglês, gratuito.

# Materiais didáticos — regras de curadoria

Regras para indicar material de estudo para qualquer microcurso desta trilha (existente ou novo).

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

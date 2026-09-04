# Trilha DEV — Exercícios (Programa Trainee)

Repositório de exercícios da Trilha DEV (PHP/Laravel/MySQL) do Programa Trainee da Positivo S+. Antes de propor um exercício ou gate novo, leia `agent_docs/trilha-completa.md`.

## Stack

- PHP mínimo 8.3, referência 8.5. Sem framework nem dependências por enquanto — PHP puro via terminal. Laravel só entra a partir do Módulo 5.
- MySQL 8.4/9.7 LTS quando o exercício envolver banco (a partir do Módulo 4).
- Padrão de código: PSR-12. Testes: PHPUnit (não Pest).

## Como rodar um exercício

`php modulo-XX-nome/mcYY-nome/exercicios/NN-nome.php` — o programa já lê a entrada do terminal linha a linha (`fgets(STDIN)`); falta só a lógica no `// TODO`.

## Regra de ouro

Nenhum gabarito neste repositório. A trilha é autoestudo — Wesley e George (devs sênior) tiram dúvidas e validam os gates, mas não ministram aula nem entregam solução pronta. Um exercício novo é sempre "enunciado + exemplo de entrada/saída + TODO", nunca "enunciado + solução".

## Progressão de conceitos — não pule etapas

Cada microcurso só pode usar o que já foi introduzido até ali (nada de laço/condicional antes do MC3, nada de função ou recursão antes do MC5, nada de POO antes do MC7, nada de Eloquent/Migrations antes do Módulo 5). Antes de escrever um exercício, confira em `agent_docs/trilha-completa.md` onde ele cairia e o que ainda não pode aparecer nesse ponto.

## Papel da IA nos exercícios (varia por fase)

- MC1–MC4: IA só como tutora/explicadora — nunca gera o código pronto pro trainee.
- MC8 em diante: IA pode ajudar a revisar código já escrito pelo trainee (comparar com PSR-12) — não a escrevê-lo.

Detalhe completo em `agent_docs/exercicios-e-gates.md`.

## Onde cavar mais fundo

- `agent_docs/trilha-completa.md` — as 3 fases, 6 módulos, 16 microcursos e 6 gates, o que cada um cobre e a ordem de pré-requisitos.
- `agent_docs/materiais-didaticos.md` — regras de curadoria de material de estudo (o que pode e o que não pode indicar).
- `agent_docs/exercicios-e-gates.md` — formato dos arquivos de exercício, como os gates são avaliados e a política de reprovação.

## Branch

`main`. Repositório de projeto — ainda não passou pela esteira formal de criação de repositório do GitLab Positivolabs (não é uma aplicação em deploy, então esse padrão não se aplica aqui).

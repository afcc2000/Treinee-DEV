# Trilha DEV — Exercícios (Programa Trainee)

Repositório de exercícios práticos da **Trilha DEV** (PHP/Laravel/MySQL) do
Programa Trainee da Positivo S+. Acompanha a nota `Trilha DEV - Programa
Trainee.md` do vault — este repositório existe porque os exercícios de lógica
de programação precisavam de um lugar versionado, navegável e com histórico
de commits real (o próprio ato de commitar aqui já é prática do MC1).

## https://claude.ai/code/artifact/4505cc19-d92b-41c3-a8f4-4d6055c9ac56

## Escopo atual

Por enquanto o repositório cobre apenas o **Módulo 1 — Primeiros Passos**:

- **MC2 — Lógica de programação I** (18 exercícios): variáveis, tipos, operadores.
- **MC3 — Lógica de programação II** (17 exercícios + 3 desafios): condicionais e laços.
- **Gate 1 — Calculadora de console completa**: briefing do projeto que fecha o módulo.

Os demais microcursos (MC1, MC4 em diante) não estão aqui ainda porque MC2 e
MC3 foram os únicos com pendência explícita de "lista de exercícios no Git".
Conforme o time avançar, novos microcursos devem seguir a mesma estrutura de
pastas: `modulo-XX-nome/mcYY-nome/exercicios/`.

## Estrutura

```
modulo-01-primeiros-passos/
├── mc02-logica-programacao-1/
│   ├── README.md              (índice dos exercícios)
│   └── exercicios/
│       └── 01-....php ... 18-....php
├── mc03-logica-programacao-2/
│   ├── README.md
│   └── exercicios/
│       ├── 01-....php ... 17-....php
│       └── desafios/
│           └── 01-....php ... 03-....php
└── gate-01-calculadora-console/
    └── README.md               (entrega e critérios do gate)
```

## Como usar

Cada exercício é um arquivo `.php` autocontido: o cabeçalho em comentário traz
o enunciado, um exemplo de entrada/saída e, às vezes, uma dica. Depois do
cabeçalho já vêm prontas as linhas que leem a entrada do terminal — a parte
que falta é a lógica, marcada com `// TODO`.

Para rodar um exercício:

```bash
php modulo-01-primeiros-passos/mc02-logica-programacao-1/exercicios/01-ola-nome.php
```

O terminal vai ficar esperando você digitar a entrada (uma linha por vez,
conforme o comentário "Entrada" do exercício) e pressionar Enter.

O foco da correção é a **lógica**, não formatação pixel-perfect: pequenas
diferenças de espaçamento, acentuação ou uma casa decimal a mais/menos na
saída não são o que importa — o que importa é o raciocínio por trás do
código, e isso é avaliado por Wesley/George, não por um corretor automático.

## Fluxo de trabalho sugerido

- Um branch por trainee (ex.: `trainee/nome-sobrenome`) ou um fork pessoal do
  repositório.
- Commits pequenos e frequentes — é a mesma prática do MC1 (histórico real,
  não um único "commit final").
- Ao terminar um microcurso inteiro, abrir um Pull Request para Wesley ou
  George revisarem antes de considerar o Gate liberado.

## Regras

- **Sem gabarito neste repositório.** A trilha é de autoestudo com apoio dos
  devs sênior — Wesley e George tiram dúvidas e validam os gates, mas não
  ministram aula nem fornecem solução pronta.
- Evite compartilhar exercícios já resolvidos com outros colegas trainees —
  isso esvazia o valor do treinamento pra quem ainda não chegou lá.

## Pendência conhecida

Nenhuma solução de referência está incluída de propósito. Se no futuro fizer
sentido ter um branch privado de gabaritos só para Wesley/George
consultarem, isso pode ser criado separadamente — não fazia parte do pedido
original e não foi criado aqui.

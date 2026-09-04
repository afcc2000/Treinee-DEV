# Exercícios e gates — formato e avaliação

## Formato de um exercício (microcurso)

Cada exercício é um arquivo `.php` autocontido — sem gabarito, sem dependência de outro arquivo. Use os 38 arquivos de `modulo-01-primeiros-passos/mc02.../exercicios/` e `mc03.../exercicios/` como modelo exato. Estrutura fixa:

```php
<?php
/**
 * Exercício NN — Título curto
 * Microcurso: MCxx — Nome do microcurso
 *
 * Conceitos praticados: ...
 *
 * Enunciado:
 * ...
 *
 * Entrada:
 * ... (com exemplo concreto de valores)
 *
 * Saída esperada:
 * ... (com o resultado daquele exemplo)
 *
 * Dica: (opcional)
 * ...
 */
$variavel = (tipo) trim(fgets(STDIN)); // rótulo

// TODO: escreva sua solução abaixo.
```

Regras ao escrever um exercício novo:

- **Nunca inclua a solução.** Só o enunciado + a leitura de entrada já pronta + `// TODO`.
- **Sempre dê um exemplo numérico/concreto** de entrada e a saída correspondente — sem isso o trainee não tem como se autoavaliar.
- A leitura de entrada via `fgets(STDIN)` já vem pronta no arquivo; o que falta é sempre a lógica, nunca a mecânica de I/O. Isso é proposital — o objetivo pedagógico do exercício é o raciocínio, não decorar a sintaxe de leitura de terminal.
- **Respeite a progressão de conceitos** (`trilha-completa.md`) — nunca use, num exercício de um microcurso, uma técnica só introduzida depois dele.
- Nomeação: `NN-slug-descritivo.php`, dois dígitos, dentro de `exercicios/` do microcurso correspondente. Exercícios mais difíceis que a lista principal (quando existirem) vão em `exercicios/desafios/`, também numerados.
- O foco da correção é a lógica, não formatação pixel-perfect (espaço, acento, casas decimais) — isso vale tanto para quem resolve quanto para quem gera o exercício: não crie critérios de aceite rígidos demais sobre formatação exata de saída.

## Papel da IA — varia por fase da trilha

Isso é parte do desenho pedagógico, não um detalhe técnico:

- **MC1 a MC4**: IA só como tutora/explicadora de conceitos. Nunca deve gerar o código da solução para o trainee entregar como seu.
- **MC8 em diante**: IA pode ser usada para *revisar* código que o próprio trainee já escreveu (comparar com PSR-12, sugerir melhorias) — o trainee decide o que aceitar, a IA não reescreve por ele.
- Este princípio vale tanto para o trainee usando IA para estudar quanto para quem estiver usando IA (neste próprio repositório) para gerar novos exercícios: gerar o **enunciado e o esqueleto** é o uso correto; gerar a solução pronta para distribuir ao trainee não é.

## Gates — projeto bloqueante por módulo

Um gate por módulo (6 no total), não um capstone único no final. Cada gate bloqueia o avanço até ser aprovado por **Wesley ou George** (devs sênior — eles tiram dúvidas e validam, não ministram aula). Formato: **Entrega** (o que precisa existir) + **Critérios de aceite** (como é avaliado).

**Gate 1 — Calculadora de console completa** (fecha o Módulo 1)
Entrega: CLI em PHP puro com input do usuário, 3+ condicionais e 2+ laços diferentes, histórico de commits real, README.
Critérios: roda sem erro; variáveis legíveis; commits mostram evolução (não um só "commit final"); trainee explica cada trecho do próprio código.

**Gate 2 — Lista de tarefas via terminal com persistência em arquivo/JSON** (fecha o Módulo 2, parte 1)
Critérios: código modularizado em funções; 2+ estruturas de dados usadas de forma adequada; tratamento de erro básico.

**Gate 3 — Mini-sistema de abertura de chamados, tema ITSM** (fecha o Módulo 3)
Entrega: sistema com Chamado (+ subtipos via herança), Fila, Usuario, GrupoUsuario, Tecnico; abrir chamado, atribuir a técnico/fila, mudar status, listar por fila/grupo; diagrama de classes.
Critérios: linter PSR-12 limpo; diagrama bate com o código; mentor tenta "quebrar" o sistema com input estranho.

**Gate 4 — CLI com persistência real em MySQL** (fecha o Módulo 4)
Entrega: DER modelado, script SQL de criação, CRUD completo via PDO puro (sem framework).
Critérios: banco normalizado; zero SQL injection (prepared statements); roda do zero seguindo o README.

**Gate 5 — Aplicação Laravel completa com API própria** (fecha o Módulo 5)
Entrega: CRUD web funcional + API própria autenticada + consumo de API externa.
Critérios: endpoints testáveis via Postman/Insomnia; autenticação funcionando; lógica de negócio fora da view.

**Gate 6 — Projeto de fechamento da trilha / capstone** (fecha o Módulo 6)
Entrega: evolução do Gate 5 com suíte de testes automatizados (cobertura mínima a definir, ex. 60–70% das classes de negócio), Git com histórico de branches/PRs, README completo.
Critérios: `php artisan test` passa 100%; app sobe só com o README; defesa oral curta do projeto pro mentor, simulando um code review real.

## Política de reprovação em gate

Feedback específico por escrito + 1 semana extra para corrigir e reapresentar. **Sem número máximo de tentativas por enquanto.** Não proponha um limite de tentativas ao formalizar um gate novo sem confirmar antes — é uma decisão em aberto, não uma omissão.

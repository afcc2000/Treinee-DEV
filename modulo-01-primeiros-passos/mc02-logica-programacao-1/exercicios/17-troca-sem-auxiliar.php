<?php
/**
 * Exercício 17 — Troca de valores (sem variável auxiliar)
 * Microcurso: MC2 — Lógica de programação I (variáveis, tipos, operadores)
 *
 * Conceitos praticados: operações aritméticas encadeadas
 *
 * Enunciado:
 * Refaça o exercício anterior, mas agora troque os dois valores sem usar
 * nenhuma variável auxiliar — apenas com operações aritméticas entre $a e
 * $b.
 *
 * Entrada:
 * Duas linhas. Exemplo:
 * 3
 * 8
 *
 * Saída esperada:
 * Antes: a=3, b=8
 * Depois: a=8, b=3
 *
 * Dica:
 * Pense em somar e depois subtrair: a = a + b; b = a - b; a = a - b;
 */
$a = (int) trim(fgets(STDIN)); // primeiro valor
$b = (int) trim(fgets(STDIN)); // segundo valor

// TODO: escreva sua solução abaixo.

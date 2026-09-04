<?php
/**
 * Exercício 14 — Bhaskara — parte 1: o discriminante
 * Microcurso: MC2 — Lógica de programação I (variáveis, tipos, operadores)
 *
 * Conceitos praticados: potenciação, fórmula matemática com múltiplas variáveis
 *
 * Enunciado:
 * Leia os coeficientes a, b e c de uma equação do 2º grau (ax² + bx + c = 0)
 * e calcule o discriminante Δ = b² − 4ac.
 *
 * Entrada:
 * Três linhas: a, b, c. Exemplo:
 * 1
 * -5
 * 6
 *
 * Saída esperada:
 * Delta = 1
 *
 * Dica:
 * Em PHP, potência é o operador **, então b² se escreve $b ** 2.
 */
$a = (float) trim(fgets(STDIN)); // coeficiente a
$b = (float) trim(fgets(STDIN)); // coeficiente b
$c = (float) trim(fgets(STDIN)); // coeficiente c

// TODO: escreva sua solução abaixo.

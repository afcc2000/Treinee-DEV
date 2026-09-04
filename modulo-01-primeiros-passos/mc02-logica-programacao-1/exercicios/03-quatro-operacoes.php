<?php
/**
 * Exercício 03 — As quatro operações
 * Microcurso: MC2 — Lógica de programação I (variáveis, tipos, operadores)
 *
 * Conceitos praticados: operadores aritméticos (+, -, *, /), float
 *
 * Enunciado:
 * Leia dois números e exiba, em linhas separadas, a soma, a subtração, a
 * multiplicação e a divisão entre eles (primeiro menos/dividido pelo
 * segundo).
 *
 * Entrada:
 * Duas linhas com números. Exemplo:
 * 10
 * 3
 *
 * Saída esperada:
 * Soma: 13
 * Subtração: 7
 * Multiplicação: 30
 * Divisão: aproximadamente 3.33
 *
 * Dica:
 * Por enquanto não precisa tratar divisão por zero — isso vem mais pra
 * frente.
 */
$a = (float) trim(fgets(STDIN)); // primeiro número
$b = (float) trim(fgets(STDIN)); // segundo número

// TODO: escreva sua solução abaixo.

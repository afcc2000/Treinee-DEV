<?php
/**
 * Exercício 03 — Conjectura de Collatz
 * Microcurso: MC3 — Lógica de programação II (condicionais e laços) — desafio
 *
 * Conceitos praticados: while, condicionais, contador de passos
 *
 * Enunciado:
 * Leia um número inteiro positivo N e aplique a conjectura de Collatz:
 * enquanto N for diferente de 1, se for par divida por 2, se for ímpar
 * multiplique por 3 e some 1. Exiba cada valor obtido e, ao final, quantos
 * passos foram necessários até chegar a 1.
 *
 * Entrada:
 * Uma linha. Exemplo:
 * 6
 *
 * Saída esperada:
 * 6 -> 3 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1
 * Total de passos: 8
 *
 * Dica:
 * A conjectura de Collatz afirma que, para qualquer número positivo, essa
 * sequência sempre chega a 1 — ninguém provou isso matematicamente até hoje,
 * é um problema em aberto.
 */
$numero = (int) trim(fgets(STDIN)); // número inicial (positivo)

// TODO: escreva sua solução abaixo.

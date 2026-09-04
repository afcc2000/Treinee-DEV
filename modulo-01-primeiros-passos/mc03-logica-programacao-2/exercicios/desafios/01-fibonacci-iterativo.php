<?php
/**
 * Exercício 01 — Fibonacci iterativo
 * Microcurso: MC3 — Lógica de programação II (condicionais e laços) — desafio
 *
 * Conceitos praticados: for/while, duas variáveis carregando o histórico
 *
 * Enunciado:
 * Leia um número N e exiba os N primeiros termos da sequência de Fibonacci
 * (0, 1, 1, 2, 3, 5, 8, ...), usando um laço — sem recursão (isso é assunto
 * de um módulo futuro).
 *
 * Entrada:
 * Uma linha. Exemplo:
 * 8
 *
 * Saída esperada:
 * 0 1 1 2 3 5 8 13
 *
 * Dica:
 * Guarde os dois últimos termos em duas variáveis e vá atualizando-as a cada
 * volta do laço.
 */
$quantidade = (int) trim(fgets(STDIN)); // quantidade de termos a gerar

// TODO: escreva sua solução abaixo.

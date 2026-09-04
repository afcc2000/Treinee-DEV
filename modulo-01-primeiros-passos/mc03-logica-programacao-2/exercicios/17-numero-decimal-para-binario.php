<?php
/**
 * Exercício 17 — Decimal para binário
 * Microcurso: MC3 — Lógica de programação II (condicionais e laços)
 *
 * Conceitos praticados: while, divisão inteira, módulo, montagem de string ao contrário
 *
 * Enunciado:
 * Leia um número inteiro positivo em decimal e converta para binário, usando
 * divisões sucessivas por 2 (sem usar a função pronta decbin()).
 *
 * Entrada:
 * Uma linha. Exemplo:
 * 13
 *
 * Saída esperada:
 * 1101
 *
 * Dica:
 * A cada passo, o resto da divisão por 2 é o próximo dígito binário (de trás
 * pra frente). Pare quando o número chegar a 0.
 */
$numero = (int) trim(fgets(STDIN)); // número decimal a converter

// TODO: escreva sua solução abaixo.

<?php
/**
 * Exercício 12 — Conversor de moeda
 * Microcurso: MC2 — Lógica de programação I (variáveis, tipos, operadores)
 *
 * Conceitos praticados: multiplicação/divisão, entrada de taxa/cotação
 *
 * Enunciado:
 * Leia um valor em reais e a cotação atual do dólar, e exiba quanto isso
 * equivale em dólares.
 *
 * Entrada:
 * Duas linhas: valor em reais, cotação do dólar. Exemplo:
 * 100
 * 5.20
 *
 * Saída esperada:
 * Aproximadamente US$ 19.23
 *
 * Dica:
 * Divida o valor em reais pela cotação.
 */
$valorReais = (float) trim(fgets(STDIN)); // valor em reais
$cotacaoDolar = (float) trim(fgets(STDIN)); // cotação do dólar em reais

// TODO: escreva sua solução abaixo.

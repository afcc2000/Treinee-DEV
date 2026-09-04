<?php
/**
 * Exercício 06 — Ano bissexto
 * Microcurso: MC3 — Lógica de programação II (condicionais e laços)
 *
 * Conceitos praticados: operadores lógicos (&&, ||), regra composta
 *
 * Enunciado:
 * Leia um ano e diga se ele é bissexto. Regra: é bissexto se for divisível
 * por 4 e não for divisível por 100, EXCETO quando também for divisível por
 * 400 (nesse caso é bissexto mesmo assim).
 *
 * Entrada:
 * Uma linha. Exemplo:
 * 2024
 *
 * Saída esperada:
 * 2024 é bissexto
 *
 * Dica:
 * Exemplos pra testar: 1900 não é bissexto, 2000 é bissexto, 2024 é
 * bissexto, 2023 não é.
 */
$ano = (int) trim(fgets(STDIN)); // ano a verificar

// TODO: escreva sua solução abaixo.

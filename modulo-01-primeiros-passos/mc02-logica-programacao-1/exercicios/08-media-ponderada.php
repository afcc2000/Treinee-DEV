<?php
/**
 * Exercício 08 — Média ponderada
 * Microcurso: MC2 — Lógica de programação I (variáveis, tipos, operadores)
 *
 * Conceitos praticados: média ponderada, múltiplas variáveis
 *
 * Enunciado:
 * Leia três notas e os três pesos correspondentes e calcule a média
 * ponderada.
 *
 * Entrada:
 * Seis linhas: nota1, peso1, nota2, peso2, nota3, peso3. Exemplo:
 * 8
 * 2
 * 6
 * 3
 * 9
 * 5
 *
 * Saída esperada:
 * A média ponderada é 7.9
 */
$nota1 = (float) trim(fgets(STDIN)); // primeira nota
$peso1 = (float) trim(fgets(STDIN)); // peso da 1ª nota
$nota2 = (float) trim(fgets(STDIN)); // segunda nota
$peso2 = (float) trim(fgets(STDIN)); // peso da 2ª nota
$nota3 = (float) trim(fgets(STDIN)); // terceira nota
$peso3 = (float) trim(fgets(STDIN)); // peso da 3ª nota

// TODO: escreva sua solução abaixo.

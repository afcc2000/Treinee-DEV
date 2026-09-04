<?php
/**
 * Exercício 05 — IMC com classificação
 * Microcurso: MC3 — Lógica de programação II (condicionais e laços)
 *
 * Conceitos praticados: if/elseif/else aplicado a um cálculo já conhecido
 *
 * Enunciado:
 * Retome o cálculo do IMC (exercício 18 do MC2) e agora classifique o
 * resultado: abaixo de 18.5 = 'Abaixo do peso'; de 18.5 a 24.9 = 'Peso
 * normal'; de 25 a 29.9 = 'Sobrepeso'; 30 ou mais = 'Obesidade'.
 *
 * Entrada:
 * Duas linhas: peso, altura. Exemplo:
 * 70
 * 1.75
 *
 * Saída esperada:
 * IMC: aproximadamente 22.86 (Peso normal)
 */
$peso = (float) trim(fgets(STDIN)); // peso em kg
$altura = (float) trim(fgets(STDIN)); // altura em metros

// TODO: escreva sua solução abaixo.

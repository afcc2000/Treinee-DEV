<?php
/**
 * Exercício 15 — Bhaskara — parte 2: as raízes
 * Microcurso: MC2 — Lógica de programação I (variáveis, tipos, operadores)
 *
 * Conceitos praticados: sqrt(), fórmula de Bhaskara completa
 *
 * Enunciado:
 * Leia novamente a, b e c de uma equação do 2º grau e calcule as duas raízes
 * x1 e x2, usando a fórmula de Bhaskara. Para este exercício, pode assumir
 * que o delta é sempre maior ou igual a zero (validar isso é assunto do
 * próximo microcurso).
 *
 * Entrada:
 * Três linhas: a, b, c. Exemplo:
 * 1
 * -5
 * 6
 *
 * Saída esperada:
 * x1 = 3
 * x2 = 2
 *
 * Dica:
 * Use sqrt() para a raiz quadrada do delta.
 */
$a = (float) trim(fgets(STDIN)); // coeficiente a
$b = (float) trim(fgets(STDIN)); // coeficiente b
$c = (float) trim(fgets(STDIN)); // coeficiente c

// TODO: escreva sua solução abaixo.

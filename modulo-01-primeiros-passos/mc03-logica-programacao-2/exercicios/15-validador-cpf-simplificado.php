<?php
/**
 * Exercício 15 — Validador de CPF (simplificado)
 * Microcurso: MC3 — Lógica de programação II (condicionais e laços)
 *
 * Conceitos praticados: laço percorrendo string, validação de formato
 *
 * Enunciado:
 * Leia uma string de CPF (só números, sem pontuação) e diga se ela tem o
 * formato válido, ou seja, exatamente 11 caracteres, todos dígitos
 * numéricos. Não é preciso calcular os dígitos verificadores reais do CPF —
 * isso fica como desafio extra opcional (veja a dica).
 *
 * Entrada:
 * Uma linha. Exemplo:
 * 12345678901
 *
 * Saída esperada:
 * Formato válido
 *
 * Dica:
 * Desafio opcional: depois de validar o formato, pesquise o algoritmo real
 * de cálculo dos dois dígitos verificadores do CPF e implemente a validação
 * completa.
 */
$cpf = trim(fgets(STDIN)); // CPF sem pontuação

// TODO: escreva sua solução abaixo.

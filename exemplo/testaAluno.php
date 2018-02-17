<?php
/**
 * Created by PhpStorm.
 * User: 27834372874
 * Date: 15/02/2018
 * Time: 21:13
 */
include 'Aluno.php';
include 'Professor.php';

$aluno1 = new Aluno();
$aluno1->setNome("Maria da Silva Conceição");
$aluno1->setIdade(25);
$aluno1->setSalario(1200.22);

echo $aluno1->getNome();

$p1 = new Professor("João", 2589.88);
    echo $p1->getNome()."ganha".$p1->getSalario();

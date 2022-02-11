<?php

use \src\ValidaCPF;
include __DIR__.'/../src/ValidaCPF.php';

echo ValidaCPF::validate('977.370.111-53') == false?"CPF inválido":"CPF Válido";
echo "<br>";
echo ValidaCPF::validate("00000000000")== false?"CPF inválido":"CPF Válido";
echo "<br>";
echo ValidaCPF::validate("86446422799")== false?"CPF inválido":"CPF Válido";
echo "<br>";
echo ValidaCPF::validate("86446422784")== false?"CPF inválido":"CPF Válido";
echo "<br>";
echo ValidaCPF::validate("864.464.227-84")== false?"CPF inválido":"CPF Válido";
echo "<br>";
echo ValidaCPF::validate("91720489726")== false?"CPF inválido":"CPF Válido";
echo "<br>";
echo ValidaCPF::validate("a1720489726")== false?"CPF inválido":"CPF Válido";

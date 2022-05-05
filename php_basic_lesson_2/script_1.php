<?php

$succes_answer = 988;
$error_answer_1 = 810;
$error_answer_2 = 990;

do {
  $year = readline("В каком году произошло крещение Руси?
  Варианты:
  - $error_answer_1 год
  - $error_answer_2 год
  - $succes_answer год
  ");
} while($year != $succes_answer && $year != $error_answer_1 && $year != $error_answer_2);

if ($year == $succes_answer) {
  echo "Вы ответили верно";
} else {
  echo "Вы ответили неверно";
}
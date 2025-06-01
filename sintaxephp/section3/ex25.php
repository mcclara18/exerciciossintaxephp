<?php
$alunos = [
    ["2023101", "aluno a", 8.5],
    ["2023102", "aluno b", 7.0],
    ["2023103", "aluno c", 9.2],
    ["2023104", "aluno d", 6.8],
    ["2023105", "aluno e", 7.5],
    ["2023106", "aluno f", 8.0],
    ["2023107", "aluno g", 6.2],
    ["2023108", "aluno h", 9.0],
    ["2023109", "aluno i", 5.5],
    ["2023110", "aluno j", 7.8],
];
foreach ($alunos as $aluno) {
    echo "Matrícula: {$aluno[0]}\n";
    echo "Nome: {$aluno[1]}\n";
    echo "Nota PWEB1: {$aluno[2]}\n";
    echo "--------------------------\n";
}
?>

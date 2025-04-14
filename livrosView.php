<?php
// Declara uma função chamada ExibirAlunos que recebe o parametro $alunos.
// Esse parametro é esperado com um array com informações dos alunos.
function exibirLivros($livro){
    // Imprime na tela um titulo h2 e abre uma lista ordenada ul.
    echo "<h2>Lista de Alunos:</h2> <ul>";

    // Inicia o loop foreach que percorre cada item do array $alunos.
    // Cada item é armazenado temporariamente na variavel $aluno.
    foreach ($livro as $livro) {
        // Para cada aluno imprime um item da lista que é um (Li).
        // Exibe o nome do aluno e sua idade, formatados como "Nome - Idade anos".
        echo "<li>{$livro['nome']} - {$livro['vendas']} mil vendas</li>";
    }

    echo "</ul>";
}
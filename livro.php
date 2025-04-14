<?php
//Defina uma classe chamada aluno
class Livro {
    //Criar uma propriedade privada (Encapsulamento) chamada de $alunos
    //essa propriedade é um array que será usado para armazenar dados e os alunos
    //Cada aluno será representado por um array associativo com nome e idade
    private $livros = [
        ['nome' => 'João e Maria', 'vendas' => 16],
        ['nome' => 'Papa leguas', 'vendas' => 18],
        ['nome' => 'Dom casmurro', 'vendas' => 22],
        ['nome' => 'Dalmatas', 'vendas' => 11],
        ['nome' => 'Los Pitufos', 'vendas' => 999999999]
    ];

    // Define um método publico chamado listarAlunos.
    // Este método deverá "retornar" o conteudo do array $alunos
    public function listarLivros()
    {
        return $this->livros;
    }
}
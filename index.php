<?php
    // PHP - Personal Home Page
    // Variáveis
    $nome = 'Erik';
    echo $nome;

    $idade = '22';
    
    // Variável de variável
    $Erik = 'bla bla';
    
    // Concatenador
    echo 'O meu nome é '.$nome;
    echo 'O meu nome é '.$$nome;

    // Comparador de Valores
    if ($nome == 'Erik') {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // >= <= == !=


    // === !==
    if ($idade == 22) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    if ($idade === 22) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    if ($idade !== 22) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    if ($idade != 22) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // Looping
    for($i = 0; $i <= 10; $i++){
        echo $i;
        echo '<hr>'; 
    }

    $i = 0;
    while($i <= 10){
        echo $i;
        echo '<br>';
        $i++;
    }

    // Funções
    primeiroNumero(30);
    echo '<br>';
    printNumero('Erik')
    function printNumero($n){
        echo $n;
    }

    // Classes
    class Pessoa {
        public $nome;
        public $idade;

        public function construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printNOmeEIdade(){
            echo $this->nome;
            echo '<br>';
            echo $this->idade;
        }

    }

    // Objetos

    $pessoa = new Pessoa('Erik', '22');

    $pessoa->printNOmeEIdade();

    $pessoa = new Pessoa('Erik', '21');

    $pessoa->printNOmeEIdade();

    // Array
    $arr = ['Erik','João','Felipe'];

    echo $arr[0]; // Erik

    echo $arr[1]; // João

?>
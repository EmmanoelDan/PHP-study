<?php
    $lista = [
        'nome' => 'Boniek',
        'idade' => 90,
        'atributos' => [
            'forca' => 60,
            'agilidade' => 80,
            'destreza' => 50,
        ],
        'vida' => 1000,
        'mana' => 928
    ];

    echo "Nome: ".$lista['nome']."<br/>";
    echo "Idade: ".$lista['idade']."<br/>";
    echo "Forca: ".$lista['atributos']['forca']."<br/>";
    echo "agilidade: ".$lista['atributos']['agilidade']."<br/>";
    echo "destreza: ".$lista['atributos']['destreza']."<br/>";
    echo "vida: ".$lista['vida']."<br/>";
    echo "mana: ".$lista['mana']."<br/>";


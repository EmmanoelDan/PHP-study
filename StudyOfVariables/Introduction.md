# PHP Estudos

requisitos:
- Servidor: apache/nginx
- BD: Mysql /postgres
- editor de texto: VSCODE

## Como funciona o PHP?

* apache recebe a requisicao
* Manda pro local correto

* chama o PHP para interpretar o codigo PHP
* o PHP manda o resultado para o apache
* o apache junta com o que nao e interpretadvel e manda pro usuario

## Scopo PHP

<?PHP
    echo 'Hello World';
?>

* comando de retorno: echo

## Tipos de Variaveis

<?PHP
    $X = 10; // usa-se cifrao para criar uma variavel
?>

### Number 

Exemplos:

- $numero = 10; // Regras: sem espaço, e caracter especial

Se declara uma variavel qualquer, em formato camel case

- $totalDaSoma


### Decimal

Exemplo:

- $numero = 10,5;

### String 

Exemplo 
- $nome = 'Emmanoel';

### Boolean

Boolean é true ou false

### Exemplos

* $nome = 'Emmanoel';
* $idade = 24;
* $peso = 78,100;
* $Andando = true;
* $Cansado = false;
* $vazio = null;

### Mesclar Variaveis

<?PHP
    $nome = 'Emmanoel';
    $sobrenome = 'Dantas';
    $nomeCompleto = "$nome $sobrenome";
    echo $nomeCompleto;
?>

### concatenacao

utiliza-se ".="

exemplo:

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome; // esta concatenando com meu valor existente na variavel


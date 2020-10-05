Expressões é tudo que represente um valor

Apagar uma variavel unset($variável)

Nós podemos usar o contrutor de linguagem "isset()" para detectar se uma variáve ja foi inicializada


function soma(){ return $a +$b}
function soma2(){global $a, $b; return $a +$b}
function soma3(){return $GLOBALS['a'] +$GLOBALS['b']}

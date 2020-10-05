// Pesquisar utilidades para heredocs
Instalação do php:

php-cli php-mbstring php-curl php-bcmath php-gd



Para a lista completa de opçoes:

php -h

Para obter ajuda sobre o PHP:

man php

Para uma ajuda mais completa sobre os elementos e as funções da linguagem PHP, consulte:
https://php.net

Para obter a versão do PHP

php -v

Para obter lista completa das informações sobre seu ambiente de desenvolvimento PHP:

php -i

Para listar os módulos instalados:
php -m

Para executar o comando no terminal

php -r ''

php <<< '<?php echo "olá, mundo\n"; ?>'


Para iniciar servidor web "embitdo do php"

php -S localhost:8000

Para indicar outra pasta como raiz do projeto:

php -S localhost:8000 -t ~/public_html

Para executar um scrip no servidor:

php -S localhost:8000 ola-mundo.php

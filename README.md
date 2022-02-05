# PHP Examples
- Very Simple PHP examples with docker.
- Date 2022/02/04.

## calcTest.php
- Only realizes a calculation of float numbers.

## hello.php
- Show message of Hello World.

## /alura/
- Exemples from Alura Course (https://cursos.alura.com.br/formacao-desenvolvedor-php)

# Using Docker
- docker build -t myPhpImage .
- docker run --rm -it -v "$PWD:/home/php/test" myPhpImage /bin/bash	

<?php
$arquivo = fopen('cursos.txt','r');
while(!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo($curso);
}
<?php

$JSON = '[{"nome":"Bruno","idade":24,"signo":"g\u00eameos"},{"nome":"Maria do Carmo","idade":54,"signo":"aquario"}]';

//Transforamndo JSON em Array
//true para evitar transformação para objetos
$data = json_decode($JSON, true);

var_dump($data);

?>
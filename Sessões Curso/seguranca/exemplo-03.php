<?php 

//0 - Nenhuma permissão
//1 - Execução
//2 - Gravação
//3 - Executar e Gravar
//4 - Leitura
//5 - Leitura e Execução
//6 - Leitura e Gravação
//7 - Leitura, Execução e Gravação
// XXX - 1X (Dono), 2X (Grupo), 3X (Guest)

$pasta = "arquivos";
$permission = "0775";

if (is_dir($pasta)) mkdir($pasta, $permission);

echo "Diretório criado com sucesso!";

 ?>

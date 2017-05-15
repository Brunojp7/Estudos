<?php 

    header('Content-Type: text/html; charset=utf-8');

    $conn = new mysqli("localhost", "root", "", "dbphp7"); //IP - Login - Senha - Database

    if ($conn->connect_error) {

        echo "Error: " . $conn->connect_error();
    }

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array(); 

while ($row = $result->fetch_assoc()) { //array vazio = false , vai procurar linhas até que ache uma vazia
                                        //MYSQLI_ASSOC não tras o indice
                                        //ou
                                        //fetch_assoc()

    array_push($data, $row); //Coloca as informaçõs em um array

    //var_dump($row);
}

echo json_encode($data); //Transforma o array em JSON e poe na tela.

?>
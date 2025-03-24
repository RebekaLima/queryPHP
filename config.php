<?php

include("database.php");

$query = "SELECT * FROM clientes WHERE idade > 3
ORDER BY idade ASC";
$result = mysqli_query($con, $query);

$data = array();

while($row = mysqli_fetch_array($result)) {
        $id_cliente = $row['id_cliente'];
        $nome = $row['nome'];
        $idade = $row['idade'];
        $endereco = $row['endereco'];
        $telefone = $row['telefone'];

        $return_arr[] = array(
            "id_cliente" => $id_cliente,
            "nome" => $nome,
            "idade" => $idade,
            "endereco" => $endereco,
            "telefone" => $telefone,
        );
}

echo json_encode($return_arr);

exit;

?>
<?php

include("database.php");

$query = "SELECT * FROM tb_produtos";
$result = mysqli_query($con, $query);

$data = array();

while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $categoria = $row['categoria'];
        $descricao = $row['descricao'];
        $genero = $row['genero'];
        $nome = $row['nome'];
        $preco = $row['preco'];

        $return_arr[] = array(
            "id" => $id,
            "categoria" => $categoria,
            "descricao" => $descricao,
            "genero" => $genero,
            "nome" => $nome,
            "preco" => $preco,
        );
}

echo json_encode($return_arr);

exit;

?>
<?php

include("database.php");

$sql = "SELECT * FROM tb_categorias WHERE descricao = 'verduras'";
$result = mysqli_query($conn, $sql);

$data = array();

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
};
} else {
    $data[] = ["message" => "No results found!"];
}

header('Contente-Type: application/json');

echo json_encode($data);

mysqli_close($conn);

?>
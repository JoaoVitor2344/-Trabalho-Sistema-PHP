<?php
    require('conexao.php');

    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos(descricao, marca, estoque, preco) VALUES('".$descricao."', '".$marca."', '".$estoque."', '".$preco."')";
    if(mysqli_query($conn, $sql))
    {
        echo 'Cadatrado';
    }

    mysqli_close($conn);
?>
<?php 
    require('conexao.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = $id";
    if(mysqli_query($conn, $sql))
    {
        echo 'Deletado';
    }

    mysqli_close($conn);
?>
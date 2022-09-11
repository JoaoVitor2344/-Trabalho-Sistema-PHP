<?php 
    require('conexao.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = $id";
    if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Produto Deletado!'); 
        window.location.href='select.php'</script>";
    }

    mysqli_close($conn);
?>
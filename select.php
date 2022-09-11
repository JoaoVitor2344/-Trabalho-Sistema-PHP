<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trabalho-Sistema-PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic.css">
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js
    "></script>
    <script>
        function esconder(off, on) {
            document.getElementById(off).style.display = 'none';
            document.getElementById(on).style.display = 'block';
        }
    </script>
</head>

<body>
    
    <table class="table table-striped table-hover table-bordered" border="1" style="margin-top: 10px;">
        <tr>
            <td>Código</td>
            <td>Descrição</td>
            <td>Marca</td>
            <td>Estoque</td>
            <td>Preço</td>
            <td>Opções</td>
        </tr>
        <?php
        require('conexao.php');
        
        $query = mysqli_query($conn, "SELECT * FROM produtos");
        
        if(mysqli_num_rows($query) > 0)
        {
            while($produto = mysqli_fetch_assoc($query))
            {
                echo '<tr>';
                    echo '<td>'.$produto['id'].'</td>';
                    echo '<td>'.$produto['descricao'].'</td>';
                    echo '<td>'.$produto['marca'].'</td>';
                    echo '<td>'.$produto['estoque'].'</td>';
                    echo '<td>'.$produto['preco'].'</td>';
                    echo '<td><a style="text-decoration: none;" href="delete.php?id='.$produto['id'].'">Excluir</a></td>';
                    echo '</tr>';
                }
            }
            
            mysqli_close($conn);
            ?>
        </table>

        <button class="btn btn-primary" style="margin-left: 10px" onclick="window.location.href='index.html'">Voltar</button>

</body>

</html>
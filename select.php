<table border="1">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Usuário</td>
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
            echo '<td><a href="update.php?id='.$produto['id'].'">Atualizar</a></td>';
            echo '<td><a href="delete.php?id='.$produto['id'].'">Excluir</a></td>';
            echo '</tr>';
        }
    }

    mysqli_close($conn);
?>
</table>
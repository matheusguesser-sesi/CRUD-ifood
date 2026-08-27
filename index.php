<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifood</title>
</head>

<body>
    <h2>Ifood</h2>

    <button type="button" onclick="window.location.href='public/clientes/add_clientes.php'">Cadastrar Cliente</button>
    <button type="button" onclick="window.location.href='public/restaurantes/add_restaurantes.php'">Cadastrar Restaurante</button>
    <button type="button" onclick="window.location.href='public/pedidos/add_pedidos.php'">Cadastrar Pedido</button>


    <br>
    <h2>Lista de Clientes</h2>

    <table>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
        <?php
        include 'infra/conexao.php';
        $sql = "SELECT * FROM clientes";
        $clientes = $conn->query($sql);
        while ($cliente = $clientes->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['telefone']; ?></td>
                <td><?php echo $cliente['endereco']; ?></td>
                <td>
                    <button type="button" onclick="window.location.href='public/clientes/edit_clientes.php?id=<?php echo $cliente['id']; ?>'">Editar</button>
                    <button type="button" onclick="if (confirm('Tem certeza que deseja excluir este cliente?')) { window.location.href='public/clientes/delete_cliente.php?id=<?php echo $cliente['id']; ?>'; }">Excluir</button>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
        
    <h2>Lista de Restaurantes</h2>
    <table>
        <th>ID</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
        <?php
        $sql = "SELECT * FROM restaurantes";
        $restaurantes = $conn->query($sql);
        while ($restaurante = $restaurantes->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $restaurante['id']; ?></td>
                <td><?php echo $restaurante['nome']; ?></td>
                <td><?php echo $restaurante['categoria']; ?></td>
                <td><?php echo $restaurante['telefone']; ?></td>
                <td><?php echo $restaurante['endereco']; ?></td>
                <td>
                    <button type="button" onclick="window.location.href='public/restaurantes/edit_restaurantes.php?id=<?php echo $restaurante['id']; ?>'">Editar</button>
                    <button type="button" onclick="if (confirm('Tem certeza que deseja excluir este restaurante?')) { window.location.href='public/restaurantes/delete_restaurantes.php?id=<?php echo $restaurante['id']; ?>'; }">Excluir</button>
                </td>
            </tr>

        <?php
        }
        ?>
        </table>


        <h2>Lista de Pedidos</h2>
    <table>
        <th>ID</th>
        <th>Cliente</th>
        <th>Restaurante</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Status</th>
        <th>Ações</th>
        <?php
        $sql = "SELECT * FROM restaurantes";
        $restaurantes = $conn->query($sql);
        while ($restaurante = $restaurantes->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $pedidos['id']; ?></td>
                <td><?php echo $pedidos['cliente_id']; ?></td>
                <td><?php echo $pedidos['restaurante_id']; ?></td>
                <td><?php echo $pedidos['valor_pedido']; ?></td>
                <td><?php echo $pedidos['data_pedido']; ?></td>
                <td><?php echo $pedidos['status']; ?></td>
                <td>
                    <button type="button" onclick="window.location.href='public/pedidos/edit_pedidos.php?id=<?php echo $pedidos['id']; ?>'">Editar</button>
                    <button type="button" onclick="if (confirm('Tem certeza que deseja excluir este pedido?')) { window.location.href='public/pedidos/delete_pedidos.php?id=<?php echo $pedidos['id']; ?>'; }">Excluir</button>
                </td>
            </tr>

        <?php
        }
        ?>

        

</body>

</html>
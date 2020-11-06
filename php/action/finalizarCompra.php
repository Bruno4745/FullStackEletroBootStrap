<?php

    require('./include/conexao.php');
    
    if(!EMPTY($_POST['nome']) || !EMPTY($_POST['endereco']) || !EMPTY($_POST['telefone'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $total = $_POST['total'];

        $sql = "INSERT INTO pedidos (nome_cliente, endereco, telefone, nome_produto, valor_unit, quantidade, valor_total) 
        VALUES ('$nome', '$endereco', '$telefone', '$produto', $valor, $quantidade, $total)";
        $result = $conn->query($sql);

        if($result){
            ?>
                <script>
                    alert("Pedido efetuado com sucesso!");
                    window.location.href = "./produtos.php";
                </script>
            <?php
        } else{
            ?>
                <script>
                    alert("Ocorreu um erro!");
                </script>
            <?php
        }
    }
?>
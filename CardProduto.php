<?php

$produto = [
    "nome" => "Teclado Mecânico",
    "categoria" => "Informática",
    "preco" => 299.90,
    "estoque" => 12
];

function criarCardProduto(array $produto)
{
    return "
        <section class='card'>

            <h2>
                {$produto["nome"]}
            </h2>

            <p>
                <strong>Categoria:</strong>

                {$produto["categoria"]}
            </p>

            <p class='preco'>
                <strong>Preço:</strong>

                R$
                " . number_format(
                    $produto["preco"],
                    2,
                    ",",
                    "."
                ) . "
            </p>

            <p>
                <strong>Estoque:</strong>

                {$produto["estoque"]} unidades
            </p>

            <button>Comprar</button>

        </section>
    ";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Cadastro de Produto</title>

    <link rel="stylesheet" href="Card.css">

</head>

<body>

    <header class="cabecalho">
        <h1>Cadastro de Produto</h1>
    </header>

    <main class="container">

        <?php
        echo criarCardProduto($produto);
        ?>

    </main>

</body>

</html>
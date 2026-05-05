<?php 
    //Banco de dados
    $database = [
        [
            "titulo" => "Sonic 3: O Filme",
            "descricao" => " Com o retorno de Sonic, Tails e Knuckles, o filme adapta elementos de Sonic Adventure 2, incluindo a aliança com Dr. Robotnik (Jim Carrey) para enfrentar o ouriço sombrio.",
            "img" => "https://upload.wikimedia.org/wikipedia/pt/8/89/Sonic_The_Hedgehog_3_p%C3%B4ster.png"
        ],
        [
            "titulo" => "Vingadores: Ultimato",
            "descricao" => "Com a ajuda da Capitã Marvel e Homem-Formiga, a equipe remanescente embarca em uma missão de viagem no tempo perigosa para recuperar as Joias do Infinito e restaurar a ordem, enfrentando sacrifícios supremos.",
            "img" => "https://br.web.img3.acsta.net/pictures/19/04/26/17/30/2428965.jpg"
        ],
        [
            "titulo" => "Até o Último Homem",
            "descricao" => "Acompanhe a história de Desmond T. Doss, um médico do exército americano que, durante a Segunda Guerra Mundial, se recusa a pegar em armas. Durante a Batalha de Okinawa ele trabalha na ala médica e salva cerca de 75 homens.",
            "img" => "https://br.web.img3.acsta.net/pictures/16/11/21/15/29/457312.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trabalho de git">
    <!--Link boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>SpoilerFree</title>
    <!--CSS-->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        header, footer {
            background-color: #fff;
        }

        .cardPai {
            display: grid;
            grid-template-columns: 33% 33% 33%;
        }

        .cardPai h5 {
            text-align: center;
        }

        .cardPai p{
            text-align: justify;
            overflow: hidden;
        }

        .cardPai a {
            width: 80%;
        }

        .cardPai .card {
            transition: ease-in-out 0.4s;
        }

        .cardPai .card:hover {
            transform: translateY(-10px);
        }

    </style>
</head>
<body>
    <!--Header-->
    <header class="text-center mb-4">
        <h1 class="h1">SpoilerFree</h1><hr>
    </header>
    <!--Conteudo-->
    <main class="container text-center">
        <h1 class="h1 mb-4">Novidades que chegaram pra você</h1>
        <!--Loop do array "$database"-->
        <div class="cardPai justify-content-center">
            <?php foreach($database as $dados): ?>
                <!--Corpo do card-->
                <div class="card" style="width: 18rem;">
                    <!--imagem do filme-->
                    <img src="<?= $dados['img'] ?>" class="card-img-top" alt="imagen do <?= $dados['titulo'] ?>">
                    <div class="card-body">
                        <!--Titulo do filme-->
                        <h5 class="card-title"><strong><?= $dados['titulo'] ?></strong></h5>
                        <!--Descrição do filme-->
                        <p class="card-text"><?= $dados['descricao'] ?></p>
                        <!--Link do filme-->
                        <a href="#" class="btn btn-primary">Assistir agora</a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </main>
    <!--Script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!--Footer-->
    <footer class="text-center mt-4">
        <hr><p>&reg; Todos os direitos reservados</p>
    </footer>
</body>
</html>
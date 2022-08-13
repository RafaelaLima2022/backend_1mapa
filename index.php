<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Marmitas da dona Rita</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            background: rebeccapurple;
            color: aliceblue;
            background: linear-gradient(#0a7981, #88e4eb);
            height: 17vh;
        }

        footer {
            background: grey;
            background: linear-gradient(#88e4eb, #0a7981);
            position: fixed;
            left: 0px;
            bottom: 0px;
            width: 100%;
            height: 7vh;
        }

        header,
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main {
            height: 100%;
        }

        h1 {
            padding: 20px;
            text-align: left;
            color: grey;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            padding: 10px;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        p {
            padding: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div>
            <img src="./img/logo.jpg" alt="Pizza">
        </div>
    </header>

    <?php
    $marmitas = array(
        array("./img/pizza1.jpg", "Pizzas deliciosas", "Pizza", "Pizza de vários sabores com e sem borda, você vai amar", "Apenas 25,00 reais a pizza grande"),
        array("./img/costela.jpg", "Costela no bafo", "Costela", "A melhor costela no bafo da região", "Apenas 30,00 reais"),
        array("./img/cuscuz.jpg", "Cuscuz reacheado", "Cuscuz", "Você nunca comeu um cuscuz como esse!", "Apenas 15,00 reais"),
        array("./img/farofa.jpg", "Farofa da casa", "Farofa", "Um farofa de dar água na boca", "Apenas 20,00 reais"),
        array("./img/feijoada.jpg", "Feijoada suculenta", "Feijoada", "Deliciosa feijoda feita com carinho", "Apenas 25,00 reais"),
        array("./img/peixada.jpg", "Peixada gostosa", "Peixada", "A melhor peixada fresquinha", "Apenas 30,00 reais")
    );

    $contato = "81-99885-3322 |  av. das esplanadas 555, bairro novo"
    ?>

    <main>
        <div>
            <h1>Confira as marmitas da Dona Rita</h1>
        </div>

        <div class="container">
            <div class="card"><img src=<?php echo $marmitas[0][0] ?> alt=<?php echo $marmitas[0][2] ?> style="width:100%">
                <p><?php echo $marmitas[0][1] ?></p>
                <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-btn">ver mais</button></p>
            </div>
            <div class="card"><img src=<?php echo $marmitas[1][0] ?> alt=<?php echo $marmitas[1][2] ?> style="width:100%">
                <p><?php echo $marmitas[1][1] ?></p>
                <p><button onclick="document.getElementById('id02').style.display='block'" class="w3-btn">ver mais</button></p>
            </div>
            <div class="card"><img src=<?php echo $marmitas[2][0] ?> alt=<?php echo $marmitas[2][2] ?> style="width:100%">
                <p><?php echo $marmitas[2][1] ?></p>
                <p><button onclick="document.getElementById('id03').style.display='block'" class="w3-btn">ver mais</button></p>
            </div>
            <div class="card"><img src=<?php echo $marmitas[3][0] ?> alt=<?php echo $marmitas[3][2] ?> style="width:100%">
                <p><?php echo $marmitas[3][1] ?></p>
                <p><button onclick="document.getElementById('id04').style.display='block'" class="w3-btn">ver mais</button></p>
            </div>
            <div class="card"><img src=<?php echo $marmitas[4][0] ?> alt=<?php echo $marmitas[4][2] ?> style="width:100%">
                <p><?php echo $marmitas[4][1] ?></p>
                <p><button onclick="document.getElementById('id05').style.display='block'" class="w3-btn">ver mais</button></p>
            </div>
            <div class="card"><img src=<?php echo $marmitas[5][0] ?> alt=<?php echo $marmitas[5][2] ?> style="width:100%">
                <p><?php echo $marmitas[5][1] ?></p>
                <p>Preço: <?php echo $marmitas[5][1] ?></p>
                <p><button onclick="document.getElementById('id06').style.display='block'" class="w3-btn">ver mais</button></p>
            </div>
        </div>

        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[0][0] ?> alt=<?php echo $marmitas[0][2] ?> style="width:100%">
                        <p><?php echo $marmitas[0][1] ?></p>
                        <p>Preço: <?php echo $marmitas[0][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="id02" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[1][0] ?> alt=<?php echo $marmitas[1][2] ?> style="width:100%">
                        <p><?php echo $marmitas[1][1] ?></p>
                        <p>Preço: <?php echo $marmitas[1][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="id03" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id03').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[2][0] ?> alt=<?php echo $marmitas[2][2] ?> style="width:100%">
                        <p><?php echo $marmitas[2][1] ?></p>
                        <p>Preço: <?php echo $marmitas[2][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="id04" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id04').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[3][0] ?> alt=<?php echo $marmitas[3][2] ?> style="width:100%">
                        <p><?php echo $marmitas[3][1] ?></p>
                        <p>Preço: <?php echo $marmitas[3][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="id04" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id04').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[3][0] ?> alt=<?php echo $marmitas[3][2] ?> style="width:100%">
                        <p><?php echo $marmitas[3][1] ?></p>
                        <p>Preço: <?php echo $marmitas[3][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="id05" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id05').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[4][0] ?> alt=<?php echo $marmitas[4][2] ?> style="width:100%">
                        <p><?php echo $marmitas[4][1] ?></p>
                        <p>Preço: <?php echo $marmitas[4][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="id06" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container"> <span onclick="document.getElementById('id06').style.display='none'" class="w3-closebtn">&times;</span>
                    <div class="card"><img src=<?php echo $marmitas[5][0] ?> alt=<?php echo $marmitas[5][2] ?> style="width:100%">
                        <p><?php echo $marmitas[5][1] ?></p>
                        <p>Preço: <?php echo $marmitas[5][4] ?></p>
                        <p>Contato: <?php echo $contato ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Rafaela Lima de Oliveira Silva - RA 1909508-5</p>
    </footer>
</body>

</html>
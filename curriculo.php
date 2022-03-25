<?php
    if($_POST){
        $nome = $_POST['nome'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $data = $_POST['nasc'];
        $email = $_POST['email'];
        $contato = $_POST['cont'];
        $exp = $_POST['exp'];
        

        $html='<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!--Bootstrap link-->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                
                <title>Currículo.php</title>
                <link rel="stylesheet" href="./curriculo.css">
            </head>
            <body>
                <div class="container" id="curriculo">
                     <h1> Seu Currículo </h1>
                    <h3>Nome: '.$nome.'</h3> <br>
                    <h3>RG: '.$rg.'</h3> <br>
                    <h3>CPF: '.$cpf.'</h3> <br>
                    <h3>Idade: '.$data.'</h3> <br>
                    <h3>Email: '.$email.'</h3> <br>
                    <h3>Contato: '.$contanto.'</h3> <br>
                    <h3>Experiencia: '.$exp.'</h3> <br>
                </div>    
            </body>
            </html>';
        $site = "$nome.html";
        $arquivo = fopen($site, 'a+');

        fwrite($arquivo, $html);
        fclose($arquivo);
    }
    header('location:'.$site);

    ?>

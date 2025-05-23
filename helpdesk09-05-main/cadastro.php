<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastre-se</title>
    <style>

    .form {
       
        padding-left: 650px;
        padding-top: 150px;
        width: 1300px;
        height: auto;
        
    }

    </style>
</head>

<body>
    <div class="form">

        <form action="processa_cadastro.php" method="POST">
            
            <label for="nome"> Nome </label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
            
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            
            
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    
    </div>




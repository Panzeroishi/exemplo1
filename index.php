<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imersão</title>
</head>
<body>
    <?php
    if(isset($_GET['enviar'])){
        $nome=trim($_GET['nome']);
        $email = trim($_GET['email']);
        $senha = trim($_GET['senha']);
    }
    $nome = $email = $senha = ' ';
    
    ?>

    <form action="#" method ="get">

    <label for="">
        Nome
    </label>
    <input type="text" placeholder="Digite seu Nome" name="nome"<?=$nome?>>
    
    <label for="">Email</label>

    <input type="email" placeholder ="Digite seu email" name="email"    <?=$email?>>

    <label for="">
        Senha
    </label>
    <input type="password" placeholder="Digite sua Senha" name="senha"   <?=$senha?>>
    <br>

    <label for="">Seu Sexo</label>
    <input type="radio">Feminino 
    <input type="radio">Masculino
<br>
    <input type="submit" name="enviar">
    <input type="submit" name="limpar">
    <input type="submit" name="alterar">
    <input type="submit" name="Deletar">
    </form>
    
</body>
</html> 
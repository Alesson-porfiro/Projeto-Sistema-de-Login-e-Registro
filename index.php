<?php     

if(isset($_POST['submit']))
{
    // print_r('nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('genero: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('dataNascimento: ' . $_POST['dataNascimento']);
    // print_r('<br>');
    // print_r('cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('endereco: ' . $_POST['endereco']);
    // print_r('<br>');

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $dataNascimento = $_POST['dataNascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, genero, dataNascimento, cidade, estado, endereco) VALUES('$nome', '$senha', '$email', '$telefone', '$genero', '$dataNascimento', '$cidade', '$estado', '$endereco')");

    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário De Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="dataNascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <?php include_once('config.php');
    
    ?>
</body>

</html>
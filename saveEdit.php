<?php 

    include_once('config.php');

    if(isset($_POST['update']))
    {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $dataNascimento = $_POST['dataNascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',genero='$genero',dataNascimento='$dataNascimento',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistema.php');

?>
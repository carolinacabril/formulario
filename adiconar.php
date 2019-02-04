
<?php
include('conecta.php');

if(!empty($_POST['nome'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = md5($_POST['senha']);

$strsql = "INSERT INTO clientes (nome,email,telefone,senha) values ('$nome', '$email', '$telefone', '$senha');";

//echo $strsql . PHP_EOL;

if (!$banco->query($strsql)) {
	exit($banco->error);
}

$id = $banco->insert_id;

echo "Cliente criado com sucesso!";
    exit;

} else {

    echo "Preencha todos os dados!";
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Ime</title>
</head>
<body>
   <form method="post">
       <h1>Adicionar</h1>
       Nome: <br>
       <input type="text" name="nome"> <br><br>
       Email: <br>
       <input type="email" name="email"> <br><br>
       Telefone: <br>
       <input type="telefone" name="telefone"> <br><br>
       Senha: <br>
       <input type="password" name="senha"> <br><br>
       <input type="submit" name="Enviar"> <br><br>
   </form>
</body>
</html>



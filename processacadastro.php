<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $CPF = $_POST['CPF'];
    $RG = $_POST['RG'];
    $datadenascimento = $_POST['datadenascimento'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $municipio = $_POST['municipio'];
    $telefone = $_POST['telefone'];
    $telefonepararecado = $_POST['telefonepararecado'];
    $nomepararecado = $_POST['nomepararecado'];

$result_cadastro = "INSERT INTO inscricao (nome, CPF, RG, 
datadenascimento, endereco, bairro, municipio, email, telefone, telefonepararecado, nomepararecado) VALUES ('$nome', '$CPF', 
'$RG', '$datadenascimento', '$endereco', '$bairro', '$municipio','$email', '$telefone', '$telefonepararecado', '$nomepararecado')";    

$resultado_cadastro = mysqli_query($conn, $result_cadastro);
$ultimo_id = mysqli_insert_id($conn);

echo "ID: $ultimo_id <br>";


?>

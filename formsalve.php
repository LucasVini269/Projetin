<form method="POST" action="processausuario.php" enctype="multipart/form-data">

<Label> Número da Inscrição: </label>
<input type="text" name="numerodainscricao"><br><br>

<label> Nome:</label>
<input type="text" name="nome"><br><br>

<label>CPF:</label>
<input type="text" name="CPF" size="1" required minlength="5" maxlength="40">

<label>RG:</label>
<input type="text" name="RG" size="1" required minlength="5" maxlength="40">

<label>Data de Nascimento:</label>
<input type="text" name="datadenascimento" size="1" required minlength="5" maxlength="40">

<label>Endereço:</label>
<input type="text" name="endereco" size="1" required minlength="5" maxlength="40">

<label>Bairro:</label>
<input type="text" name="bairro" size="1" required minlength="5" maxlength="40">

<label>Municipio:</label>
<input type="text" name="municipio" size="1" required minlength="5" maxlength="40">

<label>E-mail:</label>
<input type="text" name="email" size="1" required minlength="5" maxlength="40">

<label>Telefone:</label>
<input type="text" name="telefone" size="1" required minlength="5" maxlength="40">

<label>Telefone para Recado:</label>
<input type="text" name="telefonepararecado" size="1" required minlength="5" maxlength="40">

<label>Nome para Recado:</label>
<input type="text" name="nomepararecado" size="1" required minlength="5" maxlength="40">

<input type="submit" value="Salvar">

</form>
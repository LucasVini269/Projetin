<form method="POST" action="processausuario.php" enctype="multipart/form-data">

<Label> Número da Inscrição: </label>
<input type="text" name="número da inscrição"><br><br>

<label> Nome:</label>
<input type="text" name="nome"><br><br>

<label>CPF:</label>
<input type="number" name="CPF" size="1" required minlength="5" maxlength="40">

<label>RG:</label>
<input type="number" name="RG" size="1" required minlength="5" maxlength="40">

<label>Data de Nascimento:</label>
<input type="date" name="Data de Nascimento" size="1" required minlength="5" maxlength="40">

<label>Endereço:</label>
<input type="text" name="Endereço" size="1" required minlength="5" maxlength="40">

<label>Bairro:</label>
<input type="text" name="Bairro" size="1" required minlength="5" maxlength="40">

<label>Municipio:</label>
<input type="text" name="Municipio" size="1" required minlength="5" maxlength="40">

<label>E-mail:</label>
<input type="text" name="email" size="1" required minlength="5" maxlength="40">

<label>Telefone:</label>
<input type="number" name="telefone" size="1" required minlength="5" maxlength="40">

<label>Telefone para Recado:</label>
<input type="number" name="telefone para recado" size="1" required minlength="5" maxlength="40">

<label>Nome para Recado:</label>
<input type="text" name="nome para recado" size="1" required minlength="5" maxlength="40">

<input type="submit" value="Salvar">

</form>
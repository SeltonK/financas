<!DOCTYPE html>
 
<html>
 <head>
<title>oi</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 <script>
function validarSenha(){
  senha1 = document.form.pass.value
  senha2 = document.form.passconfirm.value
 
  if (senha1 != senha2){
  
    alert("Senhas não conferem");
    return false;
  }
}
</script>
 <link rel="stylesheet" type="text/css" href="css/skeleton.css">
 </head>

 <body> 

<form action="salvarcadastro.php" method="post" name="form" onsubmit="return validarSenha()">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="nome">
   </td>
  </tr>
  <tr>
    <td>
      <label for="sexo">Sexo: </label>
        </td>
        <td align="left">
          <input type="radio" name="sex" value="m" checked>Homem
          <input type="radio" name="sex" value="f">Mulher
        </td> 
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="7" maxlength="11">
   </td>
  </tr>
 </table>
</fieldset>

<br />
<!-- DADOS DE LOGIN -->

<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
  <tr>
   <td>
    <label for="login">Login de usuário: </label>
   </td>
   <td align="left">
    <input type="text" name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="pass" id="pass">
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="passconfirm" id="passconfirm">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit" name="submit" value="Enviar" class="button-primary" onClick="validarSenha()">
<input type="reset" value="Limpar" class="button-primary">

</form>

 </body>
 </html>
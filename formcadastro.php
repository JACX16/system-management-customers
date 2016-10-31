<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>formcadastro</title>
</head>
<h2> Cadastro Cliente</h2>
			  
			  <h2> Insira seus dados nos campos abaixo:</h2><br />
			  

			<form name="cadastro" action="cadastrando.php" method="POST" id="">

			<fieldset>
			 <legend>Dados Cliente</legend>
			 <table cellspacing="10">

				<tr>
				   <td>
					<label for="nome">Nome: </label>
					</td>
					<td align="left">
					 <input type="text" name="nome_cliente" size="25" maxlength="255">
					</td>
				</tr>

			  <tr>
				   <td>
				    <label for="email_cliente">E-mail: </label>
				   </td>
				   <td align="left">
				    <input type="text" name="email_cliente" size="25" maxlength="255"> 
				   </td>
			  </tr>

			  <tr>
				   <td>
				    <label for="telefone_cliente">Telefone:</label>
				   </td>
				   <td align="left">
				    <input type="text" name="telefone_cliente" size="13" maxlength="13">
				   </td>
			  </tr>

			<tr>
			   <td>
			    <label for="senha_cliente">Senha: </label>
			   </td>
			   <td align="left">
			    <input type="password" name="senha_cliente" size="13" maxlength="255">
			   </td>
			  </tr>

				<tr>
					   <td>
					    <label for="data_nasc_cliente">Data de Nascimento: </label>
					   </td>
					   <td align="left">
					    <input type="date" name="data_nasc_cliente" size="8" maxlength="8" value="DD MM AAAA"> 
					  
					   </td>
				  </tr>


			 </table>


			 <br />
			<input type="submit" value="Concluir">
			<input type="reset" value="Limpar">
			</fieldset>
			</form>
            <br/>
			<form action="index.php" method="get" > <input type="submit" value=" Voltar "/></form>

<body>
</body>
</html>
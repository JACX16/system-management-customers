
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>editar</title>
</head>

<body>
<?php

		$banco= mysql_connect("localhost","root"," ");
	mysql_select_db("registrador",$banco);
	
	$id=$_GET['id_cliente'];

$sql="SELECT * FROM clientes WHERE id_cliente=$id";
$executa= mysql_query($sql, $banco);


		while($registros=mysql_fetch_array($executa))
		{
		
			$id=$registros["id_cliente"];
			$nome=$registros["nome_cliente"];
			$email=$registros["email_cliente"];
			$telefone=$registros["telefone_cliente"];
			$senha=$registros["senha_cliente"];
			$data_nasc=$registros["data_nasc_cliente"];
			
		}
    ?>
    
    <form name="cadastro" action="salvaralt.php" method="POST">

			<fieldset>
			 <legend>Dados Cliente</legend>
			 <table cellspacing="10">

				<tr>
				   <td>
					<label for="nome">Nome: </label>
					</td>
					<td align="left">
					 <input type="text" name="nome" size="25" maxlength="255" value="<?php echo $nome; ?>">
					</td>
				</tr>

			  <tr>
				   <td>
				    <label for="email">E-mail: </label>
				   </td>
				   <td align="left">
				    <input type="text" name="email" size="25" maxlength="255" value="<?php echo $email; ?>"> 
				   </td>
			  </tr>

			  <tr>
				   <td>
				    <label for="telefone">Telefone:</label>
				   </td>
				   <td align="left">
				    <input type="text" name="telefone" size="13" maxlength="13" value="<?php echo $telefone; ?>">
				   </td>
			  </tr>

			<tr>
			   <td>
			    <label for="senha">Senha: </label>
			   </td>
			   <td align="left">
			    <input type="password" name="senha" size="13" maxlength="255" value="<?php echo $senha; ?>">
			   </td>
			  </tr>

				<tr>
					   <td>
					    <label for="data_nasc">Data de Nascimento: </label>
					   </td>
					   <td align="left">
					    <input type="date" name="data_nasc" size="8" maxlength="8" value="<?php echo $data_nasc; ?>"> 
					  
					   </td>
				  </tr>


			 </table>


			 <br />
			<input type="submit" value=" Salvar">
            
			</fieldset>
			</form>
             <br/>
			<form action="listagem.php" method="get" > <input type="submit" value=" Voltar "/></form>
</body>
</html>
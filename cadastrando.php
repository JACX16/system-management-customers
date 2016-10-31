
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cadastrando</title>
</head>

<body>
        <?php

			$banco= mysql_connect("localhost","root"," ");
			mysql_select_db("registrador",$banco);
				
			
						$nome_cliente= $_POST ['nome_cliente'];
						$email_cliente= $_POST ['email_cliente'];
						$telefone_cliente= $_POST ['telefone_cliente'];
						$senha_cliente= $_POST ['senha_cliente'];
						$data_nasc_cliente= $_POST ['data_nasc_cliente'];
						
				$sql="INSERT INTO clientes ( nome_cliente , email_cliente , telefone_cliente , senha_cliente data_nasc_cliente )
					VALUES ('$nome_cliente' , '$email_cliente' , '$telefone_cliente' , '$senha_cliente' , '$data_nasc_cliente')";
				$executa= mysql_query($sql, $banco);
				
				
			echo "Registro Incluído.";
		?>
        
        <form action="listagem.php" method="get"> <input type="submit" value=" Visualizar / Alterar Clientes "/></form>
		
</body>
</html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>editar</title>
</head>
        <?php

			$banco= mysql_connect("localhost","root"," ");
			mysql_select_db("registrador",$banco);
			
			$id_cliente=$_POST['id_cliente'];
			$nome_cliente= $_POST ['nome_cliente'];
			$email_cliente= $_POST ['email_cliente'];
			$telefone_cliente= $_POST ['telefone_cliente'];
			$senha_cliente= $_POST ['senha_cliente'];
			$data_nasc_cliente= $_POST ['data_nasc_cliente'];
					
			$sql="UPDATE clientes SET nome_cliente='$nome_cliente' , email_cliente='$email_cliente' , telefone_cliente='$telefone_cliente' , senha_cliente='$senha_cliente', data_nasc_cliente=$data_nasc_cliente WHERE id_cliente=$id_cliente";
			$executa= mysql_query($sql, $banco);
			
			
		echo "Registro Atualizado.";
		?>
			<form action="listagem.php" method="get" > <input type="submit" value=" Voltar "/></form>
<body>
</body>
</html>
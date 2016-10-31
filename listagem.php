

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>listagem</title>
</head>

<body>
<h2> Lista de Clientes Cadastrados</h2>
<hr>
<?php

	$banco= mysql_connect("localhost","root"," ");
	mysql_select_db("registrador",$banco);
	
	
$sql="SELECT * FROM clientes ORDER BY id_cliente";
$executa= mysql_query($sql, $banco);

if($registros!=0){
		while($registros=mysql_fetch_array($executa))
		{
		
			$id=$registros["id_cliente"];
			$nome=$registros["nome_cliente"];
			$email=$registros["email_cliente"];
			$telefone=$registros["telefone_cliente"];
			$senha=$registros["senha_cliente"];
			$data_nasc=$registros["data_nasc_cliente"];
			
			echo '<hr>';
			echo $id;
			echo "  ";
			echo $nome;
			echo "  ";
			echo $email;
			echo "  ";
			echo $telefone;
			echo "  ";
			echo $senha;
			echo "  ";
			echo $data_nasc;
			echo "<br><h3> <a href=formalter.php?id=$id> Editar </a></h3>";
			echo "<hr>";
		
		}
}
else{
	echo "<br>";
	echo "Nenhum cliente foi registrado!";
	}
		
?>
 <br/>
			<form action="index.php" method="get" > <input type="submit" value=" Voltar "/></form>
</body>
</html>
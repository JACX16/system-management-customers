var form = document.getElementById("form-cadastro");
 
if (form.addEventListener) {                   
    form.addEventListener("submit", cadastrando);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", cadastrando);
}
 
function validaCadastro(evt){
	var nome = document.getElementById('nome_cliente');
	var email = document.getElementById('email_cliente');
	var telefone = document.getElementById('telefone_cliente');
	var senha = document.getElementById('senha_cliente');
	var data_nasc = document.getElementById('data_nasc_cliente');
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var contErro =0 ;
 
 
	/* Validação do campo nome */
	caixa_nome = document.querySelector('.msg-nome');
	if(nome.value == ""){
		caixa_nome.innerHTML = "Favor preencher o Nome";
		caixa_nome.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nome.style.display = 'none';
	}
 
	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		caixa_email.innerHTML = "Favor preencher o E-mail";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else if(filtro.test(email.value)){
		caixa_email.style.display = 'none';
	}else{
		caixa_email.innerHTML = "Formato do E-mail inválido";
		caixa_email.style.display = 'block';
		contErro += 1;
	}	
 
	/* Validação do campo telefone */
	caixa_telefone = document.querySelector('.msg-telefone');
	if(telefone.value == ""){
		caixa_telefone.innerHTML = "Favor preencher o Telefone";
		caixa_telefone.style.display = 'block';
		contErro += 1;
	}else{
		caixa_telefone.style.display = 'none';
	}
 
	/* Validação do campo senha */
	caixa_senha = document.querySelector('.msg-senha');
	if(senha.value == ""){
		caixa_senha.innerHTML = "Favor preencher a Senha";
		caixa_senha.style.display = 'block';
		contErro += 1;
	}else if(senha.value.length < 6){
		caixa_senha.innerHTML = "Favor preencher a Senha com o mínimo de 6 caracteres";
		caixa_senha.style.display = 'block';
		contErro += 1;
	}else{
		caixa_senha.style.display = 'none';
	}
 
	if(contErro > 0){
		evt.preventDefault();
	}
}// JavaScript Document
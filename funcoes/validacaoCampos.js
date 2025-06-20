function validacao (form){

  
if(form.usuario.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("O Campo usuario deve ser preenchido");
   form.usuario.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if
 
 if(form.senha.value == ""){ // Se o conteudo (value) for igual em Branco
   alert("O Campo senha deve ser preenchido");
   form.senha.focus();
   return false; //So ira mostrar esta mensagem se o campo estiver em Branco
 }// fim do if


}// fim funcao

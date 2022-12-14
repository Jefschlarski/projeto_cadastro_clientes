function _cpf(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') return false;
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
    

}

function capitalizeFirst(str) {
    
    var subst = str.toLowerCase().replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
    return subst; 
    }

function validarnome(nome) {
    
    if (/^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]{3,} ([a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+){2,}$/g.test(nome.value)) {
        document.getElementById('campoName').style.cssText =
        'border: 2px solid green';
        capitalizeFirst(nome.value);
        nome.value = capitalizeFirst(nome.value);
    }else{
        document.getElementById('campoName').style.cssText =
        'border: 2px solid red';;
    }
}

function validarTelefone(tel){
    if (tel.length == 15){
        document.getElementById('campotelefone').style.cssText =
        'border: 2px solid green';
    }else{
        document.getElementById('campotelefone').style.cssText =
        'border: 2px solid red';
    }
}
function validaremail(mail) {
    usuario = mail.value.substring(0, mail.value.indexOf("@"));
    dominio = mail.value.substring(mail.value.indexOf("@")+ 1, mail.value.length);
    
    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        let email = document.getElementById('campoemail');
        email.style.cssText =
        'border: 2px solid green';
       }else{
        let email = document.getElementById('campoemail');
        email.style.cssText =
        'border: 2px solid red';
       }
        
    }
    

function validarCPF(el){
    if( !_cpf(el.value) ){
        let cpf = document.getElementById('campocpf');
        cpf.style.cssText =
        'border: 2px solid red';
         mascaraCPF(el);
         el.value = '';
    }else{
        let cpf = document.getElementById('campocpf');
        cpf.style.cssText =
        'border: 2px solid green';
         mascaraCPF(el);
    }
  }


  function mascaraCPF(cpf){
    const textoAtual = cpf.value;
    if (textoAtual.length ==11) {
        let cpfAjustado; 
        const parte1 = textoAtual.slice(0,3);
        const parte2 = textoAtual.slice(3,6);
        const parte3 = textoAtual.slice(6,9);
        const parte4 = textoAtual.slice(9,11);
        cpfAjustado = `${parte1}.${parte2}.${parte3}-${parte4}`        
        cpf.value = cpfAjustado;
    }
   }
   
  function mascaraDeTelefone(telefone){
    validarTelefone(telefone.value);
    const textoAtual = telefone.value;
    const isCelular = textoAtual.length === 11;
    let textoAjustado; 
       if(isCelular && textoAtual.length ==11) {
        const parte1 = textoAtual.slice(0,2);
        const parte2 = textoAtual.slice(2,7);
        const parte3 = textoAtual.slice(7,11);
        textoAjustado = `(${parte1}) ${parte2}-${parte3}`  
        telefone.value = textoAjustado;      
    } else if(textoAtual.length ==10) {
        const parte1 = textoAtual.slice(0,2);
        const parte2 = textoAtual.slice(2,6);
        const parte3 = textoAtual.slice(6,10);
        textoAjustado = `(${parte1}) ${parte2}-${parte3}` 
        telefone.value = textoAjustado; 
    }
}
function checkradio(valor,genero){
   if(valor == "Inativo"){
    document.getElementById('inativo').checked=true;
   }
   else if(valor == "Ativo"){
    document.getElementById('ativo').checked=true;
   }

   if(genero == "Masculino"){
    document.getElementById('masculino').checked=true;
   }
   else if(genero == "Feminino"){
    document.getElementById('feminino').checked=true;
   }
}

 
   
document.querySelector('input[type=email]').oninvalid = function(){
    
    //remove mensagens de erro antigas
    this.setCustomValidity("");

    //reexecuta a validação
    if(!validity.valid){

        //Se inválido coloca mensagem de erro
        this.setCustomValidity("Email Inválido!");
    }
};
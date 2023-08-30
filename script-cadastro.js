document.getElementById('submit_id').addEventListener('click',function(event){
    var errorMsg = document.getElementById('error_message')
    var senha = document.getElementById('password_id')
    var confirm_senha = document.getElementById('password_confir_id')


    if(senha.value.length < 2){
        errorMsg.textContent = 'A senha precisa ter pelo menos 3 caracteres'
        event.preventDefault();
    }else if(senha.value !== confirm_senha.value){
        errorMsg.textContent = 'As senhas não coincidem'
        event.preventDefault();
        senha.value = ''
        confirm_senha.value =''
    }else{
        errorMsg.textContent = ''
    }
})
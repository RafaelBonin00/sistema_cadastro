document.getElementById('submit_id').addEventListener('click',function(event){
    var senha = document.getElementById('password_id')
    var confir_senha = document.getElementById('password_confir_id')


    if(senha.value != confir_senha.value){
        event.preventDefault()

    }

})


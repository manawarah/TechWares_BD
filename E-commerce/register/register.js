var nome = document.getElementsByName('name')[0],
email = document.getElementsByName('email')[0],
phone = document.getElementsByName('phone')[0],
pass = document.getElementsByName('pass')[0],
cpf = document.getElementsByName('cpf')[0],
cep = document.getElementsByName('cep')[0],
address = document.getElementsByName('address')[0],
rpass = document.getElementsByName('rpass')[0];

function register(){

    if(nome.value.length < 3 || phone.value.length != 11 || cpf.value.length != 14 || cep.value.length != 8 || pass.value != rpass.value){
        if(nome.value.length < 3){

            nome.style.outline = '2px solid red';
            console.log('O nome precisa ter mais de 3 caracteres.');
            document.getElementsByClassName('msg-nome').value = 'Olá';
        }
        if(phone.value.length != 11){

            phone.style.outline = '2px solid red';
            console.log('O número de telefone precisa ter 11 caracteres.');
        }
        if(cpf.value.length != 14){

            cpf.style.outline = '2px solid red';
            console.log('o CPF deve ter 14 caracteres.');
        }
        if(cep.value.length != 8){

            cep.value.length = '2px solid red';
            console.log('O CEP deve ter 8 caracteres.');
        }
        if(pass.value != rpass.value){

            pass.style.outline = '2px solid red';
            rpass.style.outline = '2px solid red';
            console.log('As senhas nao coencidem')
        }
        return false;
    } else {
        return true;
    }
}
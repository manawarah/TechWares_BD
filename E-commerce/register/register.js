var nome = document.getElementsByName('name')[0],
    email = document.getElementsByName('email')[0],
    phone = document.getElementsByName('phone')[0],
    pass = document.getElementsByName('pass')[0],
    cpf = document.getElementsByName('cpf')[0],
    cep = document.getElementsByName('cep')[0],
    address = document.getElementsByName('address')[0],
    rpass = document.getElementsByName('rpass')[0];

// Função para limpar os erros ao corrigir o campo
function clearError(input, messageElement) {
    input.style.outline = '';
    messageElement.textContent = '';
}

function register() {
    let isValid = true;

    // Validação do nome
    if (nome.value.length < 3) {
        nome.style.outline = '2px solid red';
        document.getElementById('msg-nome').textContent = "O nome precisa ter mais de 3 caracteres";
        isValid = false;
    } else {
        clearError(nome, document.getElementById('msg-nome'));
    }

    // Validação do telefone
    if (phone.value.length !== 15) {
        phone.style.outline = '2px solid red';
        document.getElementById('msg-phone').textContent = "O número precisa ter 15 caracteres (formato: (XX) XXXXX-XXXX)";
        isValid = false;
    } else {
        clearError(phone, document.getElementById('msg-phone'));
    }

    // Validação do CPF
    if (cpf.value.length !== 14) {
        cpf.style.outline = '2px solid red';
        document.getElementById('msg-cpf').textContent = "O CPF precisa ter 14 caracteres (formato: XXX.XXX.XXX-XX)";
        isValid = false;
    } else {
        clearError(cpf, document.getElementById('msg-cpf'));
    }

    // Validação do CEP
    if (cep.value.length !== 10) {
        cep.style.outline = '2px solid red';
        document.getElementById('msg-cep').textContent = "O CEP precisa ter 10 caracteres (formato: XX.XXX-XXX)";
        isValid = false;
    } else {
        clearError(cep, document.getElementById('msg-cep'));
    }

    // Validação das senhas
    if (pass.value !== rpass.value) {
        pass.style.outline = '2px solid red';
        rpass.style.outline = '2px solid red';
        document.getElementById('msg-pass').textContent = "As senhas não coincidem";
        isValid = false;
    } else if (pass.value.length < 6) { // Adicionando uma validação extra para o comprimento mínimo da senha
        pass.style.outline = '2px solid red';
        rpass.style.outline = '2px solid red';
        document.getElementById('msg-pass').textContent = "A senha precisa ter no mínimo 6 caracteres";
        isValid = false;
    } else {
        clearError(pass, document.getElementById('msg-pass'));
        clearError(rpass, document.getElementById('msg-pass'));
    }

    return isValid;
}

// Função para formatar o CEP automaticamente enquanto o usuário digita
cep.addEventListener('input', function () {
    var value = cep.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico
    if (value.length <= 2) {
        cep.value = value.replace(/(\d{2})(\d{0,3})/, '$1.$2'); // Formatação após os 2 primeiros números
    } else if (value.length <= 5) {
        cep.value = value.replace(/(\d{2})(\d{3})(\d{0,3})/, '$1.$2-$3'); // Formatação após os 5 primeiros números
    } else {
        cep.value = value.replace(/(\d{2})(\d{3})(\d{3})/, '$1.$2-$3'); // Limita para 8 números no formato XX.XXX-XXX
    }

    // Limita a 10 caracteres, respeitando o formato XX.XXX-XXX
    cep.value = cep.value.slice(0, 10);
});

// Função para formatar o CPF automaticamente enquanto o usuário digita
cpf.addEventListener('input', function () {
    var value = cpf.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico
    if (value.length <= 3) {
        cpf.value = value.replace(/(\d{3})(\d{0,3})/, '$1.$2'); // Adiciona o ponto após os 3 primeiros números
    }
    if (value.length > 3 && value.length <= 6) {
        cpf.value = value.replace(/(\d{3})(\d{3})(\d{0,2})/, '$1.$2.$3'); // Adiciona o ponto após os 6 primeiros números
    }
    if (value.length > 6) {
        cpf.value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{0,2})/, '$1.$2.$3-$4'); // Adiciona o hífen após os 9 números
    }

    cpf.value = cpf.value.slice(0, 14); // Limita a 14 caracteres
});

// Função para formatar o telefone automaticamente enquanto o usuário digita
phone.addEventListener('input', function () {
    var value = phone.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico
    if (value.length <= 2) {
        phone.value = value.replace(/(\d{2})(\d{0,9})/, '($1) $2'); // Adiciona o parêntese após os 2 primeiros números
    } else if (value.length <= 6) {
        phone.value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3'); // Adiciona o hífen após os 6 primeiros números
    } else {
        phone.value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3'); // Limita a 15 caracteres no formato (XX) XXXXX-XXXX
    }

    phone.value = phone.value.slice(0, 15); // Limita a 15 caracteres
});

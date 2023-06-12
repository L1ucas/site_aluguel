function checarSeVazio() {
    let nome = document.getElementById("campo_nome")
    let email = document.getElementById("campo_email")
    let email2 = document.getElementById("campo_email_confirmar")
    let senha = document.getElementById("campo_senha")
    let senha2 = document.getElementById("campo_senha_confirmar")
    let genero = document.getElementById("campo_genero")
    let mensagem = document.getElementById("mensagem")

    if (nome == "" || email2 == "" || email == "" ||
    senha == "" || senha2 == "" || genero == "") {
        mensagem.innerText = "Por favor preencha todos os campos"
    }
    
}
function TelaLogin() {
    return (
      <div className="tela-login-main">
          <div className="tela-login">
              <h1>Tela de Login</h1>
              <div className="campo-usuario campo">
                  <label htmlFor="input-email">Email</label>
                  <input name="input-email" type="email"/>
              </div>
              <div className="campo-senha campo">
                  <label htmlFor="input-senha">Senha</label>
                  <input name="input-senha" type="password"/>
              </div>
              <span><a href="">Esqueceu sua senha?</a></span>
              <button>Próximo</button>
              <span>Não possui uma conta? <a href="">Inscreva-se</a></span>
          </div>
      </div>
    )
}

export default TelaLogin

// Classe ContaBancaria em JavaScript
class ContaBancaria {
    constructor(titular, saldo = 0) {
      this.titular = titular
      this.saldo = Number.parseFloat(saldo)
    }
  
    depositar(valor) {
      valor = Number.parseFloat(valor)
      if (valor <= 0) {
        return `Olá ${this.titular}, não foi possível realizar o depósito. Coloque um valor válido!`
      } else {
        this.saldo += valor
        return `Olá, ${this.titular}, depósito de R$ ${valor.toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })} foi realizado com sucesso. Seu saldo atual é de: R$ ${this.saldo.toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`
      }
    }
  
    sacar(valor) {
      valor = Number.parseFloat(valor)
      if (valor > this.saldo) {
        return `Não há saldo disponível. Seu saldo bancário é de: R$ ${this.saldo.toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`
      } else {
        this.saldo -= valor
        return `Saque no valor de R$ ${valor.toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })} realizado com sucesso! Seu saldo bancário é de: R$ ${this.saldo.toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`
      }
    }
  
    getTitular() {
      return this.titular
    }
  
    getSaldo() {
      return this.saldo
    }
  }
  
  // Variáveis globais
  let conta = null
  
  // Elementos do DOM
  const criarContaForm = document.getElementById("create-account-form")
  const accountOperations = document.getElementById("account-operations")
  const titularInput = document.getElementById("titular")
  const saldoInicialInput = document.getElementById("saldo-inicial")
  const criarContaBtn = document.getElementById("criar-conta")
  const accountHolder = document.getElementById("account-holder")
  const accountBalance = document.getElementById("account-balance")
  const valorInput = document.getElementById("valor")
  const depositarBtn = document.getElementById("depositar")
  const sacarBtn = document.getElementById("sacar")
  const messageDiv = document.getElementById("message")
  const userName = document.getElementById("user-name")
  const balanceDisplay = document.getElementById("balance-display")
  
  // Evento para criar conta
  criarContaBtn.addEventListener("click", () => {
    const titular = titularInput.value.trim()
    const saldoInicial = saldoInicialInput.value
  
    if (!titular) {
      showMessage("Por favor, informe o nome do titular.", "error")
      return
    }
  
    // Criar a conta
    conta = new ContaBancaria(titular, saldoInicial)
  
    // Atualizar a interface
    accountHolder.textContent = conta.getTitular()
    accountBalance.textContent = conta
      .getSaldo()
      .toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })
  
    // Atualizar a visualização do app
    userName.textContent = conta.getTitular()
    balanceDisplay.textContent = `R$${conta.getSaldo().toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`
  
    // Mostrar operações e esconder formulário de criação
    criarContaForm.style.display = "none"
    accountOperations.style.display = "block"
  
    showMessage(`Conta criada com sucesso para ${titular}!`, "success")
  })
  
  // Evento para depositar
  depositarBtn.addEventListener("click", () => {
    const valor = valorInput.value
  
    if (!valor || isNaN(valor) || Number.parseFloat(valor) <= 0) {
      showMessage("Por favor, informe um valor válido para depósito.", "error")
      return
    }
  
    const mensagem = conta.depositar(valor)
    accountBalance.textContent = conta
      .getSaldo()
      .toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })
    balanceDisplay.textContent = `R$${conta.getSaldo().toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`
  
    showMessage(mensagem, "success")
    valorInput.value = ""
  })
  
  // Evento para sacar
  sacarBtn.addEventListener("click", () => {
    const valor = valorInput.value
  
    if (!valor || isNaN(valor) || Number.parseFloat(valor) <= 0) {
      showMessage("Por favor, informe um valor válido para saque.", "error")
      return
    }
  
    const mensagem = conta.sacar(valor)
    const isSuccess = !mensagem.includes("Não há saldo disponível")
  
    accountBalance.textContent = conta
      .getSaldo()
      .toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })
    balanceDisplay.textContent = `R$${conta.getSaldo().toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`
  
    showMessage(mensagem, isSuccess ? "success" : "error")
    valorInput.value = ""
  })
  
  // Função para exibir mensagens
  function showMessage(text, type) {
    messageDiv.textContent = text
    messageDiv.className = "message"
    messageDiv.classList.add(type)
  
    // Limpar a mensagem após 5 segundos
    setTimeout(() => {
      messageDiv.textContent = ""
      messageDiv.className = "message"
    }, 5000)
  }
  
document.getElementById('createForm').addEventListener('submit', (ev) => {

  // Inputs do formulário para registrar um usuário
  const nomeInput = document.getElementById('nameInput')
  const emailInput = document.getElementById('emailInput')
  const functionInput = document.getElementById('functionInput')

  // Expressões regulares para validar o nome, email e função
  const nomeRegex = /^[a-zA-ZÀ-ÿ ]+$/; // Permite apenas letras e espaços
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Verifica se o email tem um formato válido
  const functionRegex = /^[a-zA-Z\s]+$/; // Permite apenas letras e espaços

  // Verifica se os dados são compatíveis com a validação por expressão regular
  if(!nomeRegex.test(nomeInput.value)) {
    ev.preventDefault()
    nomeInput.classList.add('is-invalid')
  } else {
    nomeInput.classList.remove('is-invalid')
  }

  // Verifica se os dados são compatíveis com a validação por expressão regular
  if(!emailRegex.test(emailInput.value)) {
    ev.preventDefault()
    emailInput.classList.add('is-invalid')
  } else {
    emailInput.classList.remove('is-invalid')
  }
  
  // Verifica se os dados são compatíveis com a validação por expressão regular
  if(!functionRegex.test(functionInput.value)) {
    ev.preventDefault()
    functionInput.classList.add('is-invalid')
  } else {
    functionInput.classList.remove('is-invalid')
  }
})

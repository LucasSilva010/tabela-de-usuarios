
document.getElementById('updateForm').addEventListener('submit', (ev) => {

  const nomeInput = document.getElementById('nameInput')
  const emailInput = document.getElementById('emailInput')
  const functionInput = document.getElementById('functionInput')

  // Expressões regulares para validar o nome, email e função
  const nomeRegex = /^[a-zA-Z\s]+$/; // Permite apenas letras e espaços
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Verifica se o email tem um formato válido
  const functionRegex = /^[a-zA-Z\s]+$/; // Permite apenas letras e espaços

  if(!nomeRegex.test(nomeInput.value)) {
    ev.preventDefault()
    nomeInput.classList.add('is-invalid')
  } else {
    nomeInput.classList.remove('is-invalid')
  }

  if(!emailRegex.test(emailInput.value)) {
    ev.preventDefault()
    emailInput.classList.add('is-invalid')
  } else {
    emailInput.classList.remove('is-invalid')
  }

  if(!functionRegex.test(functionInput.value)) {
    ev.preventDefault()
    functionInput.classList.add('is-invalid')
  } else {
    functionInput.classList.remove('is-invalid')
  }
})
document.getElementById('updateForm').addEventListener('submit', (ev) => {

  console.log('Veio até aqui')
  // Inputs do formulário para editar um usuário
  const nomeInputEdit = document.getElementById('nameInputEdit')
  const emailInputEdit = document.getElementById('emailInputEdit')
  const functionInputEdit = document.getElementById('functionInputEdit')


  // Expressões regulares para validar o nome, email e função
  const nomeRegex = /^[a-zA-ZÀ-ÿ ]+$/; // Permite apenas letras e espaços
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Verifica se o email tem um formato válido
  const functionRegex = /^[a-zA-Z\s]+$/; // Permite apenas letras e espaços
  
  // Verifica se os dados são compatíveis com a validação por expressão regular
  if(!nomeRegex.test(nomeInputEdit.value)) {
    ev.preventDefault()
    nomeInputEdit.classList.add('is-invalid')
  } else {
    nomeInputEdit.classList.remove('is-invalid')
  }

  // Verifica se os dados são compatíveis com a validação por expressão regular
  if(!emailRegex.test(emailInputEdit.value)) {
    ev.preventDefault()
    emailInputEdit.classList.add('is-invalid')
  } else {
    emailInputEdit.classList.remove('is-invalid')
  }

  // Verifica se os dados são compatíveis com a validação por expressão regular
  if(!functionRegex.test(functionInputEdit.value)) {
    ev.preventDefault()
    functionInputEdit.classList.add('is-invalid')
  } else {
    functionInputEdit.classList.remove('is-invalid')
  }
})
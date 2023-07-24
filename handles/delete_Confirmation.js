// Seleciona as ancoras com a classe "confirmation"
const confirmation = document.querySelectorAll('a.confirmation')

// Percorre estes items e adiciona um evento de click para cada um deles e define uma função para este evento.
confirmation.forEach(element => {
  element.addEventListener('click', confirmExclusion)
})

// Função para verificar se o usuário dejesa realmente excluir um registro.
function confirmExclusion(ev) {
  ev.preventDefault()
  const deveExcluir= confirm('Você deseja realmente excluir este usuário?')

  if(!deveExcluir) {
    window.location.href = '../views/users.php';
  } else {
    const deleteURL = this.getAttribute('href') + '&confirm=true'
    console.log(deleteURL)
    window.location.href = deleteURL
  }
  return false
}
const confirmation = document.querySelectorAll('a.confirmation')

confirmation.forEach(element => {
  element.addEventListener('click', confirmExclusion)
})

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
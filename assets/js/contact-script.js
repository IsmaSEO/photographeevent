      // FORMULAIRE DE CONTACT


      let modal = document.getElementById('myModal')

      if (modal) {
        let btn = document.querySelectorAll('.modal-js')
      
        btn.forEach(function(item) {
          item.addEventListener('click', () => {
            modal.style.display = 'block'
            let input = document.querySelector('#wpforms-61-field_3')
            let referenceText = document.querySelector('#reference').textContent
            input.value = referenceText
          })
        })
      }
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none'
    }
}
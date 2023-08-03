(function($) {

// intégration du bouton contact dans le menu principal

// Sélectionner le bouton et la div
var btn = document.getElementById("myBtn")
var menuContainer = document.querySelector(".navbar")

// Déplacer le bouton dans la div
menuContainer.appendChild(btn)


        // MENU BURGER

//   toggleMenu()

// récupérez le bouton du menu hamburger et la liste des liens
const menuBtn = document.querySelector('.menu-toggle')
const menu = document.querySelector('.open_nav')

// quand l'utilisateur clique sur le bouton, la liste des liens s'ouvre ou se ferme
menuBtn.addEventListener('click', function() {
  menu.classList.toggle('open')
  menuBtn.classList.toggle('open-nav')
})


// fermeture du menu burger

function toggleMenu () {  
    const navbar = document.querySelector('.main-navigation')
    const burger = document.querySelector('.menu-toggle')
    
    burger.addEventListener('click', () => {    
      navbar.classList.toggle('closing')
    })
  }
  toggleMenu()


// single-photo : slide au hover des flèches 

const slide = document.querySelector(".lightbox-image")
const previousSlide = document.querySelector(".lightbox-prev")
const nextSlide = document.querySelector("lightbox-next")

// Récupérer les éléments HTML pour ajouter un événement au survol
let flecheGauche = document.querySelector('.fleche_gauche')
let flecheDroite = document.querySelector('.fleche_droite')
let previousImage = document.querySelector('.prev-photo')
let nextImage = document.querySelector('.next-photo')

if (nextImage && previousImage) {
  nextImage.style.opacity = 0
  previousImage.style.opacity = 0
} 

// Ajouter un événement au survol des éléments HTML
navigationPhotos(flecheGauche, previousImage)
navigationPhotos(flecheDroite, nextImage)

function navigationPhotos(fleche, image) {
  if (fleche) {
    fleche.addEventListener('mouseover', function() {
      image.style.opacity = '1'
    })
    fleche.addEventListener('mouseout', function() {
      image.style.opacity = '0'
    })
  }
}


  // pagination dans template-home
  let chargerPlus = document.getElementById('charger-plus')


  let currentPage = 1;
  $('#charger-plus').on('click', function() {
    currentPage++; // Do currentPage + 1, because we want to load the next page
  
    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'weichie_load_more',
        paged: currentPage,
      },
      success: function (res) {
        $('.publication-list').append(res);
      }
    });
  });
})(jQuery);


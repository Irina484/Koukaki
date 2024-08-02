

  


  // l’effet d’apparition des titres des sections//
  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', revealOnScroll);
     function revealOnScroll() {
         var reveals = document.querySelectorAll('.titre');
         for (var i = 0; i < reveals.length; i++) {
             var windowHeight = window.innerHeight;
             var revealTop = reveals[i].getBoundingClientRect().top;
             var revealPoint = 300; 
            if (revealTop < windowHeight - revealPoint) {
                 reveals[i].classList.add('visible');
            }
         }
    }
     revealOnScroll(); // pour activer les éléments déjà visibles lors du chargement initial
   });

   

  // mettre en place la video dans le hero header //
  document.addEventListener('DOMContentLoaded', function() {
    var banner = document.querySelector('.banner');

    // ajouter la vidéo si l'écran est suffisamment large
    if (window.innerWidth > 768) {
        var video = document.createElement('video');

        video.autoplay = true;
        video.muted = true;
        video.loop = true;

        var source = document.createElement('source');
        var imagePath = theme.theme_directory + '/assets/video/video.mp4';
        source.src = imagePath;
        source.type = 'video/mp4';

        video.appendChild(source);
        banner.insertBefore(video, banner.firstChild); // Insérer la vidéo comme premier enfant de .banner
    } 
  
    
    
    //  effet de parallaxe entre le titre et la vidéo et l'effet de flottement de titre//

    let parallaxContent = document.querySelector('.titre-flottant');
    let title = document.getElementById('logobanner');
    const parallaxSpeed = 0.3;
    const initialFontSize = 24;
    
    
    window.addEventListener('scroll', function() {
        let scrollPosition = window.scrollY;
    
    // application de l'effet parallaxe
        parallaxContent.style.transform = 'translateY(' + scrollPosition * parallaxSpeed + 'px)';
    
        let fontSize = initialFontSize - scrollPosition * 0.02;
        parallaxContent.style.fontSize = fontSize + 'px';
    
        title.style.marginTop = scrollPosition / 2 + "px";
    });
  });

  // carrousel des personnages //

  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 60,
    speed: 1000,
    autoplay: {
        delay: 250,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
  })

    // les nuages //
    
    window.addEventListener('scroll', function() {
        var scrollPosition = window.scrollY;
        var cloud1 = document.querySelector('.cloud1');
        var cloud2 = document.querySelector('.cloud2');
        var Height = window.innerHeight;
        var Top = cloud1.getBoundingClientRect().top;
        var Point = 300;
        if (Top < Height - Point) {
          
            cloud1.style.transform = 'translateX(-' + scrollPosition * 0.3/3 + 'px)';
            cloud2.style.transform = 'translateX(-' + scrollPosition * 0.3/3 + 'px)';
        } else {
            cloud1.style.transform = 'translateX(' + 0 + 'px)';
            cloud2.style.transform = 'translateX(' + 0 + 'px)';
        }
    });
      

// mettre en place le script pour le menu burger //
function visibilMenu() {
    const menu = document.querySelector('.menu.fullscreen');
    const burger = document.querySelector('.burger');
    const menuImage = document.querySelector('.hibiscus_footer');
    const menuImage1 = document.querySelector('.random_flower');
    const menuImage2 = document.querySelector('.catgris');
    // Basculer l'état du menu et l'icône du burger
    if (menu.style.left === '0px') {
        menu.style.left = '-100%'; // Cacher menu
        burger.classList.remove('open');
        menuImage.style.display = 'none'; 
        menuImage1.style.display = 'none'; 
        menuImage2.style.display = 'none';
    } else {
        menu.style.left = '0px'; // Afficher menu
        burger.classList.add('open');
        menuImage.style.display = 'block';
        menuImage1.style.display = 'block'; 
        menuImage2.style.display = 'block';
    }
    
}

// ajoutez un écouteur d'événements au burger pour activer la fonction toggleMenu
document.querySelector('.burger').addEventListener('click', visibilMenu);



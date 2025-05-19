import './bootstrap';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

gsap.registerPlugin(ScrollTrigger);

console.log("GSAP is loaded:", gsap);

// Navbar
  const menuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const iconOpen = document.getElementById("icon-open");
  const iconClose = document.getElementById("icon-close");

  menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    iconOpen.classList.toggle("hidden");
    iconClose.classList.toggle("hidden");
  });



// Kode animasi lo yang tadinya di blade
document.addEventListener('DOMContentLoaded', function() {
    const rowAtas = document.querySelector('.row-atas');
    const rowBawah = document.querySelector('.row-bawah');
    const cardWidth = 256;

    function animateLeft() {
        gsap.to(rowAtas, {
            x: -cardWidth,
            duration: 3.3,
            ease: "power1.inOut",
            onComplete: () => {
                const firstCard = rowAtas.children[0];
                rowAtas.appendChild(firstCard);
                gsap.set(rowAtas, { x: 0 });
                animateLeft();
            }
        });
    }

    function animateRight() {
        gsap.to(rowBawah, {
            x: cardWidth,
            duration: 3.3,
            ease: "power1.inOut",
            onComplete: () => {
                const lastCard = rowBawah.children[rowBawah.children.length - 1];
                rowBawah.insertBefore(lastCard, rowBawah.firstChild);
                gsap.set(rowBawah, { x: 0 });
                animateRight();
            }
        });
    }

    if (rowAtas && rowBawah) {
        animateLeft();
        animateRight();
    }
});


// Animate cards satu per satu pas scroll
gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray(".card");

const tl = gsap.timeline({
  scrollTrigger: {
    trigger: "#our-services", 
    start: "top top",   // biar naik lebih awal
    end: "+=1200",
    scrub: 2,
    pin: true,
    markers: false,
  }
});

cards.slice().reverse().forEach((card, index) => {
  tl.to(card, {
    y: -150 - index * 30,
    opacity: 0,
    duration: 0.6,
    ease: "power2.out"
  }, "+=0.2");
});


// logo jalan
document.addEventListener('DOMContentLoaded', () => {
  const infiniteScrollContainers = document.querySelectorAll('.animate-infinite-scroll');

  infiniteScrollContainers.forEach(container => {
    const inner = container.children[0];
    const duplicated = inner.cloneNode(true);
    container.appendChild(duplicated);

    let translateX = 0;
    let animationSpeed = 0.3; // Coba kecepatan lebih lambat

    function animate() {
      translateX -= animationSpeed;
      container.style.transform = `translateX(${translateX}px)`;

      if (Math.abs(translateX) > inner.offsetWidth) {
        translateX = 0;
      }

      requestAnimationFrame(animate);
    }

    animate();
  });
});

// swiper mobile
  document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth < 768) {
      new Swiper(".mySwiper", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
      });
    }
  });
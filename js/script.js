searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
  searchForm.classList.toggle('active');
}


window.onscroll = () => {

  searchForm.classList.remove('active');

  if (window.scrollY > 80) {
    document.querySelector('.header .header-2').classList.add('active');
  } else {
    document.querySelector('.header .header-2').classList.remove('active');
  }

}

window.onload = () => {

  if (window.scrollY > 80) {
    document.querySelector('.header .header-2').classList.add('active');
  } else {
    document.querySelector('.header .header-2').classList.remove('active');
  }

  fadeOut();

}


var swiper = new Swiper(".books-slider", {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});



let section_counter = document.querySelector('#section_counter');
let counters = document.querySelectorAll('.counter-item .counter');

// Scroll Animation

let CounterObserver = new IntersectionObserver(
  (entries, observer) => {
    let [entry] = entries;
    if (!entry.isIntersecting) return;

    let speed = 200;
    counters.forEach((counter, index) => {
      function UpdateCounter() {
        const targetNumber = +counter.dataset.target;
        const initialNumber = +counter.innerText;
        const incPerCount = targetNumber / speed;
        if (initialNumber < targetNumber) {
          counter.innerText = Math.ceil(initialNumber + incPerCount);
          setTimeout(UpdateCounter, 20);
        }
        else {
          counter.innerText = targetNumber;
        }
      }
      UpdateCounter();

      if (counter.parentElement.style.animation) {
        counter.parentElement.style.animation = '';
      } else {
        counter.parentElement.style.animation = `slide-up 0.3s ease forwards ${index / counters.length + 0.5
          }s`;
      }
    });
    observer.unobserve(section_counter);
  },
  {
    root: null,
    threshold: window.innerWidth > 768 ? 0.4 : 0.3,
  }
);

CounterObserver.observe(section_counter);
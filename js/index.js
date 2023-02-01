var swiper = new Swiper(".mySwiper", {
  autoplay: true,
  Delay: 2000,
  speed: 2000,
  items: 1,
  dots: false,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var typed = new Typed(".auto-type", {
  strings: ["Blogger", "Programmer", "Designer"],
  autoplay: true,
  typeSpeed: 200,
  backSpeed: 250,
  loop: true,
  delay: 5000,
});

window.addEventListener("scroll", function () {
  var scroll = document.querySelector(".topBtn");
  scroll.classList.toggle("active", window.scrollY > 500);
});
function scrolltotop() {
  window.scrollTo({
    top: 0,
  });
}

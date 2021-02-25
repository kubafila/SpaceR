const image = document.querySelector(".hero__image");
const button = document.querySelector(".hero__link");
const clouds = document.querySelector('#clouds')
const vehicles = document.querySelector('.vehicles')
const cards = document.querySelectorAll(".card")



document.addEventListener("DOMContentLoaded", () => {

  button.addEventListener("click", () => {
    image.classList.add("hero__image--liftoff");

    const scroll = () => {
      vehicles.scrollIntoView();
    image.classList.remove("hero__image--liftoff");

      clouds.removeEventListener('animationend', scroll)
    }

    clouds.addEventListener('animationend', scroll)
    
  })

  cards.forEach(card =>{
    card.addEventListener("click", ()=>{
      card.classList.toggle("card--filpped")
    })
  })
})

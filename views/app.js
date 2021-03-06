
// HEADER + HOME MENU RESPONSIVE
const navSlide = () => {

    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',() => {
        //La Nav bascule en mode burger en fonction du Viewport
        nav.classList.toggle('nav-active');
        //Animation des liens, apparaissent en décalage
        navLinks.forEach((link, index)=> {
            if(link.style.animation) {
                link.style.animation = ''
            }else {
                link.style.animation = 'navLinkFade 0.5s ease fowards ${index / 7 + 1.5}s';
            }

        });
    });
}

navSlide();




// HOME : ANIMATION SCROLLING
//GSAP https://cdnjs.com/libraries/gsap
new fullpage('#fullpage', {
    autoScrolling: true,
    navigation: true,
    onLeave: (origin,destination,direction) =>{
        const section = destination.item
        const title = section.querySelector('h1');
        const tl = new TimelineMax({delay: 0.5});
        tl.fromTo(title,0.5, {y: '50', opacity: 0}, {y:0, opacity:1})

        if (destination.index === 1){
            const pic = document.querySelectorAll(".pic")
            const description = document.querySelector(".description")
            tl.fromTo(pic,0.7, { x: "100%"}, { x: "-35%"})
                .fromTo(description, 0.5,  {y: "50", opacity: 0 }, { y:0, opacity:1 })
                .fromTo(pic[0], 1, {opacity:1}, {opacity: 1})
                .fromTo(pic[1], 1, {opacity:0}, {opacity: 1})
                .fromTo(pic[2], 1, {opacity:0}, {opacity: 1})
                .fromTo(pic[3], 1, {opacity:0}, {opacity: 1})
                .fromTo(pic[4], 1, {opacity:0}, {opacity: 1})

        }
        /*if (destination.index === 2){
            const picsolo = document.querySelectorAll(".picsolo")
            const description3 = document.querySelector(".description3")
            tl.fromTo(picsolo,0.7, { x: "100%"}, { x: "-35%"})
                .fromTo(description3, 0.5,  {y: "50", opacity: 0 }, { y:0, opacity:1 })
                .fromTo(picsolo[0], 1, {opacity:1}, {opacity: 1})
                .fromTo(picsolo[1], 1, {opacity:0}, {opacity: 1})
                .fromTo(picsolo[2], 1, {opacity:0}, {opacity: 1})

        }

        if (destination.index === 3){
            const picart = document.querySelectorAll(".picart")
            const description4 = document.querySelector(".description4")
            tl.fromTo(picart,0.7, { x: "100%"}, { x: "-35%"})
                .fromTo(description4, 0.5,  {y: "50", opacity: 0 }, { y:0, opacity:1 })
                .fromTo(picart[0], 1, {opacity:1}, {opacity: 1})
                .fromTo(picart[1], 1, {opacity:0}, {opacity: 1})
                .fromTo(picart[2], 1, {opacity:0}, {opacity: 1})
                .fromTo(picart[3], 1, {opacity:0}, {opacity: 1})

        }*/


    }

})




// ANIMATION SOURIS
let mouseCursor = document.querySelector(".cursor");
let navLinks = document.querySelectorAll(".nav-links li")

window.addEventListener('mousemove', cursor);

function cursor(e){
  mouseCursor.style.top = e.pageY + 'px';
  mouseCursor.style.left = e.pageX + 'px';
}

navLinks.forEach(link => {
   link.addEventListener("mouseleave", () => {
        mouseCursor.classList.remove("link-grow");
        link.classList.remove('hovered-link')
    });
    link.addEventListener("mouseover", () => {
        mouseCursor.classList.add("link-grow");
        link.classList.add('hovered-link');
    });
});

const tl = gsap.timeline({defaults: {ease: "power1.out"}});

tl.to('.text', {y: "0%", duration: 1, tagger:0.25});
tl.to('.slider', {y: "-100%", duration:1.5, delay: 0.5});
tl.to('.intro', {y: "-100%", duration: 1}, "-=1");
tl.fromTo('.big-text', {opacity: 0}, {opacity: 1, duration: 1}, '-=1');

// ERROR ALERT FORM - EMPTY INPUTS
var email = document.querySelector('input.exemple');
    email.oninvalid = function(e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            if (e.target.value.length == 0) {
                e.target.setCustomValidity("Ce champ est obligatoire");
        } else {
            e.target.setCustomValidity("Entrez une adresse valide. Exemple : contact@nom.com");
        }
    }
};



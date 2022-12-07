function show(){
    document.querySelector('.hamburger').classList.toggle('open')
    document.querySelector('.navigation').classList.toggle('active')
}

// Mouse deplacement
const cursor = document.querySelector('.mouse');
document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: "+(e.pageY )+"px; left: "+(e.pageX )+"px;")
})


let imageItems = [...document.querySelectorAll('.img-wrap')];
let titles = [...document.querySelectorAll('h2')]
let sections = [];

let options = {
    rootMargin: '0px',
    threshold: .2
  }


let setItemActive = (entries, observer) => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('active');
        }
       
    })
}

let observer = new IntersectionObserver(setItemActive, options);
  
imageItems.forEach((item,idx) => {
    item.children[0].style.backgroundImage = `url(./images/${idx+1}.jpeg)`
    idx % 2 == 0 ? item.style.left = '55%' : item.style.left = '5%'
    observer.observe(item)
})

titles.forEach((title, idx) => {
    idx % 2 == 0 ? title.style.left = '45%' : title.style.left = '35%';
    observer.observe(title)
})

class Section{
    constructor(element, idx){
        this.idx = idx
        this.element = element
        this.observer = new IntersectionObserver(entries => {
            entries.forEach(entry => this.isVisible = entry.isIntersecting);
        });
        this.observer.observe(this.element);

    }

    animateText(){
        let pos = (
                    window.scrollY - (window.innerHeight * this.idx)) * 0.55 < 0 
                    ? 0
                    : (window.scrollY - (window.innerHeight * this.idx)
                    ) * 0.55 
        this.element.children[0].style.transform = `translateY(-${pos}px)`
    }
}

[...document.querySelectorAll('section')].forEach((section, idx) => {
    let newSection = new Section(section, idx);
    sections.push(newSection);

})

function animate(){
    sections.forEach(section => {
        section.animateText()
    })
    requestAnimationFrame(animate)
}

animate()









// Presentation animation
document.addEventListener("DOMContentLoaded", function () {
    const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.4
};
// IMAGE ANIMATION
let revealCallback = (entries) => {
    entries.forEach((entry) => {
        let container = entry.target;
        if (entry.isIntersecting) {
            console.log(container);
            container.classList.add("animating");
            return;
        }
        if (entry.boundingClientRect.top > 0) {
            container.classList.remove("animating");
        }
    });
};
let revealObserver = new IntersectionObserver(revealCallback, options);
document.querySelectorAll(".reveal").forEach((reveal) => {
    revealObserver.observe(reveal);
});})



let urlcourante = document.location.href;
const lg1 = document.querySelector("#en");
const lg2 = document.querySelector("#fr");
if(urlcourante === "http://localhost:8888/pf/?p=fr"){
    function fun() {
        alert('Votre mail à bien été envoyé, merci pour votre demande !');
    }
}
else{
    function fun() {
        alert('Your email has been sent, thank you for your request !');
    }
}



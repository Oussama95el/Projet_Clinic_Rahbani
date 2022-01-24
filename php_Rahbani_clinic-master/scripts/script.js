const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click',function(){
    this.classList.toggle('is-active');
    const menu = document.querySelector('body > nav > div > ul');
    menu.classList.toggle('active');
});

window.onresize = () =>{
if (window.innerWidth >= 768){
    hamburger.classList.remove('is-active');
    const menu = document.querySelector('body > nav > div > ul');
    menu.classList.remove('active');
}}

const card = document.querySelectorAll('body > section.section-1 > div');
const readMore = document.querySelectorAll('body > section.section-1 > div > div.arrow-container > p');

readMore.forEach(element => {
        element.style.display = 'none';
        element.style.cursor = 'pointer';
});

card.forEach(element => {
    element.addEventListener("mouseenter", function() {
        element.children[3].style.transform = 'translateX(5%)';
        element.children[3].children[0].style.display = 'block';
        element.children[3].children[1].style.marginLeft = '-25%';

    });
});

card.forEach(element => {
    element.addEventListener("mouseleave", function() {
        element.children[3].style.transform = 'none';
        element.children[3].children[0].style.display = 'none';
        element.children[3].children[1].style.marginLeft = '5%';
    });
});
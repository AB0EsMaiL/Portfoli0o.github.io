const header =document.querySelector("header");
window.addEventListener("scroll",function () {
    header.classList.toggle("sticky",this.window.scrollY>0)
});
let menu=document.querySelector("#menu-icon");
let nav=document.querySelector(".nav");
menu.addEventListener("click",function(){
    menu.classList.toggle('bx-x');
    nav.classList.toggle('active');
})
window.onscroll=function(){
    menu.classList.remove('bx-x');
    nav.classList.remove('active');

};
const sr = ScrollReveal({
    distance: '45px',
    duration: 2700,
    reset:true
})
sr.reveal('.tx-home',{delay:350, origin:'left'});
sr.reveal('.home-img',{delay:350, origin:'right'});
sr.reveal('.item,.about,.portfolio,.contact,.footer',{delay:200, origin:'bottom'});
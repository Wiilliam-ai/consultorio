const menuB = document.getElementById("menu-burger");
const barraT = document.getElementById("barraT");

menuB.addEventListener('click',()=>{
    barraT.classList.toggle('hidden')
})
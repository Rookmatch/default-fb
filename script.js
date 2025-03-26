const section = document.querySelector("#section")
const cabtn = document.querySelector(".cabtn")
const loader = document.querySelector('.loader-container')


cabtn.addEventListener('click', ()=>{
    section.classList.add('active')
    loader.classList.add('active')
})
const section = document.querySelector("#section")
const cabtn = document.querySelector(".cabtn")
const loader = document.querySelector('.loader-container')

const fd1 = document.querySelector('.fd1')
const fd2 = document.querySelector('.fd2')


cabtn.addEventListener('click', ()=>{
    section.classList.add('active')
    loader.classList.add('active')
})
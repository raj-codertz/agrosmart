let burgerIcon = document.getElementById("burgerIcon")
let navbar = document.getElementsByClassName("navbar")
let isNavClosed = true

function displayBurgerIcon(){
    if(isNavClosed){
        navbar[0].style.display = "flex"
        isNavClosed = false
    }
    else{
        navbar[0].style.display = "none"
        isNavClosed = true
    }
}

burgerIcon.addEventListener('click', displayBurgerIcon)
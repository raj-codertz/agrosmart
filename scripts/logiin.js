let navLoginBtn = document.getElementById("loginButooni")
let wholeLoginPage = document.getElementById("loginPageOpena")
let wholeSignUpPage = document.getElementById("signUpPageOpena")
let closeLogin = document.getElementById("closePage")
let ebableloginupBtn = document.getElementById("signupsi")

function displayLoginPage(){
    document.body.style.overflow = 'hidden';
    wholeLoginPage.style.display = "block";
}

function closeLoginButton(){
    wholeLoginPage.style.display = "none";
}

function enableSigup(){
    wholeSignUpPage.style.display = "block"
    closeLoginButton()
}

function disableSigup(){
    wholeSignUpPage.style.display = "none"
    
}

document.addEventListener('load',  () => {

    navLoginBtn.addEventListener('click', displayLoginPage)
    closeLogin.addEventListener('click', closeLoginButton)
    ebableloginupBtn.addEventListener('click', displayLoginPage)
}
)

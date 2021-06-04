// Opening registration form

window.addEventListener('mounted', function (elem) {

    console.log("LE JS DU FORMULAIRE EST APPELÉ")

    let btnRegistration = document.querySelector('.btn_registration');
    let modalBgRegistration = document.querySelector('.modal_bg_registration');
    let modalRegistrationClose = document.querySelector('.modal_close_registration');

    btnRegistration.addEventListener("pointerdown", function (e){
        console.log("test");
        modalBgRegistration.classList.add('bg_active');
    });

    modalRegistrationClose.addEventListener("pointerdown", function (e){
        modalBgRegistration.classList.remove('bg_active');
    });



// Opening connexion form

    let btnConnexion = document.querySelector('.btn_connexion');
    let modalBgConnexion = document.querySelector('.modal_bg_connexion');
    let modalConnexionClose = document.querySelector('.modal_close_connexion');

    btnConnexion.addEventListener("pointerdown", function (e){
        modalBgConnexion.classList.add('bg_active');
    });

    modalConnexionClose.addEventListener("pointerdown", function (){
        modalBgConnexion.classList.remove('bg_active');
    });


// Create account

    let btnCreateAccount = document.querySelector('.btn_create_account');

    btnCreateAccount.addEventListener("pointerdown", function (e){
        console.log("créer compte");
        modalBgRegistration.classList.remove('bg_active');
        modalBgConnexion.classList.add('bg_active');
    });

// Connexion account

    let btnConnexionAccount = document.querySelector('.btn_connexion_account');

    btnConnexionAccount.addEventListener("pointerdown", function (e){
        console.log("créer compte");
        modalBgConnexion.classList.remove('bg_active');
        modalBgRegistration.classList.add('bg_active');
    });

});

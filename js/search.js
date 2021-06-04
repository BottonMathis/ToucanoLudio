// Opening registration form


// modalRegistrationClose.addEventListener("pointerdown", function (e){
//     modalBgRegistration.classList.remove('bg_active');
// });


window.addEventListener('mounted', function (elem) {

    let btnSearch = document.querySelector('.btn_search');
    let SearchMenu = document.querySelector('.search_menu');
    let BG = document.querySelector('.app');
// let modalRegistrationClose = document.querySelector('.modal_close_registration');

    btnSearch.addEventListener("pointerdown", function (e){
        SearchMenu.classList.add('search_menu_active');
        BG.classList.add('blur');
        BG.classList.add('cursor_ptr');
    });

    BG.addEventListener("pointerdown", function (e){
        SearchMenu.classList.remove('search_menu_active');
        BG.classList.remove('blur');
        BG.classList.remove('cursor_ptr');
    });


});
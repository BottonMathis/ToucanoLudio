// Opening registration form

window.addEventListener('mounted', function (elem) {

    let addToWishlist = document.querySelector('.logo_heart')

    addToWishlist.addEventListener("click", function (){
        addToWishlist.classList.add('full_heart');
    });

});

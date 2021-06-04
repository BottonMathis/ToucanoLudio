window.addEventListener('mounted', function (elem) {

    const btn = document.getElementsByClassName('a');
    console.log("SAY HELLO")

    btn.addEventListener('click', () => {

        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        })

    })

});

document.querySelectorAll('a').addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})

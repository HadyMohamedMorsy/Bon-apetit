const slidersContent = document.querySelector('.per-image-tes');

const slidersImges = document.querySelectorAll('.per-image-tes .cont-flex-test');

const next = document.querySelector('.right');

const prev = document.querySelector('.left');


let current = 1;


slidersImges[0].setAttribute('id','last-clone');

slidersImges[slidersImges.length - 1].setAttribute('id','first-clone');



const size = slidersImges[0].clientWidth;




slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';



next.addEventListener('click', () => {
    if (current >= slidersImges.length - 1) return;

    slidersContent.style.transition = 'transform 1s ease-in-out';

    current++;

    slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

});

prev.addEventListener('click', () => {

    if (current <= 0) return;

    slidersContent.style.transition = 'transform 1s ease-in-out';

    current--;


    slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';



});

function myFunction() {

    setInterval(function(){

        if (current >= slidersImges.length - 1) return;


        current++;


        slidersContent.style.transition = 'transform 1s ease-in-out';

        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

    
    }, 5000);
}

    myFunction();

slidersContent.addEventListener('transitionend', () => {

    if (slidersImges[current].id === "last-clone") {
        slidersContent.style.transition = 'none';
        current = slidersImges.length - 2;
        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';
    }

    if (slidersImges[current].id === "first-clone") {
        slidersContent.style.transition = 'none';
        current = slidersImges.length - current;
        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';
    }
});



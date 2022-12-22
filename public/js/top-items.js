
function myFunction(x) {
    if (x.matches) { // If media query matches
        $('.slick').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 3,
            centerMode: false,
            nextArrow: false,
            prevArrow: false,
            variableWidth: true,
        });
    } else {
        // $('.slick').slick('unslick');
    }
}
var x = window.matchMedia("(max-width: 1290px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

$('.follow').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: false,
    prevArrow: false,
    responsive: [
        {
            breakpoint: 1160,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
    ]
});
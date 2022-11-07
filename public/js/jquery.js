function carouse() {
    var multipleCardCarousel = document.querySelector(
        "#carouselExampleControls"
    );
    if (window.matchMedia("(min-width: 768px)").matches) {
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false,
        });
        var carouselWidth = $(".carousel-inner")[0].scrollWidth;
        var cardWidth = $(".carousel-item").width();
        var scrollPosition = 0;
        const allCarousel = document.getElementById('next')
        allCarousel.onclick(function () {
            alert("OKe")
        })

        $("#carouselExampleControls .carousel-control-next").click(function () {
            debugger
            console.log("okee")
            if (scrollPosition < carouselWidth - cardWidth * 4) {
                // scrollPosition += cardWidth;
                $("#carouselExampleControls .carousel-inner").animate({
                    scrollLeft: scrollPosition
                },
                    600
                );
            }
        });
        $("#carouselExampleControls .carousel-control-prev").on("click", function () {
            console.log("okee")
            if (scrollPosition > 0) {
                // scrollPosition -= cardWidth;
                $("#carouselExampleControls .carousel-inner").animate({
                    scrollLeft: scrollPosition
                },
                    600
                );
            }
        });
    } else {
        $(multipleCardCarousel).addClass("slide");
    }
}

<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<!--Totally optional :) -->

<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

{{-- Internal CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/review.css') }}">

{{-- Extend CSS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>


<style>
    .multi-item-carousel .carousel-inner>.item {
        transition: 700ms ease-in-out left;
    }

    .multi-item-carousel .carousel-inner .active.left {
        left: -33%;
    }

    .multi-item-carousel .carousel-inner .active.right {
        left: 33%;
    }

    .multi-item-carousel .carousel-inner .next {
        left: 33%;
    }

    .multi-item-carousel .carousel-inner .prev {
        left: -33%;
    }
</style>

<style>
    .carousel-item {
        max-height: 400px;

        /* Set a fixed height for the carousel items */
    }

    .carousel-item img {
        object-fit: cover;
        object-position: center;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(255, 193, 7, 0.8);
        /* yellow with opacity */
        background-size: 100% 100%;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 60px;
        height: 60px;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-prev:hover .carousel-control-prev-icon,
    .carousel-control-next:hover .carousel-control-next-icon {
        background-color: rgba(255, 193, 7, 1);
        /* solid yellow on hover */
    }
</style>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 mx-auto" src="{{ asset('assets/user/img/brands/audi-slider-1.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 mx-auto" src="{{asset('assets/user/img/brands/audi-slider-2.png')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 mx-auto" src="{{asset('assets/user/img/brands/audi-slider-3.png')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
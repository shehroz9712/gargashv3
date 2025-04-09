@extends('user.layouts.app')

@section('css')
@endsection


@section('content')
<!-- card Slider Start -->
<style>
    .card-slider {
        display: flex;
        /* overflow: hidden; */
        width: 100%;
        position: relative;
        gap: 1rem;
    }

    .card-slider .card {
        flex: 0 0 auto;
        width: 300px;
        margin: 0 10px;
        overflow: hidden;
    }

    .card-border-1 {
        background: radial-gradient(circle at 100% 100%,
                #ffffff 0,
                #ffffff 5px,
                transparent 5px) 0% 0%/10px 10px no-repeat,
            radial-gradient(circle at 0 100%,
                #ffffff 0,
                #ffffff 5px,
                transparent 5px) 100% 0%/10px 10px no-repeat,
            radial-gradient(circle at 100% 0,
                #ffffff 0,
                #ffffff 5px,
                transparent 5px) 0% 100%/10px 10px no-repeat,
            radial-gradient(circle at 0 0,
                #ffffff 0,
                #ffffff 5px,
                transparent 5px) 100% 100%/10px 10px no-repeat,
            linear-gradient(#ffffff, #ffffff) 50% 50% / calc(100% - 10px) calc(100% - 20px) no-repeat,
            linear-gradient(#ffffff, #ffffff) 50% 50% / calc(100% - 20px) calc(100% - 10px) no-repeat,
            linear-gradient(0deg, #eeeeee 0%, #e6b110 100%);
        border-radius: 10px;
        padding: 5px;
        box-sizing: border-box;
    }

    .card-border-2 {
        background: radial-gradient(circle at 100% 100%, #ffffff 0, #ffffff 5px, transparent 5px) 0% 0%/10px 10px no-repeat,
            radial-gradient(circle at 0 100%, #ffffff 0, #ffffff 5px, transparent 5px) 100% 0%/10px 10px no-repeat,
            radial-gradient(circle at 100% 0, #ffffff 0, #ffffff 5px, transparent 5px) 0% 100%/10px 10px no-repeat,
            radial-gradient(circle at 0 0, #ffffff 0, #ffffff 5px, transparent 5px) 100% 100%/10px 10px no-repeat,
            linear-gradient(#ffffff, #ffffff) 50% 50%/calc(100% - 10px) calc(100% - 20px) no-repeat,
            linear-gradient(#ffffff, #ffffff) 50% 50%/calc(100% - 20px) calc(100% - 10px) no-repeat,
            linear-gradient(#eeeeee 0%, #747474 100%);
        border-radius: 10px;
        padding: 5px;
        box-sizing: border-box;
    }

    .card-slider .card img {
        width: 100%;
        height: 200px;
        object-fit: contain;
    }

    .card-slider .card-body {
        padding: 15px;
        text-align: center;
    }

    @keyframes slideRightToLeft {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    @keyframes slideLeftToRight {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .slide-right-to-left {
        animation: slideRightToLeft 20s linear infinite;
    }

    .slide-left-to-right {
        animation: slideLeftToRight 20s linear infinite;
    }
</style>

<div class="container-fluid mt-5 overflow-hidden">
    <div class="card-slider slide-right-to-left">
        <div class="card card-border-1">
            <img src="{{ asset('assets/user/img/car-img9.png') }}" alt="Card Image" class="p-3" />
            <div class="card-body ">
                <h5 class="card-title fs-5 fw-bold main-color"> General Repair </h5>
                <p class="card-text fs-6 fw-normal lh-sm text-secondary">Minor & Major Services, Under Body Repair, Mechanical Repair, Electrical Repair, Other General Repair.</p>
            </div>
        </div>
        <div class="card card-border-2">
            <img src="{{ asset('assets/user/img/car-img8.png') }}" alt="Card Image" class="p-3" />
            <div class="card-body ">
                <h5 class="card-title fs-5 fw-bold text-black">Brakes Service</h5>
                <p class="card-text fs-6 fw-normal lh-sm text-secondary">Minor & Major Services, Under Body Repair, Mechanical Repair, Electrical Repair, Other General Repair.</p>
            </div>
        </div>
        <div class="card card-border-1">
            <img src="{{ asset('assets/user/img/box-3.png') }}" alt="Card Image" class="p-3" />
            <div class="card-body ">
                <h5 class="card-title fs-5 fw-bold main-color">Oil Change Service</h5>
                <p class="card-text fs-6 fw-normal lh-sm text-secondary">Minor & Major Services, Under Body Repair, Mechanical Repair, Electrical Repair, Other General Repair.</p>
            </div>
        </div>
        <div class="card card-border-2">
            <img src="{{ asset('assets/user/img/car-img8.png') }}" alt="Card Image" class="p-3" />
            <div class="card-body ">
                <h5 class="card-title fs-5 fw-bold text-black">Brakes Service</h5>
                <p class="card-text fs-6 fw-normal lh-sm text-secondary">Minor & Major Services, Under Body Repair, Mechanical Repair, Electrical Repair, Other General Repair.</p>
            </div>
        </div>
        <div class="card card-border-1">
            <img src="{{ asset('assets/user/img/slider-img-7.png') }}" alt="Card Image" class="p-3" />
            <div class="card-body ">
                <h5 class="card-title fs-5 fw-bold main-color"> Dashboard Repairing / Sun Roof Liner Repair & Fixing </h5>
                <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Sometimes your car’s dashboard can be damaged because of sunshine and high temperature in uae, or it may be broken due to any reason. </p>
            </div>
        </div>
        <div class="card card-border-2">
            <img src="{{ asset('assets/user/img/slider-img-8.png') }}" alt="Card Image" class="p-3" />
            <div class="card-body ">
                <h5 class="card-title fs-5 fw-bold text-black"> Upholstery / Leather And Fabric Seats Restoration. </h5>
                <p class="card-text fs-6 fw-normal lh-sm text-secondary"> Complete vehicle restoration service, from accident repair, vehicle exterior repair, and restoration </p>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>
<script>
    const slider = document.querySelector(".card-slider");
    const cards = document.querySelectorAll(".card");
    let isReversed = false;
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.intersectionRatio < 0.5) { // Jab last card 50% se kam visible ho
                    slider.style.animation = "none"; // Pehle animation remove karo
                    void slider.offsetWidth; // Reflow trigger karo (animation reset)
                    if (isReversed) {
                        slider.classList.remove("slide-left-to-right");
                        slider.classList.add("slide-right-to-left");
                    } else {
                        slider.classList.remove("slide-right-to-left");
                        slider.classList.add("slide-left-to-right");
                    }
                    slider.style.animation = ""; // Animation wapas enable karo
                    isReversed = !isReversed;
                }
            });
        }, {
            root: null,
            threshold: 0.5
        } // 50% threshold
    );
    observer.observe(cards[cards.length - 1]); // Last card ko observe karo
</script>
<!-- card Slider End -->
@endsection

@section('js')
@endsection

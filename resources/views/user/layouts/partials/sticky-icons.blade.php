<style>
    .sticky-icon {
        z-index: 1;
        position: fixed;
        bottom: 5%;
        right: 0%;
        width: 220px;
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(160px, 0px);
        border-radius: 50px 0px 0px 50px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        text-transform: uppercase;
        padding: 10px;
        font-size: 0.9rem;

        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #fff;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    .sticky-icon a i {
        background-color: #fff;
        height: 40px;
        width: 40px;
        color: #000;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    }

    @media (max-width:786px) {
        .sticky-icon {
            z-index: 1;
            position: fixed;
            top: 50%;
            right: 0%;
            width: 220px;
            display: flex;
            flex-direction: column;
        }

    }
</style>

<!-- https://wa.me/971547935400 -->

<!--Start Sticky Icon-->
<div class="justify-content-center sticky-icon d-none d-md-block" style="z-index: 20;">
    <a href="tel:800 4272886" target="_blank" class="align-items-center bg-warning d-flex text-black"><i
            class="fa-solid fa-phone"></i>
        <p class="m-0">800 4272886</p>
    </a> 
    <a href="https://wa.me/971547935400" target="_blank" class="align-items-center bg-warning d-flex text-black"><i
            class="fa-brands fa-whatsapp"></i>
        <p class="m-0">+971 54 793 5400</p>
    </a>
    <a href="#" class="align-items-center bg-warning d-flex  text-black"><i class="fa-solid fa-headset"></i>
        <p class="m-0">Live Chat</p>
    </a>
</div>
<!--End Sticky Icon-->
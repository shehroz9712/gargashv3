<style>
    .navigation {

        position: fixed;
        bottom: 5%;
        left: 0%;
        width: 220px;
        display: flex;
        flex-direction: column;
        z-index: 2;
    }

    .menu-sticky-iconsToggle {
        position: relative;
        width: 60px;
        height: 60px;
        background-color: #fff;
        border-radius: 70px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: end;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    }

    .menu-sticky-iconsToggle::before {
        content: '+';
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 2.8em;
        font-weight: 550;
        color: #087fe0;
        transition: 1.5s;
        transform: translate(-50%, -58%);
    }

    .menu-sticky-iconsToggle.active::before {
        transform: rotate(315deg);
        top: -10%;
        left: 15%;
    }

    .menu-sticky-icons {
        position: absolute;
        width: 30px;
        height: 30px;
        /* background: #fff; */
        border-radius: 70px;
        z-index: -1;
        transition: transform 0.5s, width 0.5s, height 0.5s;
        transition-delay: 1s, 0.5s, 0.5s;
        transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
    }

    .menu-sticky-iconsToggle.active~.menu-sticky-icons {
        width: 270px;
        height: 70px;
        z-index: 1;
        transform: translateY(-80px);
        transition-delay: 0s, 0.5s, 0.5s;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .menu-sticky-icons::before {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        background: #fff;
        left: calc(50% - 8px);
        bottom: 4px;
        transform: rotate(45deg);
        border-radius: 2px;
        transition: 0.5s;
    }

    .menu-sticky-iconsToggle.active~.menu-sticky-icons::before {
        transition-delay: 0.5s;
        bottom: -6px;
    }

    .menu-sticky-icons ul {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        gap: 30px;
    }

    .menu-sticky-icons ul li {
        list-style: none;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-30px);
        transition: 0.25s;
        transition-delay: calc(0s + var(--i));
    }

    .menu-sticky-iconsToggle.active~.menu-sticky-icons ul li {
        opacity: 1;
        visibility: visible;
        transform: translateY(0px);
        transition-delay: calc(0.75s + var(--i));
    }

    .menu-sticky-icons ul li a {
        display: block;
        font-size: 2.2em;
    }
</style>



<div class="navigation  d-md-none ps-3">
    <div class="menu-sticky-iconsToggle"></div>
    <div class="menu-sticky-icons">
        <ul class="p-0">
            <li style="--i:0.1s"><a href="https://wa.me/971547935400" target="_blank">
                    <i title="Whatsapp" class="fa-brands fa-whatsapp" style="color: #25D366; font-size:larger;"></i>
                </a></li>
            <li style="--i:0.2s"><a href="tel:8004272886" target="_blank">
                    <i title="Call Number" class="fa-solid fa-phone-volume" style="color: #111"></i>
                </a></li>
            <li style="--i:0.3s"><a href="#" target="_blank">
                    <i title="Live Chat" class="fa-solid fa-headset" style="color: #FF7A00;"></i>
                </a></li>

        </ul>
    </div>
</div>



<script>
    let menu_sticky_iconsToggle = document.querySelector('.menu-sticky-iconsToggle');
    menu_sticky_iconsToggle.onclick = function() {
        menu_sticky_iconsToggle.classList.toggle('active');
    }
</script>
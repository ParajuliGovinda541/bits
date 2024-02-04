

  
        <!DOCTYPE html>
        <html lang="en" class="scroll-smooth">
        
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
            
            <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
                integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
                integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
            <title>BITS-Bitmap I.T. Solution Pvt.ltd.</title>
        
            <style>
                /* .swiper {
                    width: 600px;
                    height: 300px;
                } */
            </style>
                 <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        
        <body>
            <section>
            <!-- ads popup started -->
            <!-- <div id="popupAds" class="fixed bg-blue-600 bg-opacity-50 bottom-0 right-0 left-0 backdrop-blur-md top-0 flex items-center z-20     ">
                <div class="lg:w-4/12 md:11/12 w-9/12 mx-auto relative ">
                    <i class="ri-close-fill absolute text-2xl bg-white rounded-full px-1 -right-4 -top-4 cursor-pointer" id="closeBtn"></i>
                    <img src="hv.png" alt="">
                </div>
                <i class="ri-close-fill absolute rounded-full right-10 top-10 text-4xl text-white "></i>
            </div> -->
        
            <!-- start for icon for scrolling top -->
            <div class="cursor-pointer ">
        
                <a id="topbtn" href="" class="bg-indigo-900 fixed z-50 right-5 bottom-10  text-3xl rounded shadow text-white ">
                    <i class="ri-arrow-up-fill p-2"></i>
                </a>
                <!-- <a  id="downbtn" href="" class="bg-indigo-900 fixed left-5 top-24  text-3xl rounded shadow text-white ">    <i class="ri-arrow-down-fill p-2"></i>
            </a> -->
            </div>
        
            <!-- ads popup ended -->
        
            <!-- end for icon for scrolling top -->
        
        
        
            <!-- Start of navbar -->
        
        
        
            <nav id="smallNavbar" class=" block lg:hidden shadow-lg sticky top-0 bg-white z-50 px-10  ">
                <div class="flex justify-between items-center mr-5 py-2">
                    <img src="logo.png" class="h-10" alt="">
                    <i class="ri-menu-line text-3xl cursor-pointer" onclick="toggleMenu()"></i>
                </div>
                <div class=" text-right mr-5 md:h-fit  hidden" id="menu">
                    <div class="text-[#353283]  ">
                        <a class="font-bold" href="/contact">Home</a>
                        <a class="block my-2" href="">About Us</a>
                        <a class="block my-2" href="">Services</a>
                        <a class="block my-2" href="{{route('project')}}">Projects</a>
                        <a class="block my-2" href="">Blogs</a>
                        <a class="block my-2" href="">Contact Us</a>
                    </div>
                    <a href="" class="bg-indigo-700 rounded-xl text-white px-2 py-1  mb-6 hover:bg-red-600 duration-700">Get
                        IT
                        Support</a>
                </div>
            </nav>
            <nav id="bigNavbar"
                class=" hidden lg:flex justify-between items-center px-10  shadow-lg sticky top-0 bg-white z-50  ">
        
        
                <img src="logo.png" class="h-10" alt="">
                <div class="text-[#353283]">
                    <a class="font-bold" href="">Home</a>
                    <a href="/about">About Us</a>
                    <a href="">Services</a>
                    <a href="{{route('project')}}">Projects</a>
                    <a href="">Blogs</a>
                    <a href="/contact">Contact Us</a>
                </div>
                <a href="" class="bg-indigo-700 rounded-xl text-white px-2 py-1 mr-8 my-6 hover:bg-red-600 duration-700">Get IT
                    Support</a>
        
            </nav>
        
            <script>
        
                function toggleMenu() {
                    var showMenu = document.getElementById('menu');
                    if (showMenu.style.display == 'block') {
                        showMenu.style.display = 'none';
                    }
                    else {
                        showMenu.style.display = 'block';
                    }
                }
            </script>
    </section>

    <section>
        @yield('content')
    </section>

 <!-- footer started -->
 <section class="">
    <div class="grid md:grid-cols-4 grid-cols-1  md:gap-10 gap-3 md:px-10 px-5 py-16 bg-[#312E81] text-gray-400">
        <div class=" ">
            <h1 class="text-white text-xl uppercase">BITMAP I.T. SOLUTION PVT. LTD.</h1>
            <p class=" text-[#cbd5e1] text-justify mt-4 text-sm">BITS is a creatively driven integrated Business
                Consulting, Advertising
                agency and IT company located
                in Narayangarh that
                creates high-impact business solutions for both traditional and digital media to its clients.
            </p>
        </div>
        <div class="md:pl-24 ">
            <h1 class="text-white text-xl uppercase ">Useful links.</h1>
            <p class="mt-4">
                <a href="" class="block text-[#cbd5e1] ">Home</a>
                <a href="" class="block text-[#cbd5e1] mt-2 ">About Us</a>
                <a href="" class="block text-[#cbd5e1] mt-2 ">Services</a>
                <a href="" class="block text-[#cbd5e1] mt-2">Projects</a>
                <a href="" class="block text-[#cbd5e1] mt-2 ">Blogs</a>
                <a href="" class="block text-[#cbd5e1] mt-2">Contact Us</a>
            </p>


        </div>
        <div class="">
            <h1 class="text-white text-xl uppercase">Contact us</h1>
            <div class=" text-[#cbd5e1]">
                <p class="text">
                    <span class="block mt-4">
                        <i class="ri-map-pin-line"></i> Bharatpur-3, Belchowk, Narayangarh, Nepal
                    </span>
                    <span class="block mt-4">
                        <i class="ri-phone-line"></i> 056-596250
                    </span>

                    <span class="block mt-4">
                        <i class="ri-phone-line"></i> 9855011559, 9865042465</span>
                    <span class="block mt-4">
                        <i class="ri-mail-line"></i> info@bitmapitsolution.com
                    </span>
                </p>

            </div>
        </div>
        <div class="">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100064648454468&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                width="40" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
    <footer class="bg-[#3730A3] text-center p-2">
        <p class="text-blue-600">Copyright &copy;2023 <span class="text-white">Bitmap I.T Solution Pvt.Ltd</span>
            All
            Rights Reserved</p>
    </footer>


</section>

<!-- footer ended -->



<script>
    const swiper = new Swiper('.swiper1 ', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',


        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>




<script>
    const swiper2 = new Swiper('.swiper2 ', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        slidesPerView: 1,
        spaceBetween: 30,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',


        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
        },
    });

</script>
<script>
    var topbtn = document.getElementById('topbtn');
    topbtn.style.display = 'none';

    window.onscroll = function () {
        scrollFunction();
    }
    function scrollFunction() {
        if (window.pageYOffset > 200) {
            topbtn.style.display = 'block';

        }
        else {
            topbtn.style.display = 'none';
        }
    }

    topbtn.addEventListener('click', function () {
        window.scroll(0, 0);
    });





</script>

<script>
    var btnClose = document.getElementById('closeBtn');
    btnClose.addEventListener('click', function () {
        // alert('now close this add');


        // document.getElementById('popupAds').classList.add=('hidden');

        document.getElementById('popupAds').style.display = 'none';

    });

</script>

<script>
    new WOW().init();
</script>
</body>







</html>

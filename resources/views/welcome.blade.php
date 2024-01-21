@extends('layouts.master')

@section('content')
    <!-- start of IT Solutions & Graphics Services Company  -->

    <section class="grid md:grid-cols-2  gap-10 items-center bg-[#312E81]  md:p-32  ">
        <div class="leading-8 md:p-0 p-8 text-left">
            <h1 class="md:text-4xl text-2xl w-full text-white font-bold">IT Solutions & Graphics Services Company</h1>
            <p class="text-white text-xl">Presenting your business in a digital mode is known to be a smarter way of
                doing

                business.
            </p>
            <p class="text-white text-">LET THE WORLD KNOW YOU EXIST</p>
            <div class="mt-10 grid md:grid-cols-2 md:gap-0 md:pr-20 gap-4 md:justify-start">
                <a href=""
                    class=" bg-white rounded-lg inline-block lg:px-16 md:px-5 w-48 md:w-fit  px-10 md:py-4 py-2 items-center mx-1 hover:bg-indigo-900 hover:text-white">About
                    Us</a>
                <a href=""
                    class=" bg-red-600 rounded-lg inline-block lg:px-16 md:py-4 w-48 md:w-fit py-2 px-10 items-center mx-1 hover:bg-indigo-900 hover:text-white">Contact
                    Us</a>

            </div>
        </div>
        <div>
            <img class="lg:w-10/12 md:w-11/12 pb-24 md:py-0" src="home.png" alt="">
        </div>

    </section>
    <img src="{{asset('images/home_bottom_shape.png')}}')}}" alt="" class="md:-mt-52 -mt-36 h-40 w-full md:h-56">


    <!-- end of IT Solutions & Graphics Services Company  -->

    <!-- start of services  -->

    <section class="bg-[#FFFFFF] " >
        <div class="" >

       
            <h1 class="text-4xl  text-center">Services</h1>
            <p class="text-center leading-10 text-blue-600">We provide the following Services as per the need of the
                clients.</p>
        </div>

        <div class="grid md:grid-cols-3 md:px-16 px-10 gap-12">
            <div class=" flex gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce " data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/html.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl ">Website Development</h3>

                    <p class=" ">Visualise your message with 2D animation.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/graphic-design.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-[20px] ">Domanis & Hostings</h3>

                    <p class="text-justify text-[16px]  ">Get domain and hosting in reasonable scales and prices.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/digital-marketing.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">Internships</h3>

                    <p class=" ">We regularly intake interns. Limited seats.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/software.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">Software Development</h3>
                    <p class=" ">Get customised and generic software developed with recent technologies</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/mobile-application.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">Mobile App Development</h3>
                    <p class=" ">Get Mobile application for both Android & IOS platform.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/animation.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">2D Animation</h3>
                    <p class=" ">Let the market know you exist. Website is the identity of your business on digital

                        market.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/web-hosting.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">Domain & Hosting</h3>
                    <p class=" ">Get domain and hosting in reasonable scales and prices.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/internship.png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">Internshipst</h3>
                    <p class=" ">We regularly intake interns. Limited seats.</p>
                </div>

            </div>
            <div class="flex  gap-8 px-5 shadow-xl items-center py-12 rounded-lg wow animate__animated animate-bounce "   data-wow-iteration="3" data-wow-duration="2s" data-wow-delay="1s">
                <div>
                    <img src="{{asset('images/class (1).png')}}" alt="" class="h-full w-40">
                </div>
                <div class="grid gap-3">
                    <h3 class="font-bold text-xl">Traning Classes</h3>
                    <p class=" ">Web Development and Graphics Classes</p>
                </div>

            </div>



        </div>

    </section>

    <!-- end of services  -->

    <!-- Testomonials started -->

    <section class="bg-[#312E81] py-20">
        <div class="">
            <div class="text-center text-white ">
                <div>
                    <h1 class="text-3xl font-bold p-3">Testimonials</h1>
                    <p class="text-sm text-gray-200">What Our Client Say</p>
                </div>
                <div class="swiper swiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide my-5">
                            <div class="p-2 ">
                                <img src="images/https://www.bitmapitsolution.com/images/testimonial_images/testimonial-1_1672569099.jpg"
                                    class="rounded-full h-20 text-center mx-auto" alt="">
                            </div>
                            <div class="justify-center text-center">
                                <h1 class="text-xl">Bipin Kandel</h1>
                                <p class="text-sm">Founder Of V-Group</p>
                                <p class="w-6/12 text-left mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Est
                                    dicta assumenda sit, tempora eaque, doloremque, ratione eligendi labore sapiente
                                    soluta
                                    aliquid
                                    iste quis commodi at! Excepturi inventore numquam quod sapiente!</p>
                            </div>
                        </div>



                        <div class="swiper-slide my-5">

                            <div class="p-2 ">
                                <img src="images/https://www.bitmapitsolution.com/images/testimonial_images/testimonial-1_1672569099.jpg"
                                    class="rounded-full h-20 text-center mx-auto" alt="">
                            </div>
                            <div class="justify-center text-center">
                                <h1 class="text-xl">Bipin Kandel</h1>
                                <p class="text-sm">Founder Of V-Group</p>
                                <p class="w-6/12 text-left mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Est
                                    dicta assumenda sit, tempora eaque, doloremque, ratione eligendi labore sapiente
                                    soluta
                                    aliquid
                                    iste quis commodi at! Excepturi inventore numquam quod sapiente!</p>
                            </div>
                        </div>
                        <div class="swiper-slide my-5">

                            <div class="p-2 ">
                                <img src="images/https://www.bitmapitsolution.com/images/testimonial_images/testimonial-1_1672569099.jpg"
                                    class="rounded-full h-20 text-center mx-auto" alt="">
                            </div>
                            <div class="justify-center text-center">
                                <h1 class="text-xl">Bipin Kandel</h1>
                                <p class="text-sm">Founder Of V-Group</p>
                                <p class="w-6/12 text-left mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Est
                                    dicta assumenda sit, tempora eaque, doloremque, ratione eligendi labore sapiente
                                    soluta
                                    aliquid
                                    iste quis commodi at! Excepturi inventore numquam quod sapiente!</p>
                            </div>
                        </div>
                        <div class="swiper-slide my-5">

                            <div class="p-2 ">
                                <img src="https://www.bitmapitsolution.com/images/testimonial_images/testimonial-1_1672569099.jpg"
                                    class="rounded-full h-20 text-center mx-auto" alt="">
                            </div>
                            <div class="justify-center text-center">
                                <h1 class="text-xl">Bipin Kandel</h1>
                                <p class="text-sm">Founder Of V-Group</p>
                                <p class="w-6/12 text-left mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Est
                                    dicta assumenda sit, tempora eaque, doloremque, ratione eligendi labore sapiente
                                    soluta
                                    aliquid
                                    iste quis commodi at! Excepturi inventore numquam quod sapiente!</p>
                            </div>
                        </div>
                        <div class="swiper-slide my-5">
                            <div>

                            </div>
                            <div class="p-2 ">
                                <img src="https://www.bitmapitsolution.com/images/testimonial_images/testimonial-1_1672569099.jpg"
                                    class="rounded-full h-20 text-center mx-auto" alt="">
                            </div>
                            <div class="justify-center text-center">
                                <h1 class="text-xl">Bipin Kandel</h1>
                                <p class="text-sm">Founder Of V-Group</p>
                                <p class="w-6/12 text-left mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Est
                                    dicta assumenda sit, tempora eaque, doloremque, ratione eligendi labore sapiente
                                    soluta
                                    aliquid
                                    iste quis commodi at! Excepturi inventore numquam quod sapiente!</p>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->
                </div>

            </div>

        </div>


    </section>
    <!-- Testomonials ended -->


    <!-- Slider main container -->




    <!-- Team member start  -->
    <section class="px-10">
        <div class="text-center my-10">
            <h1 class="text-4xl mb-5">
                Team Member

            </h1>
            <p class="text-blue-600">The faces behind the success of Bitmap I.T. Solution Pvt. Ltd.</p>
        </div>
        <div class="grid md:grid-cols-4 md:gap-6 bg-white">
            <div class="text-center">
                <div class=" relative group overflow-hidden h-72 ">
                    <img src="{{asset('images/myimage_1684143425.png')}}"
                        class="rounded-lg duration-200 group-hover:transform group-hover:scale-105 h-72 w-full object-cover"
                        alt="">
                    <div
                        class=" hidden group-hover:flex gap-5 text-white bg-black bg-opacity-70 items-center justify-center absolute inset-0">
                        <i class="fab fa-facebook mx-1"></i>
                        <i class="fab fa-twitter mx-1"></i>
                        <i class="fab fa-instagram mx-1"></i>
                    </div>

                </div>
                <h3 class="text-black font-semibold">Roshan Khanal
                </h3>
                <p class="text-blue-600">Co-Founder/CEO</p>
            </div>
            <div class="text-center">
                <div class=" relative group overflow-hidden h-72 ">
                    <img src="{{asset('images/myimage_1684143425.png')}}"
                        class="rounded-lg duration-200 group-hover:transform group-hover:scale-105 h-72 w-full object-cover"
                        alt="">
                    <div
                        class=" hidden group-hover:flex gap-5 text-white bg-black bg-opacity-70 items-center justify-center absolute inset-0">
                        <i class="fab fa-facebook mx-1"></i>
                        <i class="fab fa-twitter mx-1"></i>
                        <i class="fab fa-instagram mx-1"></i>
                    </div>

                </div>
                <h3 class="text-black font-semibold">Roshan Khanal
                </h3>
                <p class="text-blue-600">Co-Founder/CEO</p>
            </div>
            <div class="text-center">
                <div class=" relative group overflow-hidden h-72 ">
                    <img src="{{asset('images/myimage_1684143425.png')}}"
                        class="rounded-lg duration-200 group-hover:transform group-hover:scale-105 h-72 w-full object-cover"
                        alt="">
                    <div
                        class=" hidden group-hover:flex gap-5 text-white bg-black bg-opacity-70 items-center justify-center absolute inset-0">
                        <i class="fab fa-facebook mx-1"></i>
                        <i class="fab fa-twitter mx-1"></i>
                        <i class="fab fa-instagram mx-1"></i>
                    </div>

                </div>
                <h3 class="text-black font-semibold">Radha Mahato
                </h3>
                <p class="text-blue-600"> Graphics Desinger</p>
            </div>
            <div class="text-center">
                <div class=" relative group overflow-hidden h-72 ">
                    <img src="{{asset('images/myimage_1684143425.png')}}"
                        class="rounded-lg duration-200 group-hover:transform group-hover:scale-105 h-72 w-full object-cover"
                        alt="">
                    <div
                        class=" hidden group-hover:flex gap-5 text-white bg-black bg-opacity-70 items-center justify-center absolute inset-0">
                        <i class="fab fa-facebook mx-1"></i>
                        <i class="fab fa-twitter mx-1"></i>
                        <i class="fab fa-instagram mx-1"></i>
                    </div>

                </div>
                <h3 class="text-black font-semibold">Aman Chaudhary
                </h3>
                <p class="text-blue-600">Full Stack Developer</p>
            </div>




        </div>

    </section>

    <!-- Team member end  -->

    <!-- background started -->
    <section
        class="bg-[url('chicago.jpg')] h-96 bg-transparent bg-cover text-center relative text-white  justify-center  bg-fixed">
        <div
            class=" flex justify-center items-center text-white text-center bg-blue-600 bg-opacity-30 left-0 absolute top-0 right-0 bottom-0">
            <div class="">

                <h1>WANT TO WORK WITH US? </h1>
                <h1 class="font-bold">LET THE WORLD KNOW YOU EXIST!</h1>
                <p class="justify-center mx-auto">
                    Digitalise your business with attractive graphics, grow the
                    <br>
                    customers and business. Get all IT related services and shift
                    <br>
                    from the traditional way of business marketing to the new digital
                    <br>
                    technology.
                </p>
                <div class="flex  justify-between md:px-72   mt-5 md:gap-5 gap-0 px-10">
                    <div>
                        <a href=""
                            class="bg-[#DC2626] md:px-20 px-10 md:py-3 py-2 text-xl rounded-lg hover:bg-[#02479D] duration-700 ">Find
                            us</a>
                    </div>
                    <div>
                        <a href=""
                            class="bg-[#DC2626] md:px-20 px-10 md:py-3 py-2 text-xl rounded-lg hover:bg-[#02479D] duration-700 ">Contact
                            us
                        </a>

                    </div>
                </div>
            </div>


        </div>

    </section>
    <!-- background started -->




    <!-- start of blog and articles -->
    <section class=" text-center my-20 text-indigo-900">
        <h1 class="text-3xl">Blog & Articles</h1>
        <p class="text-center text-xl text-indigo-600 py-2">Recent Blog</p>
        <div class="grid md:grid-cols-3 gap-8 px-10  ">
            <div class=" cursor-pointer rounded-lg bg-gray-200 ">
                <img src="{{asset('images/graphic_1684144239.jpg')}}" class="rounded-t-lg" alt="">
                <div class="flex justify-between px-4">
                    <div>
                        <i class="ri-calendar-2-line">2023-12-05</i>

                    </div>
                    <div>
                        <i class="ri-calendar-2-line">Bitmap It solution</i>

                    </div>

                </div>
                <div class="p-4">
                    <h2 class="text-left font-bold">Importance of graphic desgin for buisness</h2>
                    <p class="line-clamp-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Expedita rerum eum fugiat hic consequuntur, illum, repellendus adipisci reprehenderit repellat
                        neque provident quidem cumque consequatur. Ipsa tempore sapiente aliquam quibusdam placeat?</p>
                    <a href="" class="block mt-3 font-bold text-left">Read More</a>
                </div>


            </div>
            <div class=" cursor-pointer rounded-lg bg-gray-200">
                <img src="{{asset('images/person-front-computer-working-html_1683801613-min_1684144337.jpg')}}" alt="">
                <div class="flex justify-between px-4">
                    <div>
                        <i class="ri-calendar-2-line">2023-12-05</i>

                    </div>
                    <div>
                        <i class="ri-calendar-2-line">Bitmap It solution</i>

                    </div>

                </div>
                <div class="p-4">
                    <h2 class="text-left font-bold  ">Importance of graphic desgin for buisness</h2>
                    <p class="line-clamp-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Expedita rerum eum fugiat hic consequuntur, illum, repellendus adipisci reprehenderit repellat
                        neque provident quidem cumque consequatur. Ipsa tempore sapiente aliquam quibusdam placeat?</p>
                    <a href="" class="block mt-3 font-bold text-left">Read More</a>
                </div>
            </div>
            <div class=" cursor-pointer rounded-lg bg-gray-200">
                <img src="{{asset('images/website_1671356221-min_1684144380.jpg')}}" alt="">
                <div class="flex justify-between px-4">
                    <div>
                        <i class="ri-calendar-2-line">2023-12-05</i>

                    </div>
                    <div>
                        <i class="ri-calendar-2-line">Bitmap It solution</i>

                    </div>

                </div>
                <div class="p-4">
                    <h2 class="text-left font-bold">Importance of graphic desgin for buisness</h2>
                    <p class="line-clamp-2 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Expedita rerum eum fugiat hic consequuntur, illum, repellendus adipisci reprehenderit repellat
                        neque provident quidem cumque consequatur. Ipsa tempore sapiente aliquam quibusdam placeat?</p>
                    <a href="" class="block mt-3 font-bold text-left">Read More</a>
                </div>
            </div>

        </div>
        <!-- blogs button -->
        <div class="text-center rounded-lg mt-8 ">
            <a href=""
                class="bg-indigo-900 py-2 px-4  rounded-lg text-white hover:bg-red-700 transition-all duration-700 ">View
                All Blogs</a>
        </div>
        <!-- blogs button -->
    </section>
    <!-- end of blog and articles -->




    <!--our happy clients started  -->

    <section>
        <div class="text-center">
            <h1 class="text-3xl font-bold font-[Poppins]">Our Happy Clients</h1>
            <p class="text-blue-600">We are glad to be trusted by </p>

        </div>

        <div class=" py-10   ">
            <div class="swiper swiper2 ">
                <div class="swiper-wrapper mb-10 ">
                    <div class="swiper-slide">

                        <div class="shadow px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="shadow px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="shadow-2xl px-2 py-5 border rounded-lg">
                            <img src="{{asset('images/animation.png')}}" alt="" class="h-24 mx-auto">

                        </div>
                    </div>
                </div>
                <div class="swiper-pagination "></div>

            </div>

        </div>
    </section>
@endsection
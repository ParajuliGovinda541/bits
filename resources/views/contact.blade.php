@extends('layouts.master')

@section('content')
<section class="">
    <div class="bg-[url('chicago.jpg')] h-96 justify-center w-full bg-cover relative " h>
        <div class="absolute bg-gray-400 bg-opacity-40 inset-0 flex items-center">
            <h1 class="px-20 text-3xl text-white items-center">Contact us</h1>

        </div>
    </div>

    <div>
        <h1 class="text-center text-3xl font-semibold mt-5 text-indigo-600">Contact Information</h1>
        <h3 class="text-center text-sm mt-1 text-indigo-600">Find Us</h3>
        <div class="grid grid-cols-2 justify-between px-24">
            <img src="https://www.bitmapitsolution.com/images/contact_side.svg" class=" h-full" alt="">
            <div class="">
                <div class="grid grid-cols-2 gap-10 mt-5">
                    <p><i class="ri-map-pin-line"></i> Bharatpur-3, Belchowk,Narayangarh</p>
                    <p>
                        <i class="ri-mail-line"></i> info@bitmapitsolution.com
                    </p>


                    <p><i class="ri-phone-line"></i> 9855011559 / 9865042465</p>
                    <p>
                        <i class="ri-phone-line"></i> 056-596250
                    </p>
                </div>
                <div>
                    <form action="{{route('admin.contact.store')}}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 my-5 gap-10  ">
                            <div class="">
                                <label for="">Name *</label>
                                <input type="text" name="name" placeholder=" Enter Your Name " class=" outline-indigo-600  px-2 py-1 w-full block border
                         border-black rounded-lg">
                            </div>
                            <div class="">
                                <label for="">Phone *</label>
                                <input type="text" name="phone" placeholder=" Enter Your Name " class="  outline-indigo-600  px-2 py-1 w-full block border
                        border-black rounded-lg">
                            </div>
                        </div>
                        <div class="">
                            <label for="">Email *</label>
                            <input type="email" name="email" placeholder=" Enter Your Name " class="  outline-indigo-600 px-2 py-1 w-full block border
                     border-black rounded-lg">
                        </div>
                        <div>
                            <label for="">Message *</label>
                            <textarea name="message" id="" cols="30" rows="10" class="  outline-indigo-600 px-2 py-1 w-full block border
                            border-black rounded-lg"></textarea>
                        </div>
                        <div class="mx-auto text-center mt-4">
                            <button type="submit"
                                class="px-3 text-white py-2 text-center bg-indigo-700 rounded-xl hover:bg-indigo-600">Send
                                Message</button>
                        </div>
                    </form>
                </div>

            </div>


        </div>



    </div>
</section>


<!-- map started -->
<section class="w-full bg-cover">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.726732213204!2d84.41660037522836!3d27.66392517620745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fadd9f9b440f%3A0x6558e51747ce492a!2z4KSX4KWM4KSw4KS1IOCkueCli-Ckn-CksiDgpI_gpKPgpY3gpKEg4KSy4KSc!5e0!3m2!1sen!2snp!4v1702525179258!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" class="w-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

<!-- map ended -->




<script>
    var closePopup = document.getElementById('closePopup');
    closePopup.addEventListener('click',function(){

        document.getElementById('mainPopup').style.display='none';
    });
</script>

<script>

var showPopup = document.getElementById('showPopup');
showPopup.addEventListener('click',function(){
document.getElementById('mainPopup').style.display='block';
});
</script>
@endsection
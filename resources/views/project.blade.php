@extends('layouts.master')

@section('content')
    <section>
        <div class="bg-cover h-28 " style="background-image: url('{{ asset('images/blog_bg.jpg') }}');">

            <div class=" ">
                <h1 class="text-4xl font-bold text-white  items-center">Projects</h1>
            </div>


        </div>
        <div class="my-20">
            <div>
                <h1 class="text-3xl text-center my-10">Our Recent Projects</h1>
            </div>

            <div class="grid grid-cols-3 gap-10 px-10 ">

                <div class="rounded-md shadow p-1">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                    
                </div>
                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>
                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>
                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>


                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>
                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>
                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>
                <div class="rounded-md shadow p-0">
                    <iframe src="https://nepalserofero.com/" width="400" height="300" ></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

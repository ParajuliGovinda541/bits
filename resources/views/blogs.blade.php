@extends('layouts.master')

@section('content')
    <section>
        <h1 class="text-center text-4xl my-10 font-bold">Our Blogs</h1>
    </section>
    <section>
        <div>
            <div class="grid grid-cols-3 gap-10 px-20">

                @foreach ($blogs as $blog)
                <div class="rounded-md my-2 shadow ">

                    <a href="">
                            <div>
                                <img class=" hover:scale-105 duration-700  rounded-t-md"
                                    src="{{ asset('images/blogs/' . $blog->image) }}" alt="">
                            </div>
                            <div class="flex justify-between px-3 pt-1">
                                <i class="ri-calendar-2-line"> {{ $blog->blog_date }}</i>
                                <i class="ri-admin-fill"> {{ $blog->author }}</i>
                            </div>
                            <div class="p-5">
                                <h1 class="font-bold">{{ $blog->title }}Title</h1>
                                <p class="line-clamp-2">{{ $blog->description }}
                                </p>
                            </div>
                        {{$blog->links}} </a>
                    </div>
                     

                     
                @endforeach






            </div>
        </div>
    </section>
@endsection

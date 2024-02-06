@extends('layouts.master')

@section('content')
    <section>
        <h1 class="text-center text-4xl my-10 font-bold">Our Blogs</h1>
    </section>
    <section>
        <div>
            <div class="grid grid-cols-3 gap-10 px-20">

                @foreach ($blogs as $blog)
                <a href="">
                    <div class="rounded-md my-2 shadow ">
                        <div>
                            <img class="rounded-t-md" src="{{ asset('images/blogs/'.$blog->image) }}" alt="">
                        </div>
                        <div class="p-5">
                            <h1 class="font-bold">{{$blog->title}}</h1>
                            <p class="line-clamp-2">{{$blog->description}}
                            </p>
                        </div>


                    </div>
                </a>
                @endforeach
                
              
            
            


            </div>
        </div>
    </section>
@endsection

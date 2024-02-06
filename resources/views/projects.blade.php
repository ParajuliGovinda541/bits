@extends('layouts.master')

@section('content')
    <section>
        <h1 class="text-center text-4xl my-10 font-bold">Our projects</h1>
    </section>
    <section>
        <div>
            <div class="grid grid-cols-3 gap-10 px-20">

                @foreach ($projects as $project)
                <a href="">
                    <div class="rounded-md my-2 shadow ">
                        <div>
                            <img class="rounded-t-md" src="{{ asset('images/projects/'.$project->image) }}" alt="">
                        </div>
                        <div class="p-5">
                            <h1 class="font-bold">{{$project->title}}</h1>
                            <p class="line-clamp-2">{{$project->descripton}}
                            </p>
                        </div>


                    </div>
                </a>
                @endforeach
                
              
            
            


            </div>
        </div>
    </section>
@endsection

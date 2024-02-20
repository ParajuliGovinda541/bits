@extends('layouts.master')

@section('content')
    <section>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="px-10 py-10 w-1/3 mx-auto grid gap-5 shadow-2xl my-10 rounded-lg bg-[#00B4C5] font-bold">
                <h1 class="text-center text-xl">Login</h1>
                <div>
                    <label for="">Name</label>
                    <br>
                    <input type="text" name="email" class="w-full rounded-md">
                </div>
                <div>
                    <label for="">Password</label>
                    <br>
                    <input type="text" name="password" class="w-full rounded-md">
                </div>
                <div>
                    <input type="submit" class="bg-red-600 px-2 py-1 text-white font-bold font-mono hover:bg-red-800 hover:outline">
                </div>
            </div>
        </form>
    </section>
@endsection

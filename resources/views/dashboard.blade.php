@extends('layouts.app')
@section('heading')
Dashboard
@endsection
@section('content')
    <div>
        <div class="grid md:grid-cols-3 gap-10 mx-10  text-center  ">
            <div
                class="shadow-lg cursor-pointer bg-gradient-to-br from-red-600 to-white-950 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Total Notices</h1>
                <h1 class="text-4xl font-bold">{{$notices}}</h1>
            </div>
            <div
                class="shadow-lg cursor-pointer bg-gradient-to-br from-green-600 to-white-950 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Banner</h1>
                <h1 class="text-4xl font-bold">{{$banners}}</h1>
            </div>
            <div
                class="shadow-lg cursor-pointer bg-gradient-to-br from-white to-red-900 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Clients</h1>
                <h1 class="text-4xl font-bold">{{$clients}}</h1>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10 mx-10  text-center my-5 ">
            <div
                class="shadow-lg cursor-pointer bg-gradient-to-br from-red-600 to-white-950 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Teams</h1>
                <h1 class="text-4xl font-bold">{{$teams}}</h1>
            </div>
            <div class="shadow-lg cursor-pointer bg-red-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Services</h1>
                <h1 class="text-4xl font-bold">{{$categories}}</h1>
            </div>
            <div class="shadow-lg cursor-pointer bg-blue-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Blogs</h1>
                <h1 class="text-4xl font-bold">10</h1>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10 mx-10  text-center my-5 ">
            <div class="shadow-lg cursor-pointer bg-green-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Testomonial</h1>
                <h1 class="text-4xl font-bold">{{$testo}}</h1>
            </div>
            <div class="shadow-lg cursor-pointer bg-red-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Visits</h1>
                <h1 class="text-4xl font-bold">{{$visits}}</h1>
            </div>
            <div class="shadow-lg cursor-pointer bg-blue-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Logouts</h1>
                <h1 class="text-4xl font-bold">10</h1>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-10 mx-10  text-center my-5 ">
            <div class="shadow-lg cursor-pointer bg-green-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Admins</h1>
                <h1 class="text-4xl font-bold">10</h1>
            </div>
            <div class="shadow-lg cursor-pointer bg-red-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Visits</h1>
                <h1 class="text-4xl font-bold">10</h1>
            </div>
            <div class="shadow-lg cursor-pointer bg-blue-600 px-10 py-5 rounded-md flex justify-between">
                <h1 class="text-xl">Clients</h1>
                <h1 class="text-4xl font-bold">10</h1>
            </div>
            <div class="col-span-2">
                <canvas id="myChart"></canvas>
              </div>
        </div>


        
          
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');
          
            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                  label: '# of Votes',
                  data: [12, 19, 3, 5, 2, 3],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
    </div>
@endsection

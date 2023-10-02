@extends('layouts.app')
@section('title','dashboard')
@section('content')
 <h1 class="text-center text-4xl font-serif my-3" >Dashboard</h1>
 <div class="flex gap-2 flex-col lg:flex-row justify-around">
     <div class="w-full lg:w-3/6 h-96 shadow-md border-2 p-2">
        <canvas class="mx-auto w-full" id="myChart2"></canvas>
    </div>
    <div class="w-full lg:w-3/6 h-96 shadow-md border-2 p-2" >
        <canvas class="mx-auto w-full" id="myChart"></canvas>
     </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 @vite('resources/js/charts.js')
@endsection
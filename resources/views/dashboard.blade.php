@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Halo, {{ $username }}!</h1>
<p class="text-slate-400 mb-6">Ini ringkasan koleksi tontonanmu.</p>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
    <div class="bg-slate-800 p-5 rounded-2x1">
        <p class="text-sm text-slate-400">Total Koleksi</p>
        <p class="text-3xl font-bold">{{ $total }} </p>
    </div>
    <div class="bg-slate-800 p-5 rounded-2x1">
        <p class="text-sm text-slate-400">Sudah Ditonton</p>
        <p class="text-3xl font-bold text-amber-400"> {{ $sudah }}</p>
    </div>
    <div class="bg-slate-800 p-5 rounded-2x1">
        <p class="text-sm text-slate-400">Belum Ditonton</p>
        <p class="text-3xl font-bold text-rose-400">{{ $belum }}</p>
    </div>
</div>

<a href="{{ route('pengelolaan', ['username' => $username]) }}" 
   class="inline-block bg-rose-500 hover:bg-rose-600 text-white py-2 px-4 rounded-lg">
       Lihat Koleksi
</a>
@endsection
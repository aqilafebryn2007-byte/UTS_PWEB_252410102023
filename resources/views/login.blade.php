@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex-1 p-6">
   <div class="max-w-sm mx auto mt-12 bg-slate-800 p-8 rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold mb-1">Selamat Datang 🍿</h1>
        <p class="text-slate-400 mb-6">Masukkan username untuk masuk ke FilmKu</p>

    <form action="{{ route('dashboard') }}" method="GET" class="space-y-4">
        <input type="text" name="username" placeholder="Username" required 
            class="w-full bg-slate-700 text-white placeholder-slate-400 border border-slate-600 rounded-lg px-4 py-2">
        <input type="password" name="password" placeholder="Password" required
           class="w-full bg-slate-700 text-white placeholder-slate-400 border border-slate-600 rounded-lg px-4 py-2"> 
        <button class="w-full bg-rose-500 hover:bg-rose-600 text-white py-2 rounded-lg">
            Masuk
        </button> 
    </form>  
    </div>   
</div>
@endsection
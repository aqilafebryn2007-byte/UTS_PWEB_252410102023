@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<x-navbar :username="$username" />

<div class="flex-1 max-w-5xl w-full mx-auto p-6">
    <div class="bg-slate-800 p-8 rounded-2xl max-w-md">
        <h1 class="text-2xl font-bold">{{ $username }}</h1>
        <p class="text-slate-400">Kolektor Film</p>
        <p class="text-sm leading-relaxed">
            Nama: qila <br>
            NIM: 252410102023<br>
            Kelas: A
        </p>
    </div>
</div>
@endsection
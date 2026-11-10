@extends('layouts.app')

@section('title', 'Pengelolaan Koleksi')

@section('content')
<x-navbar :username="$username" />

<div class="flex-1 max-w-5xl w-full mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Koleksi Film & Series</h1>
    <div class="bg-slate-800 rounded-2xl overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-700">
                <tr>
                    <th class="p-3">Judul</th>
                    <th class="p-3">Tahun</th>
                    <th class="p-3">Genre</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                <tr class="border-t border-slate-700">
                    <td class="p-3 font-medium">{{ $film['judul'] }}</td>
                    <td class="p-3">{{ $film['tahun'] }}</td>
                    <td class="p-3">{{ $film['genre'] }}</td>
                    <td class="p-3">
                        @if ($film['status'] == 'Sudah ditonton')
                            <span class="text-emerald-300">{{ $film['status'] }}</span>
                        @else
                            <span class="text-amber-300">{{ $film['status'] }}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@props (['username'])

<nav class="bg-slate-800 border-b border-slate-700">
    <div class="max-w-5xl mx-auto px-6 py-3 flex flex-wrap items-center justify-between gap-2">
        <span class="font-bold text-lg text-slate-100">FilmKu</span>
        <div class="flex flex-wrap gap-4 text-sm"> 
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-rose-400">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:text-rose-400">Koleksi</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-rose-400">Profil</a>
            <a href="{{ route('login') }}" class="hover:text-rose-400">Keluar</a>
        </div>
    
    </div>
</nav>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   private function daftarFilm(): array
   {
       return [
           ['judul' => 'Ngeri-Ngeri sedap', 'tahun' => 2022, 'genre' => 'Drama,Komedi', 'status' => 'Sudah ditonton'],
           ['judul' => 'Mencuri Raden Saleh', 'tahun' => 2022, 'genre' => 'Action,Crime', 'status' => 'Belum ditonton'],
           ['judul' => 'Keluarga Cemara', 'tahun' => 2019, 'genre' => 'Drama,Keluarga', 'status' => 'Belum ditonton'],
           ['judul' => 'Imperfect', 'tahun' => 2019, 'genre' => 'Drama, Komedi', 'status' => 'Sudah ditonton'],
           ['judul' => 'Agak Laen', 'tahun' => 2024, 'genre' => 'Komedi, Horor', 'status' => 'Sudah ditonton'],
           ['judul' => 'Petualangan Sherina 2', 'tahun' => 2023, 'genre' => 'Musikal, Petualangan', 'status' => 'Belum ditonton'],
           ['judul' => 'Ali & Ratu Ratu Queens', 'tahun' => 2021, 'genre' => 'Drama, Keluarga', 'status' => 'Belum ditonton'],
           ['judul' => 'Jatuh Cinta Seperti di Film-Film', 'tahun' => 2023, 'genre' => 'Romance, Drama', 'status' => 'Sudah ditonton'],
           ['judul' => 'My Nerd Girl', 'tahun' => 2022, 'genre' => 'Mystery, Drama', 'status' => 'Belum ditonton'],
          
       ];
   }

   public function index()
   {
       return view('login');
   }

    public function dashboard(Request $request)
    {
         $username = $request->input('username', 'Tamu');

         $films = $this->daftarFilm();
         $total = count($films);
         
         $sudah = count(array_filter($films, fn ($f) => $f['status'] === 'Sudah ditonton'));
         
         $belum = $total - $sudah;

         return view('dashboard', compact('username', 'films', 'total', 'sudah', 'belum'));

    }

    public function pengelolaan(Request $request)
    {
        $username = $request->input('username', 'Tamu');
        $films = $this->daftarFilm();

        return view('pengelolaan', compact('username', 'films'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username', 'Tamu');

        return view('profile', compact('username'));
    }
}

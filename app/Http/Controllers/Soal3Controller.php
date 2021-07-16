<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Soal3Controller extends Controller
{
    public function index()
    {
        $soal3no1 = DB::table('artis')
            ->join('film', 'artis.id_artis', '=', 'film.artis')
            ->where('artis.bayaran', '=', '(select min(bayaran) FROM artis')
            ->get();

        $soal3no2 = DB::table('film')
            ->join('artis', 'film.artis', '=', 'artis.id_artis')
            ->where('artis.nm_artis', 'LIKE', 'j%')
            ->get();


        $soal3no3 = DB::table('produser')
            ->select('produser.nm_produser', DB::raw('COUNT(film.produser) as jumlah'))
            ->leftjoin('film', 'produser.id_produser', '=', 'film.produser')
            ->groupBy('produser.nm_produser')
            ->get();

        $soal3no4 = DB::table('artis')
            ->select('artis.nm_artis')
            ->join('film', 'artis.id_artis', '=', 'film.artis')
            ->join('genre', 'film.genre', '=', 'genre.id_genre')
            ->where('genre.nm_genre', '=', 'HORROR')
            ->get();

        $data = [
            'soal1' => $soal3no1,
            'soal2' => $soal3no2,
            'soal3' => $soal3no3,
            'soal4' => $soal3no4
        ];

        // mengirim data pegawai ke view index
        return view('soal3', $data);
    }
}

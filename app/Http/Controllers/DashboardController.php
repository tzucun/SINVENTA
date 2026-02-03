<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alker;
use App\Models\Salker;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik ringkas
        $totalAlker = Alker::count();
        $totalSalker = Salker::count();

        // Kondisi Alker
        $totalBaikAlker = Alker::where('kondisi', 'Baik')->count();
        $totalRusakAlker = Alker::where('kondisi', 'Rusak')->count();
        $totalPerbaikanAlker = Alker::where('kondisi', 'Perbaikan')->count();

        // Kondisi Salker
        $totalBaikSalker = Salker::where('kondisi', 'Baik')->count();
        $totalRusakSalker = Salker::where('kondisi', 'Rusak')->count();
        $totalPerbaikanSalker = Salker::where('kondisi', 'Perbaikan')->count();

<<<<<<< HEAD
        // Jumlah Alker per kategori
=======
        // Jumlah Alker per kategori (Collection murni)
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5
        $kategoriAlker = Alker::groupBy('kategori')
            ->selectRaw('kategori, COUNT(*) as total')
            ->get()
            ->pluck('total', 'kategori');

<<<<<<< HEAD
        // Jumlah Salker per jenis
=======
        // Jumlah Salker per jenis (Collection murni)
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5
        $jenisSalker = Salker::groupBy('jenis')
            ->selectRaw('jenis, COUNT(*) as total')
            ->get()
            ->pluck('total', 'jenis');

        // Recent Alker/Salker (5 terakhir)
        $recentAlker = Alker::orderBy('created_at', 'desc')->take(5)->get();
        $recentSalker = Salker::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard', compact(
            'totalAlker',
            'totalSalker',
            'totalBaikAlker',
            'totalRusakAlker',
            'totalPerbaikanAlker',
            'totalBaikSalker',
            'totalRusakSalker',
            'totalPerbaikanSalker',
            'kategoriAlker',
            'jenisSalker',
            'recentAlker',
            'recentSalker'
        ));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index()
{
    $barangays = [
        ['name' => 'Caplihan',      'municipality' => 'Virac',   'population' => 5200],
        ['name' => 'Cabugao',   'municipality' => 'Bato',    'population' => 3100],
        ['name' => 'Binanuahan',     'municipality' => 'Bato',    'population' => 2600],
        ['name' => 'Francia',  'municipality' => 'Virac',  'population' => 4000],
        ['name' => 'Buenavista',    'municipality' => 'Bato',   'population' => 1800],
    ];

    return view('barangays.index', ['barangays' => $barangays]);
}
}

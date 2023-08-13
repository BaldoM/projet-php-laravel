<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact (string $nom = "Kazi", int $id = 1) {
            return "Bonjour " . $nom . ' et ton id est : ' . $id;
    }
}

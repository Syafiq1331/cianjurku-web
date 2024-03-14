<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function visiMisi()
    {
        return view('pages.guest.profil.visiMisi');
    }

    public function letakGeografis()
    {
        return view('pages.guest.profil.letakGeografis');
    }

    public function petaAdministrasi()
    {
        return view('pages.guest.profil.petaAdministratif');
    }
}

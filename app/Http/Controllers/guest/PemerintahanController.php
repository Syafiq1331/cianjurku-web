<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemerintahanController extends Controller
{
    public function profilBupati()
    {
        return view('pages.guest.pemerintahan.profileBupati');
    }

    public function profilWakilBupati()
    {
        return view('pages.guest.pemerintahan.profileWakilBupati');
    }

    public function sekretariatDaerah()
    {
        return view('pages.guest.pemerintahan.sekretariatDaerah');
    }

    public function dinas()
    {
        return view('pages.guest.pemerintahan.dinas');
    }
    public function badan()
    {
        return view('pages.guest.pemerintahan.badan');
    }
    public function inspektorDaerah()
    {
        return view('pages.guest.pemerintahan.inspektoratDaerah');
    }
    public function sekretariatDPRD()
    {
        return view('pages.guest.pemerintahan.sekretariatDPRD');
    }
    public function rsud()
    {
        return view('pages.guest.pemerintahan.rsud');
    }
    public function kecamatan()
    {
        return view('pages.guest.pemerintahan.kecamatan');
    }
}

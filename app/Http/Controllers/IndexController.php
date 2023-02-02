<?php

namespace App\Http\Controllers;

use App\Models\IndexModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->IndexModel = new IndexModel();
    }

    public function index()
    {
        $data = [
            'profil'=> $this -> IndexModel -> profilData(),
            'keahlian'=> $this -> IndexModel -> keahlianData(),
            'pendidikan'=> $this -> IndexModel -> pendidikanData(),
            'pengalaman'=> $this -> IndexModel -> pengalamanData(),
            'portofolio'=> $this -> IndexModel -> portofolioData(),
            'contact'=> $this -> IndexModel -> contactData(),
        ];
        return view('front.f_index', $data);
    }

    

}

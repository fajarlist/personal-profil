<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IndexModel extends Model
{
    public function profilData()
    {
        return DB::table('profil')->get();
    }

    public function keahlianData()
    {
        return DB::table('keahlian')->get();
    }

    public function pendidikanData()
    {
        return DB::table('pendidikan')->get();
    }

    public function pengalamanData()
    {
        return DB::table('pengalaman')->get();
    }

    public function portofolioData()
    {
        return DB::table('portofolio')->get();
    }

    public function contactData()
    {
        return DB::table('contact')->get();
    }
    
    public function addData($data)
    {
        DB::table('contact')->insert($data);
    }
}

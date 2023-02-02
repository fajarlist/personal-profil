<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PortofolioModel extends Model
{
    public function allData()
    {
        return DB::table('portofolio')->get();
    }

    public function detailData($id_portofolio)
    {
        return DB::table('portofolio')->where('id_portofolio', $id_portofolio)->first();
    }

    public function addData($data)
    {
        DB::table('portofolio')->insert($data);
    }

    public function editData($id_portofolio, $data)
    {
        DB::table('portofolio')->where('id_portofolio', $id_portofolio)->update($data);
    }

    public function deleteData($id_portofolio)
    {
        DB::table('portofolio')->where('id_portofolio', $id_portofolio)->delete();
    }
}

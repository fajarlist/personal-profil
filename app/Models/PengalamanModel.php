<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengalamanModel extends Model
{
    public function allData()
    {
        return DB::table('pengalaman')->get();
    }

    public function detailData($id_pengalaman)
    {
        return DB::table('pengalaman')->where('id_pengalaman', $id_pengalaman)->first();
    }

    public function addData($data)
    {
        DB::table('pengalaman')->insert($data);
    }

    public function editData($id_pengalaman, $data)
    {
        DB::table('pengalaman')->where('id_pengalaman', $id_pengalaman)->update($data);
    }

    public function deleteData($id_pengalaman)
    {
        DB::table('pengalaman')->where('id_pengalaman', $id_pengalaman)->delete();
    }

}

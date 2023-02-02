<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendidikanModel extends Model
{
    public function allData()
    {
        return DB::table('pendidikan')->get();
    }

    public function detailData($id_pendidikan)
    {
        return DB::table('pendidikan')->where('id_pendidikan', $id_pendidikan)->first();
    }

    public function addData($data)
    {
        DB::table('pendidikan')->insert($data);
    }

    public function editData($id_pendidikan, $data)
    {
        DB::table('pendidikan')->where('id_pendidikan', $id_pendidikan)->update($data);
    }

    public function deleteData($id_pendidikan)
    {
        DB::table('pendidikan')->where('id_pendidikan', $id_pendidikan)->delete();
    }

}

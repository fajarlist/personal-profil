<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KeahlianModel extends Model
{
    public function allData()
    {
        return DB::table('keahlian')->get();
    }

    public function detailData($id_keahlian)
    {
        return DB::table('keahlian')->where('id_keahlian', $id_keahlian)->first();
    }

    public function addData($data)
    {
        DB::table('keahlian')->insert($data);
    }

    public function editData($id_keahlian, $data)
    {
        DB::table('keahlian')->where('id_keahlian', $id_keahlian)->update($data);
    }

    public function deleteData($id_keahlian)
    {
        DB::table('keahlian')->where('id_keahlian', $id_keahlian)->delete();
    }
}

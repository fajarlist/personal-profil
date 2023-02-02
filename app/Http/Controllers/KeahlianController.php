<?php

namespace App\Http\Controllers;

use App\Models\KeahlianModel;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    public function __construct()
    {
        $this->KeahlianModel = new KeahlianModel();
    }

    public function index()
    {
        $data = [
            'keahlian'=> $this -> KeahlianModel -> allData(),
        ];
        return view('keahlian/keahlian', $data);
    }

    public function detail($id_keahlian)
    {
        if(!$this->KeahlianModel -> detailData($id_keahlian)){
            abort(404);
        }
        $data=[
            'keahlian'=>$this->KeahlianModel->detailData($id_keahlian),
        ];
        return view($data);
    }

    public function Add()
    {
        return view('keahlian/addkeahlian');
    }

    public function insert()
    {

        Request()->validate([
        'nama_keahlian'=>'required',
        'tingkat'=>'required',
        ]);

        $data =[
            'nama_keahlian' => Request()->nama_keahlian,
            'tingkat' => Request()->tingkat,
        ];

        $this -> KeahlianModel -> addData($data);

        return redirect() -> route('keahlian') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_keahlian)
    {
        if(!$this->KeahlianModel ->detailData($id_keahlian)){
        abort(404);
    }
        $data = [
            'keahlian'=> $this -> KeahlianModel -> detailData($id_keahlian),
        ];
        return view('keahlian.editkeahlian', $data);

    }

    public function update($id_keahlian)
    {

        Request()->validate([
        'nama_keahlian'=>'required',
        'tingkat'=>'required',
        ]);

        $data =[
            'nama_keahlian' => Request()->nama_keahlian,
            'tingkat' => Request()->tingkat,
        ];
        
        $this -> KeahlianModel -> editData($id_keahlian, $data);

        return redirect() -> route('keahlian') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_keahlian)
    {
        $this -> KeahlianModel -> deleteData($id_keahlian);
        return redirect() -> route('keahlian') -> with('pesan', 'Data berhasil dihapus');
    }
}

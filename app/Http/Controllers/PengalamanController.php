<?php

namespace App\Http\Controllers;

use App\Models\PengalamanModel;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function __construct()
    {
        $this->PengalamanModel = new PengalamanModel();
    }

    public function index()
    {
        $data = [
            'pengalaman'=> $this -> PengalamanModel -> allData(),
        ];
        return view('pengalaman/pengalaman', $data);
    }

    public function detail($id_pengalaman)
    {
        if(!$this->PengalamanModel -> detailData($id_pengalaman)){
            abort(404);
        }
        $data=[
            'pengalaman'=>$this->PengalamanModel->detailData($id_pengalaman),
        ];
        return view($data);
    }

    public function Add()
    {
        return view('pengalaman/addpengalaman');
    }

    public function insert()
    {

        Request()->validate([
        'nama_pengalaman'=>'required',
        'tahun'=>'required',
        'gambar_pengalaman'=>'required',
        'deskripsi_pengalaman'=>'required'
        ]);
        $file = Request()->gambar_pengalaman;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar_pengalaman';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_pengalaman' => Request()->nama_pengalaman,
            'tahun'=> Request()->tahun,
            'gambar_pengalaman' => $nama_file,
            'deskripsi_pengalaman' => Request()->deskripsi_pengalaman,
        ];

        $this -> PengalamanModel -> addData($data);

        return redirect() -> route('pengalaman') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_pengalaman)
    {
        if(!$this->PengalamanModel ->detailData($id_pengalaman)){
        abort(404);
    }
        $data = [
            'pengalaman'=> $this -> PengalamanModel -> detailData($id_pengalaman),
        ];
        return view('pengalaman.editpengalaman', $data);

    }

    public function update($id_pengalaman)
    {

        Request()->validate([
        'nama_pengalaman'=>'required',
        'tahun'=>'required',
        'gambar_pengalaman',
        'deskripsi_pengalaman'=>'required'
        ]);
        $file = Request()->gambar_pengalaman;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar_pengalaman';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_pengalaman' => Request()->nama_pengalaman,
            'tahun'=> Request()->tahun,
            'gambar_pengalaman' => $nama_file,
            'deskripsi_pengalaman' => Request()->deskripsi_pengalaman,
        ];

        $this -> PengalamanModel -> editData($id_pengalaman, $data);

        return redirect() -> route('pengalaman') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_pengalaman)
    {
        $this -> PengalamanModel -> deleteData($id_pengalaman);
        return redirect() -> to('pengalaman') -> with('pesan', 'Data berhasil dihapus');
    }
}

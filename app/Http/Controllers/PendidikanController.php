<?php

namespace App\Http\Controllers;

use App\Models\PendidikanModel;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function __construct()
    {
        $this->PendidikanModel = new PendidikanModel();
    }

    public function index()
    {
        $data = [
            'pendidikan'=> $this -> PendidikanModel -> allData(),
        ];
        return view('pendidikan/pendidikan', $data);
    }

    public function detail($id_pendidikan)
    {
        if(!$this->PendidikanModel -> detailData($id_pendidikan)){
            abort(404);
        }
        $data=[
            'pendidikan'=>$this->PendidikanModel->detailData($id_pendidikan),
        ];
        return view($data);
    }

    public function Add()
    {
        return view('pendidikan/addpendidikan');
    }

    public function insert()
    {

        Request()->validate([
        'nama_pendidikan'=>'required',
        'tahun'=>'required',
        'gambar_pendidikan'=>'required',
        'deskripsi_pendidikan'=>'required'
        ]);
        $file = Request()->gambar_pendidikan;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar_pendidikan';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_pendidikan' => Request()->nama_pendidikan,
            'tahun'=> Request()->tahun,
            'gambar_pendidikan' => $nama_file,
            'deskripsi_pendidikan' => Request()->deskripsi_pendidikan,
        ];

        $this -> PendidikanModel -> addData($data);

        return redirect() -> route('pendidikan') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_pendidikan)
    {
        if(!$this->PendidikanModel ->detailData($id_pendidikan)){
        abort(404);
    }
        $data = [
            'pendidikan'=> $this -> PendidikanModel -> detailData($id_pendidikan),
        ];
        return view('pendidikan.editpendidikan', $data);

    }

    public function update($id_pendidikan)
    {

        Request()->validate([
        'nama_pendidikan'=>'required',
        'tahun'=>'required',
        'gambar_pendidikan',
        'deskripsi_pendidikan'=>'required'
        ]);
        $file = Request()->gambar_pendidikan;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar_pendidikan';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_pendidikan' => Request()->nama_pendidikan,
            'tahun'=> Request()->tahun,
            'gambar_pendidikan' => $nama_file,
            'deskripsi_pendidikan' => Request()->deskripsi_pendidikan,
        ];

        $this -> PendidikanModel -> editData($id_pendidikan, $data);

        return redirect() -> route('pendidikan') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_pendidikan)
    {
        $this -> PendidikanModel -> deleteData($id_pendidikan);
        return redirect() -> to('pendidikan') -> with('pesan', 'Data berhasil dihapus');
    }
}

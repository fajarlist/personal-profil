<?php

namespace App\Http\Controllers;

use App\Models\PortofolioModel;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->PortofolioModel = new PortofolioModel();
    }

    public function index()
    {
        $data = [
            'portofolio'=> $this -> PortofolioModel -> allData(),
        ];
        return view('portofolio/portofolio', $data);
    }

    public function detail($id_portofolio)
    {
        if(!$this->PortofolioModel -> detailData($id_portofolio)){
            abort(404);
        }
        $data=[
            'portofolio'=>$this->PortofolioModel->detailData($id_portofolio),
        ];
        return view($data);
    }

    public function Add()
    {
        return view('portofolio/addportofolio');
    }

    public function insert()
    {

        Request()->validate([
        'nama_portofolio'=>'required',
        'deskripsi',
        'gambar_portofolio'=>'required',
        ]);
        $file = Request()->gambar_portofolio;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar_portofolio';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_portofolio' => Request()->nama_portofolio,
            'deskripsi'=>Request()->deskripsi,
            'gambar_portofolio' => $nama_file,
        ];

        $this -> PortofolioModel -> addData($data);

        return redirect() -> route('portofolio') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_portofolio)
    {
        if(!$this->PortofolioModel ->detailData($id_portofolio)){
        abort(404);
    }
        $data = [
            'portofolio'=> $this -> PortofolioModel -> detailData($id_portofolio),
        ];
        return view('portofolio.editportofolio', $data);

    }

    public function update($id_portofolio)
    {

        Request()->validate([
        'nama_portofolio'=>'required',
        'deskripsi'=>'requiered',
        'gambar_portofolio',
        ]);
        $file = Request()->gambar_portofolio;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar_portofolio';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_portofolio' => Request()->nama_portofolio,
            'deskripsi'=>Request()->deskripsi,
            'gambar_portofolio' => $nama_file,
        ];

        $this -> PortofolioModel -> editData($id_portofolio, $data);

        return redirect() -> route('portofolio') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_portofolio)
    {
        $this -> PortofolioModel -> deleteData($id_portofolio);
        return redirect() -> route('portofolio') -> with('pesan', 'Data berhasil dihapus');
    }
}

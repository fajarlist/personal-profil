<?php

namespace App\Http\Controllers;

use App\Models\ProfilModel;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
    }

    public function index()
    {
        $data = [
            'profil'=> $this -> ProfilModel -> allData(),
        ];
        return view('profil/profil', $data);
    }

    public function detail($id_profil)
    {
        if(!$this->ProfilModel -> detailData($id_profil)){
            abort(404);
        }
        $data=[
            'profil'=>$this->ProfilModel->detailData($id_profil),
        ];
        return view($data);
    }

    public function Add()
    {
        return view('profil/addprofil');
    }

    public function insert()
    {

        Request()->validate([
        'title_profil'=>'required',
        'foto_profil'=>'required',
        'deskripsi_profil'=>'required',
        'lahir'=>'required',
        'hp'=>'required',
        'email_profil'=>'required',
        'alamat'=>'required',
        ]);
        $file = Request()->foto_profil;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'foto_profil';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'title_profil' => Request()->title_profil,
            'foto_profil' => $nama_file,
            'deskripsi_profil' => Request()->deskripsi_profil,
            'lahir' => Request()->lahir,
            'hp' => Request()->hp,
            'email_profil' => Request()->email_profil,
            'alamat' => Request()->alamat,
        ];

        $this -> ProfilModel -> addData($data);

        return redirect() -> route('profil') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_profil)
    {
        if(!$this->ProfilModel ->detailData($id_profil)){
        abort(404);
    }
        $data = [
            'profil'=> $this -> ProfilModel -> detailData($id_profil),
        ];
        return view('profil.editprofil', $data);

    }

    public function update($id_profil)
    {

        Request()->validate([
        'title_profil'=>'required',
        'foto_profil',
        'deskripsi_profil'=>'required',
        'lahir'=>'required',
        'hp'=>'required',
        'email_profil'=>'required',
        'alamat'=>'required',
        ]);
        $file = Request()->foto_profil;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'foto_profil';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'title_profil' => Request()->title_profil,
            'foto_profil' => $nama_file,
            'deskripsi_profil' => Request()->deskripsi_profil,
            'lahir' => Request()->lahir,
            'hp' => Request()->hp,
            'email_profil' => Request()->email_profil,
            'alamat' => Request()->alamat,

        ];

        $this -> ProfilModel -> editData($id_profil, $data);

        return redirect() -> route('profil') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_profil)
    {
        $this -> ProfilModel -> deleteData($id_profil);
        return redirect() -> to('profil') -> with('pesan', 'Data berhasil dihapus');
    }
}

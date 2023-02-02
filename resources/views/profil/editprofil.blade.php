@extends('layout/v_template')
@section('title','Add profil')
@section('content')

<form action="/profil/update/{{ $profil->id_profil }}" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> UBAH PROFIL </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">title profil</label>
                <input name="title_profil" class="form-control" value="{{ $profil->title_profil }}">
                <div class="text-denger">
                    @error('title_profil')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi profil</label>
                <input name="deskripsi_profil" class="form-control" value="{{ $profil->deskripsi_profil }}">
                <div class="text-denger">
                    @error('deskripsi_profil')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="lahir" class="form-control" value="{{ $profil->lahir }}">
                <div class="text-denger">
                    @error('lahir')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Hp</label>
                <input name="hp" class="form-control" value="{{ $profil->hp }}">
                <div class="text-denger">
                    @error('hp')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi profil</label>
                <input name="email_profil" class="form-control" value="{{ $profil->email_profil }}">
                <div class="text-denger">
                    @error('email_profil')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Alamat</label>
                <input name="alamat" class="form-control" value="{{ $profil->alamat }}">
                <div class="text-denger">
                    @error('alamat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Gambar Profil</label>
                <div>
                    <img src="{{ asset('foto_profil/'. $profil->foto_profil) }}" alt="" style="width:100px">
                </div>
                <div>
                    <input type="file" name="foto_profil" id="foto_profil" accept=".png, .jpg, .jpeg" value="{{ $profil->foto_profil }}">
                </div>
                <div class="text-denger">
                    @error('foto_profil')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

    <div>
        <div class="form-grup">
            <button class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </div>
    </div>
</div>
</form>

@endsection


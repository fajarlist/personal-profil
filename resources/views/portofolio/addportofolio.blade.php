@extends('layout/v_template')
@section('nama','Add portofolio')
@section('content')

<form action="/portofolio/insert" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> TAMBAH PORTOFOLIO </h4>
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama Portofolio</label>
                <input name="nama_portofolio" class="form-control" value="{{ old('nama_portofolio')}}">
                <div class="text-denger">
                    @error('nama_portofolio')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Deskripsi</label>
                <input name="deskripsi" class="form-control" value="{{ old('deskripsi')}}">
                <div class="text-denger">
                    @error('deskripsi')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Gambar Portofolio</label>
                <div>
                    <input type="file" name="gambar_portofolio" id="gambar_portofolio" accept=".png, .jpg, .jpeg" value="{{ old('gambar_portofolio')}}">
                </div>
                <div class="text-denger">
                    @error('gambar_portofolio')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-grup">
            <button class="btn btn-primary btn-sm">Simpan</button>
        </div>

    </div>
</div>
</form>

@endsection


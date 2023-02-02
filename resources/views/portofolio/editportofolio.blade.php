@extends('layout/v_template')
@section('nama','Add portofolio')
@section('content')

<form action="/portofolio/update/{{ $portofolio->id_portofolio }}" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> UBAH PORTOFOLIO </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">nama Portofolio</label>
                <input name="nama_portofolio" class="form-control" value="{{ $portofolio->nama_portofolio }}">
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
                <input name="deskripsi" class="form-control" value="{{ $portofolio->deskripsi }}">
                <div class="text-denger">
                    @error('deskripsi')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Gambar Portofolio</label>
                <div>
                    <img src="{{ asset('gambar_portofolio/'. $portofolio->gambar_portofolio) }}" alt="" style="width:100px">
                </div>
                <div>
                    <input type="file" name="gambar_portofolio" id="gambar_portofolio" accept=".png, .jpg, .jpeg" value="{{ $portofolio->gambar_portofolio }}">
                </div>
                <div class="text-denger">
                    @error('gambar_portofolio')
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


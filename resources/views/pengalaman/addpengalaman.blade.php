@extends('layout/v_template')
@section('nama','Add pengalaman')
@section('content')

<form action="/pengalaman/insert" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> TAMBAH PENGALAMAN </h4>
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama pengalaman</label>
                <input name="nama_pengalaman" class="form-control" value="{{ old('nama_pengalaman')}}">
                <div class="text-denger">
                    @error('nama_pengalaman')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Tahun</label>
                <input name="tahun" class="form-control" value="{{ old('tahun')}}">
                <div class="text-denger">
                    @error('tahun')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi pengalaman</label>
                <input name="deskripsi_pengalaman" class="form-control" value="{{ old('deskripsi_pengalaman')}}">
                <div class="text-denger">
                    @error('deskripsi_pengalaman')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Gambar pengalaman</label>
                <div>
                    <input type="file" name="gambar_pengalaman" id="gambar_pengalaman" accept=".png, .jpg, .jpeg" value="{{ old('gambar_pengalaman')}}">
                </div>
                <div class="text-denger">
                    @error('gambar_pengalaman')
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


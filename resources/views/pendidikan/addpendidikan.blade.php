@extends('layout/v_template')
@section('nama','Add pendidikan')
@section('content')

<form action="/pendidikan/insert" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> TAMBAH PENDIDIKAN </h4>
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama pendidikan</label>
                <input name="nama_pendidikan" class="form-control" value="{{ old('nama_pendidikan')}}">
                <div class="text-denger">
                    @error('nama_pendidikan')
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
                <label for="">Deskripsi pendidikan</label>
                <input name="deskripsi_pendidikan" class="form-control" value="{{ old('deskripsi_pendidikan')}}">
                <div class="text-denger">
                    @error('deskripsi_pendidikan')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Gambar pendidikan</label>
                <div>
                    <input type="file" name="gambar_pendidikan" id="gambar_pendidikan" accept=".png, .jpg, .jpeg" value="{{ old('gambar_pendidikan')}}">
                </div>
                <div class="text-denger">
                    @error('gambar_pendidikan')
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


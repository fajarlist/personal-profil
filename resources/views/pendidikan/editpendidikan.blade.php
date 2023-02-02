@extends('layout/v_template')
@section('nama','Add pendidikan')
@section('content')

<form action="/pendidikan/update/{{ $pendidikan->id_pendidikan }}" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> UBAH PENDIDIKAN </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">Nama pendidikan</label>
                <input name="nama_pendidikan" class="form-control" value="{{ $pendidikan->nama_pendidikan }}">
                <div class="text-denger">
                    @error('nama_pendidikan')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi pendidikan</label>
                <input name="deskripsi_pendidikan" class="form-control" value="{{ $pendidikan->deskripsi_pendidikan }}">
                <div class="text-denger">
                    @error('deskripsi_pendidikan')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Tahun</label>
                <input name="tahun" class="form-control" value="{{ $pendidikan->tahun }}">
                <div class="text-denger">
                    @error('tahun')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Gambar pendidikan</label>
                <div>
                    <img src="{{ asset('gambar_pendidikan/'. $pendidikan->gambar_pendidikan) }}" alt="" style="width:100px">
                </div>
                <div>
                    <input type="file" name="gambar_pendidikan" id="gambar_pendidikan" accept=".png, .jpg, .jpeg" value="{{ $pendidikan->gambar_pendidikan }}">
                </div>
                <div class="text-denger">
                    @error('gambar_pendidikan')
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


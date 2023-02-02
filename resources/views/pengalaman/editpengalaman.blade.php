@extends('layout/v_template')
@section('nama','Add pengalaman')
@section('content')

<form action="/pengalaman/update/{{ $pengalaman->id_pengalaman }}" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> UBAH PENGALAMAN </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">Nama Pengalaman</label>
                <input name="nama_pengalaman" class="form-control" value="{{ $pengalaman->nama_pengalaman }}">
                <div class="text-denger">
                    @error('nama_pengalaman')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi Pengalaman</label>
                <input name="deskripsi_pengalaman" class="form-control" value="{{ $pengalaman->deskripsi_pengalaman }}">
                <div class="text-denger">
                    @error('deskripsi_pengalaman')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Tahun</label>
                <input name="tahun" class="form-control" value="{{ $pengalaman->tahun }}">
                <div class="text-denger">
                    @error('tahun')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Gambar pengalaman</label>
                <div>
                    <img src="{{ asset('gambar_pengalaman/'. $pengalaman->gambar_pengalaman) }}" alt="" style="width:100px">
                </div>
                <div>
                    <input type="file" name="gambar_pengalaman" id="gambar_pengalaman" accept=".png, .jpg, .jpeg" value="{{ $pengalaman->gambar_pengalaman }}">
                </div>
                <div class="text-denger">
                    @error('gambar_pengalaman')
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


@extends('layout/v_template')
@section('nama','Add keahlian')
@section('content')

<form action="/keahlian/update/{{ $keahlian->id_keahlian }}" method="POST">
@csrf
<h4 style="text-align: center;"> UBAH KEAHLIAN </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">nama keahlian</label>
                <input name="nama_keahlian" class="form-control" value="{{ $keahlian->nama_keahlian }}">
                <div class="text-denger">
                    @error('nama_keahlian')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">tingkat keahlian</label>
                <input name="tingkat" class="form-control" value="{{ $keahlian->tingkat }}">
                <div class="text-denger">
                    @error('tingkat')
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


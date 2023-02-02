@extends('layout/v_template')
@section('title','Add profil')
@section('content')


@if (session('pesan'))
    <div class="alert alert-succes alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>Success!</h5>
        {{ session ('pesan') }}.
    </div>
@endif
    <h4 style="text-align: center;">DATA PROFIL</h4><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama profil</th>
                <th>Gambar profil</th>
                <th>Deskripsi profil</th>
                <th>Tanggal Lahir</th>
                <th>Hp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            <?php $no=1; ?>
            @foreach ($profil as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data-> title_profil }}</td>
                    <td><img src="{{ asset('foto_profil/'. $data->foto_profil) }}" alt="" style="width:100px"></td>
                    <td>{{ $data-> deskripsi_profil }}</td>
                    <td>{{ $data-> lahir }}</td>
                    <td>{{ $data-> hp }}</td>
                    <td>{{ $data-> email_profil }}</td>
                    <td>{{ $data-> alamat }}</td>
                    <td>
                        <a href="/profil/{{ $data -> id_profil }}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit nav-icon"></i></a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $data->id_profil }}">
                            <i class="fa fa-trash nav-icon"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    <a href="/profil/add" class="btn btn-primary btn-sm">Tambah</a>


    @foreach ($profil as $data)
    <div class="modal fade" id="delete{{ $data->id_profil }}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                <h4 class="modal-title">{{ $data->title_profil }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini..?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal" >No</button>
                    <button><a href="/profil/delete/{{ $data->id_profil }}" class="btn btn-outline-light">Yes</a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
            
               
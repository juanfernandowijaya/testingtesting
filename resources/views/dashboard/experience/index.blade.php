@extends('dashboard.layout')

@section('content')
    <p class="card-title">Experience</p>
    <div class="pb-3">
        <a href="{{route('experience.create')}}" class="btn btn-primary">+ Tambah Experience</a>
    </div>
    <div class="table-responsive">
    <table class="table table-stipped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th class="">Posisi</th>
                <th class="">Nama Perusahaan</th>
                <th class="">Tanggal Mulai</th>
                <th class="">Tanggal Akhir</th>
                <th class="col-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($data as $d)
            <tr>
                <td>{{$i}}</td>
                <td>{{$d->judul}}</td>
                <td>{{$d->info1}}</td>
                <td>{{$d->tgl_mulai_indo}}</td>
                <td>{{$d->tgl_akhir_indo}}</td>
                <td>
                    <a href="{{route('experience.edit', $d->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Yakin Mau Hapus data ini?')" action="{{route('experience.destroy', $d->id)}}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
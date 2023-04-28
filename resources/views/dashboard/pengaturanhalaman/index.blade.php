@extends('dashboard.layout')

@section('content')
    <form action="{{ route('pengaturanhalaman.update') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="" class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_about">
                    <option value="">-pilih-</option>
                    @foreach($dataHalaman as $dh)
                    <option value="{{$dh->id}}" {{get_meta_value('_halaman_about') == $dh->id ? 'selected' : ''}}>{{$dh->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_interest">
                    <option value="">-pilih-</option>
                    @foreach($dataHalaman as $dh)
                    <option value="{{$dh->id}}" {{get_meta_value('_halaman_interest') == $dh->id ? 'selected' : ''}}>{{$dh->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2">Awards</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_awards">
                    <option value="">-pilih-</option>
                    @foreach($dataHalaman as $dh)
                    <option value="{{$dh->id}}" {{get_meta_value('_halaman_awards') == $dh->id ? 'selected' : ''}}>{{$dh->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
@push('child-scripts')

@endpush
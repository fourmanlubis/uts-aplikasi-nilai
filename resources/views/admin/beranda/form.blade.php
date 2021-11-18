@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Input nilai</h1>
        <hr>
        <form action="{{ isset($berita)?route("admin.beranda.update",$beranda):route("admin.beranda.nilai") }}"
            autocomplete="off" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">nim</label>
                <select name="nim" id="" class="form-control @error('nim') is-invalid @enderror">
                @foreach ($nim as $item)
                    <option value="{{ $item->id }}"
                        @isset($beranda)
                            @if ($beranda->matakuliah_id == $item->id)
                                {{ "selected" }}
                            @endif
                        @endisset>{{ $item->nama_matakuliah }}</option>
                @endforeach
                </select>
                @error('matakuliah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">nama mahasiswa</label>
                <input type="text" name="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ isset($berita)?$berita->judul:old("nama") }}" />
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="">Mata kuliah</label>
                <textarea name="matakuliah" 
                    class="form-control @error('mata kuliah') is-invalid @enderror">{{ isset($beranda)?$beranda->matakuliah:old("matakuliah") }}</textarea>
                @error('matakuliah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group d-flex flex-row-reverse">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </div>
@endsection
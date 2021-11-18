@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $beranda->nama }}</h1>
        {{ $beranda->nim }}
    </p>

    <h2>{{ $beranda->nilai>count() }}</h2>
    <hr>
    @auth
    <form action="{{ route("simpan.nilai") }}" method="POST" autocomplete="off">
        @csrf
        <input type="hidden" name="matakuliah" value="{{ $berita->id }}">
        <
            <input type="submit" value="input nilai" class="btn btn-success">
        </div>
    </form>
    @endauth
    <ul class="list-unstyled">
        @foreach ($berita->mahasiswa as $item)
        @endforeach
    </ul>
</div>
@endsection
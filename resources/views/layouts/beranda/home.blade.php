@extends('layouts.app')

@section('navbar-matakuliah')
<div class="container">
    <ul class="nav border rounded bg-primary mt-4">
        @foreach ($kategori as $item)
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route("matakuliah",["matakuliah_id" => $item->id]) }}">
                {{ $item->nama_matakuliah }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection

@section('content')
    <div class="container">
        <h1>Halaman siswa</h1>
        <hr>
       
        @endforeach
        <div class="float-right">
            {{ $beranda->links() }}
        </div>
    </div>
@endsection
@extends('template.master')

@section('head')
<div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tables</li>
        </ol>
    </nav>
    </div>
    <div class="col-lg-6 col-5 text-right">
    <a href="{{ route('berita.tambah') }}" class="btn btn-sm btn-neutral">Tambah</a>
    {{-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> --}}
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
            <h3 class="mb-0">Light table</h3>
            </div>
            <div class="card-body">
                <h1>{{ $data->judul }}</h1>
                <h1>{{ $data->kategori }}</h1>
                <hr>
                {!! $data->konten !!}
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">

            </div>
        </div>
    </div>
</div>
@endsection
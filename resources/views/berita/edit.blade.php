
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
    <a href="#" class="btn btn-sm btn-neutral">Tambah</a>
    {{-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> --}}
    </div>
@endsection

@section('content')
<div class="row justify-content-center">
<div class="col-lg-8 card-wrapper">
    <!-- Grid system -->
    <div class="card">
    <div class="card-header">
        <h3 class="mb-0">Grid system</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('berita.update', $data->id) }}" method="post" enctype="multipart/form-data">   
            @csrf 
            <div class="col-sm-12">
                <div class="form-group">
                <label class="form-control-label">Judul Berita</label>
                <input type="text" class="form-control" name="judul" name="judul" value="{{ $data->judul }}">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                <label class="form-control-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" name="kategori" value="{{ $data->kategori }}">
                </div>
            </div>
            <div class="col-sm-12">
                <textarea id="summernote" name="konten">{!! $data->konten !!}</textarea>
            </div>
            <div class="col-sm-12">
                <a href="/" class="btn btn-warning mt-3" >Kembali</a>
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
@endsection
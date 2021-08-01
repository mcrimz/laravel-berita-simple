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

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                    <th scope="col" class="sort">No</th>
                    <th scope="col" class="sort">Judul</th>
                    <th scope="col">Label</th>
                    <th scope="col" class="sort">Konten</th>
                    <th scope="col" class="sort">Aksi</th>
                </tr>
            </thead>
            <tbody class="list">
                    @php $no = 1; @endphp
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->kategori }}</td>
                        <td>{!! \Illuminate\Support\Str::limit(strip_tags($data->konten), 50,'...') !!}</td>
                        <td>
                            <a href="{{ route('berita.view', $data->id) }}" class="btn btn-primary">lihat</a>
                            <a href="{{ route('berita.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('berita.destroy', $data->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
            <!-- Card footer -->
            <div class="card-footer py-4">

            </div>
        </div>
    </div>
</div>
@endsection
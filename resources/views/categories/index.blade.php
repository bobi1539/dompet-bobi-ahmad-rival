@extends('layouts.dashboard')

@section('main-dashboard')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/categories/create" class="btn btn-sm btn-outline-secondary">
                Buat Baru
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (session()->has('messageSuccess'))
                <div id="flash-data-success" data-flashdata="{{ session('messageSuccess') }}"></div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="category-table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">DESKRIPSI</th>
                            <th scope="col">STATUS</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categories as $category)

                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->categoryStatus->name }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="/categories/{{ $category->id }}">Detail</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/categories/{{ $category->id }}/edit">Ubah</a>
                                            </li>
                                            <form action="/categories/{{ $category->id }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                @if ($category->categoryStatus->id == 1)
                                                    <li>
                                                        <input type="hidden" name="category_status_id" value="2">
                                                        <button class="dropdown-item">
                                                            Tidak Aktif
                                                        </button>
                                                    </li>
                                                @else
                                                    <li>
                                                        <input type="hidden" name="category_status_id" value="1">
                                                        <button class="dropdown-item">
                                                            Aktif
                                                        </button>
                                                    </li>
                                                @endif
                                            </form>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

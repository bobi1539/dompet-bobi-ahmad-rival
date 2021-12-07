@extends('layouts.dashboard')

@section('main-dashboard')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dompet</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/pockets/create" class="btn btn-sm btn-outline-secondary">
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
                <table class="table table-bordered" id="pocket-table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">REFERENSI</th>
                            <th scope="col">DESKRIPSI</th>
                            <th scope="col">STATUS</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pockets as $pocket)

                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $pocket->name }}</td>
                                <td>{{ $pocket->reference }}</td>
                                <td>{{ $pocket->description }}</td>
                                <td>{{ $pocket->pocketStatus->name }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="/pockets/{{ $pocket->id }}">Detail</a>
                                            </li>
                                            <li><a class="dropdown-item" href="/pockets/{{ $pocket->id }}/edit">Ubah</a></li>
                                            @if ($pocket->pocketStatus->id == 1)
                                                <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
                                            @else
                                                <li><a class="dropdown-item" href="#">Aktif</a></li>
                                            @endif
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

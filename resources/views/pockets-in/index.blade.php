@extends('layouts.dashboard')

@section('main-dashboard')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dompet Masuk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/transactions-in/create" class="btn btn-sm btn-outline-secondary">
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
                            <th scope="col">TANGGAL</th>
                            <th scope="col">KODE</th>
                            <th scope="col">DESKRIPSI</th>
                            <th scope="col">KATEGORI</th>
                            <th scope="col">NILAI</th>
                            <th scope="col">DOMPET</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pocketsIn as $pocketIn)

                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ date('d-m-Y', strtotime($pocketIn->date)) }}</td>
                                <td>{{ $pocketIn->code }}</td>
                                <td>{{ $pocketIn->description }}</td>
                                <td>{{ $pocketIn->category->name }}</td>
                                <td>{{ number_format($pocketIn->value, 0, ',', '.') }}</td>
                                <td>{{ $pocketIn->pocket->name }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item"
                                                    href="/transactions-in/{{ $pocketIn->id }}">Detail</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="/transactions-in/{{ $pocketIn->id }}/edit">Ubah</a>
                                            </li>
                                            <form action="/transactions-in/{{ $pocketIn->id }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                @if ($pocketIn->transactionStatus->id == 1)
                                                    <li>
                                                        <input type="hidden" name="pocket_status_id" value="2">
                                                        <button class="dropdown-item">
                                                            Tidak Aktif
                                                        </button>
                                                    </li>
                                                @else
                                                    <li>
                                                        <input type="hidden" name="pocket_status_id" value="1">
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

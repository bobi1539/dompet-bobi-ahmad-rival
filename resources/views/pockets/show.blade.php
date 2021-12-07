@extends('layouts.dashboard')

@section('main-dashboard')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Dompet</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div> --}}
            <a href="/pockets" class="btn btn-sm btn-outline-secondary">Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td>{{ $pocket->name }}</td>
                    </tr>
                    <tr>
                        <td>REFERENSI</td>
                        <td>:</td>
                        <td>{{ $pocket->reference }}</td>
                    </tr>
                    <tr>
                        <td>DESKRIPSI</td>
                        <td>:</td>
                        <td>{{ $pocket->description }}</td>
                    </tr>
                    <tr>
                        <td>STATUS</td>
                        <td>:</td>
                        <td>{{ $pocket->pocketStatus->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@extends('layouts.dashboard')

@section('main-dashboard')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/categories" class="btn btn-sm btn-outline-secondary">
                Kembali
            </a>
        </div>
    </div>
    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="name" class="form-label">NAMA</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        minlength="5" required value="{{ old('name', $category->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="description" class="form-label">DESKRIPSI</label>
                    <textarea class="form-control" id="description" rows="3" name="description" maxlength="100"
                        value="{{ old('description', $category->description) }}">{{ old('description', $category->description) }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="category_status_id" class="form-label">STATUS</label>
                    <select name="category_status_id" class="form-select" id="category_status_id"
                        onchange="handlePosition()">
                        @foreach ($statuses as $status)
                            @if (old('category_status_id', $category->category_status_id) == $status->id)
                                <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
                            @else
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

@endsection

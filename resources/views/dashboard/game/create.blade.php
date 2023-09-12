@extends('dashboard.index')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('game.index') }}" class="text-decoration-none">Games</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data" class="mb-3">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Game</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly>
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Mata Uang Game</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputType" class="form-label">Jenis Form</label>
            <select class="form-select" aria-label="Default select example" id="inputType" name="inputType">
                <option selected value="id-only">Hanya ID</option>
                <option value="id-and-server">ID Dan Server</option>
            </select>
        </div>
        <div class="row g-2">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo Game</label>
                    <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo">
                    @error('logo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="banner" class="form-label">Banner Game</label>
                    <input class="form-control @error('banner') is-invalid @enderror" type="file" id="banner" name="banner">
                    @error('banner')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="topup" name="topup">
                    <label class="form-check-label" for="topup">
                        Top Up
                    </label>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="joki" name="joki">
                    <label class="form-check-label" for="joki">
                        Jasa Joki
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary w-25">Submit</button>
    </form>
@endsection

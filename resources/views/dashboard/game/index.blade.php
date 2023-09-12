@extends('dashboard.index')

@section('add')
    <a href="{{ route('game.create') }}" class="btn btn-success pt-1 rounded-3"><i class="bi bi-plus-circle fs-5 me-2"></i> Add New Game</a>
@endsection

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Games</li>
        </ol>
    </nav>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Game</th>
                    <th scope="col">Logo Game</th>
                    <th scope="col">Banner Game</th>
                    <th scope="col">Mata Uang Game</th>
                    <th scope="col">Top Up</th>
                    <th scope="col">Jasa Joki</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($games as $game)
                    <tr class="table-body">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $game->name }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $game->logo) }}" alt="" width="45" height="45">
                        </td>
                        <td>
                            <img src="{{ asset('storage/'. $game->banner) }}" alt="No Banner" width="83" height="45">
                        </td>
                        <td>{{ $game->type }}</td>
                        <td>
                            @if ($game->topup == 1)
                                <i class="bi bi-check fs-3 text-success"></i>
                            @else
                                <i class="bi bi-x fs-3 text-danger"></i>
                            @endif
                        </td>
                        <td>
                            @if ($game->joki == 1)
                                <i class="bi bi-check fs-3 text-success"></i>
                            @else
                                <i class="bi bi-x fs-3 text-danger"></i>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-primary pt-1 mt-1">View</a>
                            <a href="" class="btn btn-outline-success pt-1 mt-1">Edit</a>
                            <a href="" class="btn btn-outline-danger pt-1 mt-1">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

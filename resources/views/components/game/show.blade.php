@extends('welcome')

@section('content')
    <div class="img-banner">
        <img src="{{ $games->banner }}" class="banner-img" alt="{{ $games->banner }}">
    </div>
    <div class="row justify-content-between px-2 g-4">
        <div class="col-lg-4">
            <div class="card selection">
                <div class="card-body about-game">
                    <div class="game">
                        <img src="{{ $games->image }}" alt="">
                        <div class="game-title">
                            <h5>{{ $games->name }}</h5>
                            <small class="text-secondary fst-italic">{{ $games->type }}</small>
                        </div>
                    </div>
                    <div class="game-desc">
                        <p>Cara Top up {{ $games->type }} {{ $games->name }} :</p>
                        <small>
                            1. Masukkan ID dan Server
                            <br>
                            2. Pilih nominal diamond
                            <br>
                            3. pilih metode pembayaran
                            <br>
                            4. klik order now & lakukan pembayaran segera
                            <br>
                            5. {{ $games->type }} akan masuk otomatis ke akun anda
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card selection">
                <div class="card-body">
                    <div class="top-up-header">
                        <h5 class="mb-0"><span>1</span> Masukkan ID</h5>
                    </div>
                    <div class="top-up-form">
                        <form action="">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="id" placeholder="ID Game">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="server" placeholder="Server">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card selection">
                <div class="card-body">
                    <div class="nominal-header">
                        <h5 class="mb-0"><span>2</span> Pilih Nominal {{ $games->name }}</h5>
                    </div>
                    <div class="nominal-body">
                        <div class="row">
                            <h4>Items</h4>
                            <div class="col-3">
                                <div class="btn btn-outline-secondary form-check text-start">
                                    <input class="form-check-input input-nominal" type="checkbox" value="" id="nominal-1">
                                    <label class="form-check-label" for="nominal-1">
                                      Default checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-outline-secondary form-check text-start">
                                    <input class="form-check-input input-nominal" type="checkbox" value="" id="nominal-2">
                                    <label class="form-check-label" for="nominal-2">
                                      Default checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="btn btn-outline-secondary form-check text-start">
                                    <input class="form-check-input input-nominal" type="checkbox" value="" id="nominal-3">
                                    <label class="form-check-label" for="nominal-3">
                                      Default checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="method">
            <h5>Metode Pembayaran</h5>
            <div class="row g-2">
                <div class="col-4">
                    <button class="btn"><img src="../img/dana.png" alt=""></button>
                </div>
                <div class="col-4">
                    <button class="btn"><img src="../img/ovo.png" alt=""></button>
                </div>
                <div class="col-4">
                    <button class="btn"><img src="../img/dana.png" alt=""></button>
                </div>
                <div class="col-4">
                    <button class="btn"><img src="../img/dana.png" alt=""></button>
                </div>
            </div>
        </div>
        <div class="note small ms-1">
            <p class="note-head mb-1">Catatan : </p>
            <p class="note-body">
                1. Harap isi ID Game dan Server dengan sesuai.
                <br>
                2. Lihat ID Game dan server dari profile in game kalian.
                <br>
                3. Setelah membeli, lakukan pembayaran sesuai dengan jumlah nominal dan metode pembayaran.
                <br>
                4. Jika terjadi error ketika melakukan pembelian, cobalah untuk me-refresh halaman.
                <br>
                5. Periksa kembali ID dan Server game.
                <br>
                6. Jika ada pertanyaan lebih lanjut, silahkan hubungi <a href="">Costumer Service</a>
            </p>
        </div>
    </div>
@endsection

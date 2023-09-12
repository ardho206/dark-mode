@extends('welcome')

@section('content')
    <div class="option">
        <button class="btn me-2" onclick="showContent('top-up')">Top Up</button>
        <button class="btn" onclick="showContent('joki')">Joki</button>
    </div>
    <div class="top-up @if($activeContent === 'top-up') active-content @endif">
        <h2>Top Up</h2>
    </div>
    <div class="joki">
        <h2>Joki</h2>
    </div>
@endsection

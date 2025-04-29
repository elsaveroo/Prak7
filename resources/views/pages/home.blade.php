@extends('layouts.app')

@section('title', 'Festify')
@section('page_title', 'Selamat Datang di Festify')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Siap Nonton Konser?</h1>
    <p class="mb-4">Dapatkan semua perlengkapan konser terbaik untuk pengalaman yang tak terlupakan hanya di Festify!</p>

    @include('components.card', [
        'imgsrc' => 'images/logofestify.png',
        'title' => 'Festify - Sewa Perlengkapan Konser Terlengkap',
        'desc' => 'Festify adalah platform penyewaan kebutuhan konser yang menyediakan berbagai peralatan seperti lightstick, kamera, hingga aksesoris lainnya. Kami hadir untuk membuat momen konser Anda semakin spesial. Jelajahi koleksi kami dan nikmati konser favorit Anda dengan lebih maksimal!'
    ])
@endsection

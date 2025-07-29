@extends('layouts.main')

@section('title', 'Contact Baherindo Motor')

@section('content')
<div class="max-w-xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-6">Hubungi Kami</h1>

    <div class="space-y-4 text-lg">
        <p><b>Alamat:</b> Jl. Raya Bekasi, Bekasi Timur</p>
        <p><b>Telepon:</b> 081234567890</p>
        <p><b>Email:</b> @baherindomotor.com</p>
        <p><b>Jam Operasional:</b> Senin - Sabtu, 09.00 - 17.00</p>
    </div>

    <div class="mt-6">
        <iframe 
            class="w-full h-64 border"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3271548776445!2d106.99241671536525!3d-6.217336195501108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d2ab7d5cf1f%3A0x7d5f79d121d82c3f!2sBekasi!5e0!3m2!1sen!2sid!4v1628268418360!5m2!1sen!2sid" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>
@endsection

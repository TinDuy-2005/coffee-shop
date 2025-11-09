@extends('layouts.app')

@section('content')
<style>
    .detail-container {
        max-width: 700px;
        margin: 60px auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        text-align: center;
    }

    .detail-container img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .detail-container h2 {
        color: #4a2e1f;
        font-size: 28px;
        margin-bottom: 10px;
    }

    .detail-container p {
        color: #333;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        color: #4a2e1f;
        text-decoration: underline;
    }
</style>

<div class="detail-container">
    <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}">
    <h2>{{ $drink['name'] }}</h2>
    <p>{{ $drink['description'] }}</p>
    <p><strong>Giá:</strong> {{ $drink['price'] }} VND</p>
    <a href="{{ url('/menu') }}" class="back-link">← Quay lại Thực đơn</a>
</div>
@endsection
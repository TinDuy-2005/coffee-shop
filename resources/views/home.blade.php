@extends('layouts.app')

@section('content')
<style>
    /* Toàn bộ trang căn giữa */
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f7f4;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    /* Khối chứa lưới món */
    .grid {
        display: flex;
        justify-content: center; /* ✅ căn giữa toàn bộ hàng */
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 60px; /* khoảng cách giữa các món */
        margin: 50px auto;
        max-width: 1300px; /* giới hạn chiều rộng để không quá dàn ngang */
    }

    /* Từng món */
    .drink {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        padding: 20px;
        width: 400px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .drink:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    .drink img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    h2 {
        color: #4a2e1f;
        font-weight: bold;
        margin-top: 30px;
    }

    p {
        max-width: 700px;
        margin: 10px auto;
        color: #333;
    }
</style>

<h2>Chào mừng đến với THE MAN Coffee</h2>
<p>Khám phá vũ trụ hương vị cà phê tại THE MAN – nơi mỗi giọt cà phê là một câu chuyện.</p>

<div class="grid">
    @foreach($drinks as $drink)
    



        <div class="drink">
            <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}">
            <h3>{{ $drink['name'] }}</h3>
            <p>{{ $drink['description'] }}</p>
        
        </div>
    @endforeach
</div>
@endsection


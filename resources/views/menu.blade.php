
@extends('layouts.app')

@section('content')
<style>
    h2 {
        color: #5e3a1a; /* Tiêu đề tone nâu cà phê */
        text-align: center;
        margin-bottom: 20px;
    }

    .drink h3 a {
        color: #4b2e05;              /* Màu chữ nâu đậm */
        font-weight: bold;           /* In đậm */
        font-size: 20px;             /* Tăng kích thước chữ */
        text-align: center;          /* Căn giữa */
        margin-top: 10px;
        margin-bottom: 8px;
        text-decoration: none;       /* Bỏ gạch chân */
    }
  

    .drink h3:hover {
        color: #a15c2f;              /* Khi rê chuột đổi màu nhẹ */
        transform: scale(1.05);      /* Phóng to nhẹ khi hover */
        transition: all 0.3s ease;
    }

    .drink p {
        color: #555;
        text-align: center;
    }

    .drink strong {
        color: #8b4513;
        display: block;
        text-align: center;
        margin-top: 5px;
    }
</style>

<h2>Thực đơn cà phê</h2>
<p style="text-align:center;">Khám phá những hương vị đặc trưng tại THE MAN Coffee.</p>
<div class="grid">
    @foreach($drinks as $drink)
        <div class="drink">
            <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}" width="250">
            <h3><a href="{{ url('/menu/' . $drink['id']) }}">{{ $drink['name'] }}</a></h3>
            <p>{{ $drink['description'] }}</p>
            <strong>{{ $drink['price'] }} VNĐ</strong>
        </div>
    @endforeach
</div>
@endsection

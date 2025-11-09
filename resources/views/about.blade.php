@extends('layouts.app')

@section('content')
<style>
    .about-container {
        text-align: center;
        max-width: 900px;
        margin: 50px auto;
        padding: 20px;
        line-height: 1.7;
        background-color: #fdfaf6;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .about-container h2 {
        color: #6f4e37;
        font-size: 32px;
        margin-bottom: 20px;
    }

    .about-container img {
        width: 80%;
        max-width: 600px;
        border-radius: 12px;
        margin: 20px 0;
    }

    .about-container p {
        color: #333;
        font-size: 18px;
    }

    .about-highlight {
        font-weight: bold;
        color: #6f4e37;
    }
</style>

<div class="about-container">
    <h2>Về THE MAN Coffee</h2>
    <p>
        <span class="about-highlight">THE MAN Coffee</span> ra đời từ niềm đam mê bất tận với cà phê Việt Nam – 
        nơi chúng tôi tin rằng mỗi hạt cà phê là một câu chuyện, một hành trình của đất trời và con người.
    </p>

    <img src="{{ asset('images/latte.jpg') }}" alt="Coffee Art">

    <p>
        Với sứ mệnh mang đến những trải nghiệm cà phê tinh tế nhất, 
        chúng tôi chọn lọc những hạt cà phê chất lượng cao từ vùng đất Buôn Ma Thuột, 
        rang xay tỉ mỉ và pha chế theo phong cách riêng biệt.
    </p>

    <p>
        Không chỉ là nơi để thưởng thức cà phê, <span class="about-highlight">THE MAN Coffee</span> 
        còn là không gian để bạn thư giãn, trò chuyện và cảm nhận sự kết nối – 
        giữa con người với nhau và giữa con người với hương vị cuộc sống.
    </p>

    <p><em>“Một ly cà phê ngon không chỉ đánh thức buổi sáng, mà còn đánh thức cảm xúc.”</em></p>
</div>
@endsection

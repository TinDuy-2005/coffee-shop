@extends('layouts.app')

@section('content')
<style>
    .story-container {
        max-width: 900px;
        margin: 50px auto;
        padding: 20px;
        text-align: center;
        line-height: 1.8;
        background-color: #fdfaf6;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .story-container h2 {
        color: #6f4e37;
        font-size: 34px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .story-container img {
        width: 80%;
        max-width: 600px;
        border-radius: 12px;
        margin: 25px 0;
    }

    .story-container p {
        color: #333;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .highlight {
        color: #6f4e37;
        font-weight: bold;
    }
</style>

<div class="story-container">
    <h2>Câu chuyện hạt cà phê</h2>

    <img src="{{ asset('images/coffee-beans.jpg') }}" alt="Coffee Beans">

    <p>
        Mỗi hạt cà phê là một hành trình — bắt đầu từ những vùng đất đỏ bazan đầy nắng gió,
        nơi người nông dân tỉ mỉ chăm sóc từng cây cà phê, chờ đợi mùa thu hoạch trong niềm vui và hy vọng.
    </p>

    <p>
        Tại <span class="highlight">THE MAN Coffee</span>, chúng tôi tin rằng hương vị cà phê ngon 
        không chỉ đến từ hạt, mà còn từ tâm hồn của những con người yêu nghề. 
        Từng mẻ rang được thực hiện bằng sự chính xác và tình yêu với hương vị nguyên bản.
    </p>

    <img src="{{ asset('images/roasting.jpg') }}" alt="Roasting Coffee">

    <p>
        Từ hạt cà phê thô, qua bàn tay của nghệ nhân rang, 
        mỗi mùi thơm dậy lên là một bản nhạc của thiên nhiên — 
        nơi vị đắng, vị ngọt và hương thơm quyện lại trong một trải nghiệm khó quên.
    </p>

    <p>
        Chúng tôi mong muốn mỗi ly cà phê bạn thưởng thức tại 
        <span class="highlight">THE MAN Coffee</span> 
        sẽ kể lại câu chuyện ấy — một câu chuyện của niềm đam mê, 
        của đất trời và con người Việt Nam.
    </p>
</div>
@endsection

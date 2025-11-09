@extends('layouts.app')

@section('content')
<h2>Liên hệ với chúng tôi</h2>
<p>Hãy để lại thông tin của bạn, chúng tôi sẽ liên hệ sớm nhất có thể!</p>

<form>
    <label>Họ và tên:</label>
     <input type="text" name="name" placeholder="Nhập tên của bạn" required>

    <label>Email:</label>
    <input type="email" name="email" placeholder="Nhập email của bạn" required>

    <label>Nội dung:</label>
    <textarea name="message" placeholder="Lời nhắn của bạn..." required></textarea>

    <button type="submit">Gửi liên hệ</button>
</form>
@endsection

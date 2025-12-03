<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="utf-8">
    <title>تسجيل الدخول</title>
 <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
<div class="logo"><img src="https://img.freepik.com/premium-vector/ai-logo-template-vector-with-white-background_1023984-15069.jpg"width="40px" height="40px "></div>
<div class="login-container">
    <h2>تسجيل الدخول</h2>
     <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        @if(session('error'))
    <div style="color: red; margin:10px 0;">
        {{ session('error') }}
    </div>
@endif
        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" name="password" required>
       @if(session('error'))
    <div style="color: red; margin:10px 0;">
        {{ session('error') }}
    </div>
@endif
        
        <button type="submit">تسجيل الدخول</button>
    </form>
    
    <a href="{{ route('newaccount') }}">إنشاء حساب جديد</a>
    <a href="{{ route('password_reset') }}">نسيت كلمة المرور؟</a>
</div>


</body>
</html>

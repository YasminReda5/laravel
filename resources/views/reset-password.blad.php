<html>
    <title>reset password</title>
    <head>
        <link rel="stylesheet" href="{{ asset('css/newaccount.css') }}">
    </head>
 <form method="POST" action="{{ route('password.update') }}">
        @csrf
     <div class="register-container">
    <input type="hidden" name="token" value="{{ $request->token }}">
    <input type="email" name="email" placeholder="Email" value="{{ $request->email }}" required>
    <input type="password" name="password" placeholder="New Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Reset Password</button>
    </div>
</form>
</html>

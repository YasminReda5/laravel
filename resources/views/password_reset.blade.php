<html>
    <title>reset password</title>
    <head>
        <link rel="stylesheet" href="{{ asset('css/newaccount.css') }}">
    </head>
<form action="{{  route('password_reset')}}" method="POST">
      @csrf
      @if(session()->has('status'))
      {{ session()->get('status') }}

      @endif
    <div class="register-container">
    <input type="email" name="email" placeholder="email" required>
    @if(session('error'))
    <div style="color: red; margin:10px 0;">
        {{ session('error') }}
    </div>
@endif

    <button type="submit">  send</button>
</div>
</form>
</html>
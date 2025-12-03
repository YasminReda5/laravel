<form method="POST" action="{{ route('password_reset') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email" value="{{ $email }}" required>
    <input type="password" name="password" placeholder="كلمة المرور الجديدة" required>
    <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
    <button type="submit">تحديث كلمة المرور</button>
</form>

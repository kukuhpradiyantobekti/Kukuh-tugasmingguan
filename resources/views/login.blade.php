<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div style="max-width:420px;margin:60px auto;padding:16px;border:1px solid #ddd;border-radius:6px;">
        <h2>Login</h2>
        @if($errors->any())
            <div style="color:#b00020;margin-bottom:8px;">{{ $errors->first() }}</div>
        @endif
        <form method="post" action="{{ route('login.post') }}">
            @csrf
            <div style="margin-bottom:8px;">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required style="width:100%;padding:8px;" />
            </div>
            <div style="margin-bottom:12px;">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required style="width:100%;padding:8px;" />
            </div>
            <div>
                <button type="submit" style="padding:8px 12px;">Masuk</button>
            </div>
        </form>
    </div>
</body>
</html>

<h2>Login Mahasiswa</h2>

@if (session('error'))
<p style="color:red">{{ session('error') }}</p>
@endif

<form action="/login" method="POST">
    @csrf
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>

</form>
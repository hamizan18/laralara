<h2>Login page</h2>

@if (session('error'))
<p style="color:red">{{ session('error') }}</p>
@endif

<form action="/login" method="POST">
    @csrf
    <label>Email:</label><br>
    <input type="text" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Save data</button>
    
</form>
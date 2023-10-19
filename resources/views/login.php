<!DOCTYPE html>

<head>
    <title>Login to Movie-library</title>
    <script src=""></script>
    <link rel="stylesheet" href="css/loginStyles.css" />
</head>
<header class="header"></header>
<h1 class="welcome">Welcome to Movie library!</h1>

<div class="formClass">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<footer class="footer">This is a footer</footer>
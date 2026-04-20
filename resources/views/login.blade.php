<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Page</h2>

<a href="/auth/google">Login with Google</a>
<br><br>
<a href="/auth/facebook">Login with Facebook</a>

</body>

<script>
if (window.location.hash === "#_=_") {
    history.replaceState(null, null, window.location.pathname);
}
</script>

</html>
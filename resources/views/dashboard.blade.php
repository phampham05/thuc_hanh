<h2>Thông tin sinh viên</h2>

<p>Họ tên: Phạm Thị Phượng</p>
<p>Mã sinh viên: 23810310265</p>

<hr>

<h3>Thông tin tài khoản</h3>

<p>Tên: {{ Auth::user()->name }}</p>
<p>Email: {{ Auth::user()->email }}</p>

@if(Auth::user()->avatar)
    <img src="{{ Auth::user()->avatar }}" width="100">
@endif

<br><br>
<a href="/logout">Logout</a>
<!-- Hiển thị trạng thái chưa đăng nhập -->
@if (Session::has('not-login'))
    <div class="not-login">
        <p class="text-danger">{{ Session::get('not-login') }}</p>
    </div>
@endif
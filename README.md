# Social Login App (Laravel)

## Thông tin sinh viên
- **Họ tên:** Phạm Thị Phượng
- **Mã sinh viên:** 23810310265
- **Lớp:** D18CNPM2

---

## Mô tả dự án
Ứng dụng Laravel tích hợp xác thực người dùng qua Google OAuth 2.0 và Facebook OAuth 2.0.
- **Xác thực:** Lấy thông tin user (name, email, avatar) từ mạng xã hội.
- **Xử lý:** Tự động đăng nhập nếu đã có tài khoản hoặc tạo mới nếu chưa tồn tại.
- **Tính năng:** Hiển thị profile sau đăng nhập và hỗ trợ Logout.

---

## Công nghệ sử dụng
- **Framework:** Laravel 10+
- **Package:** Laravel Socialite
- **Database:** MySQL (XAMPP)
- **Môi trường:** PHP 8+

---

## Video Demo:
https://drive.google.com/file/d/1fBx-DKpFAsF7V9b_33p_s7BBcJtkN3qL/view?usp=sharing

---

## Cài đặt project

### 1. Clone và Cài đặt thư viện
Chạy các lệnh sau trong terminal:
```bash
git clone [https://github.com/phampham05/thuc_hanh.git]
cd thuc_hanh
composer install
cp .env.example .env
php artisan key:generate

2. Cấu hình Database & Khởi chạy
Tạo database tên social_login_db trong MySQL.

Cấu hình thông tin DB_DATABASE, DB_USERNAME, DB_PASSWORD trong file .env.

Chạy migrate và khởi động server:

Bash
php artisan migrate
php artisan serve
Truy cập: http://localhost:8000

Cấu hình OAuth
1. Google OAuth
Console: Google Cloud Console

Redirect URI: http://localhost:8000/auth/google/callback

Cấu hình .env:

Đoạn mã
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT=http://localhost:8000/auth/google/callback

2. Facebook OAuth
Console: Facebook Developers

Redirect URI: http://localhost:8000/auth/facebook/callback

Cấu hình .env:

Đoạn mã
FACEBOOK_CLIENT_ID=your_facebook_client_id
FACEBOOK_CLIENT_SECRET=your_facebook_client_secret
FACEBOOK_REDIRECT=http://localhost:8000/auth/facebook/callback

Chức năng chính
[x] Đăng nhập Google
[x] Đăng nhập Facebook
[x] Tự động lưu/tạo User vào database
[x] Hiển thị thông tin cá nhân
[x] Đăng xuất hệ thống


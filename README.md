<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


CÁC BƯỚC CÀI ĐẶT DỰ ÁN LARAVEL 9:                                                                                                                                                   -- Chú ý: máy cần cài cài trước Visual Studio Code(hoặcIDE khác), Github, MySQL,..
1. Tạo mới thư mục trong máy tính có tên: Kaibatech (Tên khác được)
2. Mở thư mục vừa tạo trong Visual Studio Code (IDE khác cũng được)
3. Mở Terminal, chạy lệnh git clone dự án Laravel vể máy:
    - git clone https://github.com/thanhtoai123/Kaibatech.git
4. Sau khi clone dự án về máy, tạo mới Database có tên: Kaibatech (tên khác cũng được) trong phpMyAdmin hoặc MySQL khác
5. Chạy lệnh chuyển đến thư mục cần thao tác: cd Kaibatech (tên thư mục dự án vừa clone về)
6. Chạy lệnh cài đặt các gói cần trong dự án: composer install
7. Chạy lệnh copy thư mục .env: cp .env.example .env
8. Mở file .env cấu hình database: DB_DATABASE=Kaibatech (tên database vừa tạo ở bước trên)
9. Chạy lệnh tạo key cho dự án: php artisan key:generate
10. Chạy lệnh tạo table trong Database: php artisan migrate
11. Chạy lệnh để public thư mục lưu trữ: php artisan storage:link
12. Chạy lệnh serve xem dự án: php artisan serve
13. Sau khi xem dự án, còn vài bước nữa để hoàn thành dự án (tham khảo ở đây:https://github.com/anhskohbo/no-captcha)
14. Mở lại Terminal, chạy lệnh chuyển đến thư mục cần thao tác: cd Kaibatech
15. Chạy lệnh cài đặt gói re-captcha: composer require anhskohbo/no-captcha
16. Chạy lệnh xuất bản file cấu hình: php artisan vendor:publish --provider="Anhskohbo\NoCaptcha\NoCaptchaServiceProvider"
17. Thêm NOCAPTCHA_SECRET và NOCAPTCHA_SITEKEY vào tệp .env:
    - NOCAPTCHA_SECRET=secret-key
    - NOCAPTCHA_SITEKEY=site-key
    (lấy mã ở đây: https://www.google.com/recaptcha/admin)
18. Hoàn thành, xem kết quả thôi!!!

 

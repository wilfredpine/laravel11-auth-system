# laravel11-auth-system
A sample implementation of Laravel's built-in authentication system, Content Security Policy (CSP), and rate limiting. Laravel will automatically enforce protection against SQL injection, XSS, CSRF, and provide logging.

- Clone the project
- Navigate to the project's root directory using terminal
- Create .env file (rename .env.example)
- Execute `composer install`
- Execute `npm install`
- Set application key - `php artisan key:generate --ansi`
- Execute migrations and seed data - `php artisan migrate --seed`
- Open new terminal and start vite server - `npm run dev`
- Open new terminal and start Artisan server - `php artisan serve`
- Browse [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

Whats in Laravel 11 authentication system:

- Registration: Role-based user creation.
- Login/Logout: Secure sessions.
- Email Verification: Protect against invalid users.
- Forgot Password: Password reset functionality.
- SQL Injection, XSS, CSRF Protection: Built-in security features.
- CSP: Additional header security.
- Logs: Monitor system activities.
- Brute Force Protection: Rate limiting.
- Multiple Role Managemnent (Page's User{Role/Access} Validation)

## Want to learn PHP and Laravel?

[PHP-Tutorial](https://github.com/wilfredpine/PHP-Tutorial)

[YouTube](https://www.youtube.com/@confired-official/)

## Thanks me by

Following [wilfredpine](https://github.com/wilfredpine/)

Starred & Forked [laravel11-auth-system](https://github.com/wilfredpine/laravel11-auth-system)

Subscribe at [confired-official](https://www.youtube.com/@confired-official/)

## Learn more?

[expressjs-auth-system](https://github.com/wilfredpine/expressjs-auth-system)

[django-auth-system](https://github.com/wilfredpine/django-auth-system)

[lavalust-auth-system](https://github.com/wilfredpine/lavalust-auth-system)

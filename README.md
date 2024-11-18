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
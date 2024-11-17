# laravel11-auth-system
A simple authentication system using laravel framework.

- Clone the project
- Navigate to the project's root directory using terminal
- Execute `composer install`
- Execute `npm install`
- Set application key - `php artisan key:generate --ansi`
- Execute migrations and seed data - `php artisan migrate --seed`
- Start vite server - `npm run dev`
- Start Artisan server - `php artisan serve`

Laravel 11 authentication system with:

- Registration: Role-based user creation.
- Login/Logout: Secure sessions.
- Email Verification: Protect against invalid users.
- Forgot Password: Password reset functionality.
- Brute Force Protection: Rate limiting.
- SQL Injection, XSS, CSRF Protection: Built-in security features.
- CSP: Additional header security.
- Logs: Monitor system activities.
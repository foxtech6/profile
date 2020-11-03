# Profile

**Requirements**

- php >7.3
- mysql >5.7

**How install**

- clone project
- run `$~ composer install`
- run `$~ cp .env.example .env` and place the  credential required on the project (app data, mysql, smtp etc.)
- run `$~ php artisan migrate --seed`
- run `$~ php artisan serve`
- go to `http://127.0.0.1:8000` in browser
- start working!

Kalau error: php artisan serve

Fatal error: Uncaught Error: Class "Illuminate\Foundation\Application" not found in /data/data/com.termux/files/home/himasif_test/bootstrap/app.php:8
Stack trace:
#0 /data/data/com.termux/files/home/himasif_test/artisan(14): require_once()
#1 {main}
  thrown in /data/data/com.termux/files/home/himasif_test/bootstrap/app.php on line 8
  

Langkah 1: composer dump-autoload
Langkah 2: php artisan optimize:clear
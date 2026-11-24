# admin/

Officer-only pages: login, dashboard, reservations, applications, items and posts.

Every page here must check that an officer is logged in before showing anything:
```php
session_start();
if (!isset($_SESSION["officer_id"])) { header("Location: login.php"); exit; }
```
Pages in this folder link the stylesheet as `../assets/css/style.css`.

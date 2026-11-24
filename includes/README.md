# includes/

Shared parts every page uses:
- `header.php`: top of the page and the nav. Set `$pageTitle` and `$activePage` before including it.
- `footer.php`: bottom of the page.
- `db.php`: opens the database connection as `$conn`. Needs `config.php` in the project root.

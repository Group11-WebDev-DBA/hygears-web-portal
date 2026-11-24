# Hygears Web Portal

A dynamic website for **PUP Hygears**: students browse and reserve tools and consumables, follow the org's news, and apply to join. Officers have their own pages to manage items, reservations, applications and posts.

Web Development final project, Group 11, BSIT 3-2 (Sir Renz Angelo Cadaoas). Due **Dec 12, 2026**.

- Design prototypes: https://group11-webdev-dba.github.io/hygears-portal-prototypes/
- Database (DBA project): https://github.com/Group11-WebDev-DBA/hygears-dba

## Run it locally (XAMPP)

1. Clone this repo **into XAMPP's `htdocs`**, so the path is `C:\xampp\htdocs\hygears-web-portal`:
   ```
   cd C:\xampp\htdocs
   git clone https://github.com/Group11-WebDev-DBA/hygears-web-portal.git
   ```
2. Copy `config.example.php` to `config.php` and put in your own MySQL details. `config.php` is ignored by git, so your password never gets committed.
3. Start **Apache** and **MySQL** in the XAMPP Control Panel.
4. Create the database: open phpMyAdmin (http://localhost/phpmyadmin), import `hygears.sql` from the hygears-dba repo, then import `database/web-portal.sql` from this repo (the tables only the website uses).
5. Open http://localhost/hygears-web-portal/

If you see PHP code instead of a page, Apache isn't running or you opened the file directly instead of through `localhost`.

## Folder map

```
hygears-web-portal/
├── index.php            Home page (every page is a .php file in the root)
├── config.example.php   Copy to config.php (ignored by git)
├── includes/            Shared parts: header.php, footer.php, db.php
├── admin/               Officer-only pages (login, dashboard, posts)
├── assets/
│   ├── css/style.css    The ONE shared stylesheet
│   ├── js/app.js        Shared JavaScript
│   └── img/             Logo and site images
├── uploads/             Photos officers upload (ignored by git)
├── database/            SQL for the website-only tables
├── docs/                Proposal, UI requirements, decisions
└── .github/             Pull request checklist
```

Why it's laid out this way:
- **One stylesheet and shared includes** are in the class requirements (Nov 21 lecture: CSS variables in one `style.css`; `header.php` and `footer.php` so navigation never differs).
- **`includes/` and `admin/`** keep shared code and officer pages apart from public pages.
- **`config.php` stays out of git** so database passwords are never public.
- **`uploads/` stays out of git** because it holds files officers upload while testing.

## Team

Dapon, Ralph Eli G. · Fernandez, Rico Gajelloma · Galdones, Namron · Medina, Rhylle · Ramos, Shawn Angel S. · Villas, Hans

How we work together (branches, commits, pull requests): see [CONTRIBUTING.md](CONTRIBUTING.md).

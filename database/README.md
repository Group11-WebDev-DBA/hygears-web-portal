# Database (website side)

The main database is in the **hygears-dba** repo (`hygears.sql`): people, members, items, requests. Import that first.

This folder holds only the tables the website adds on top, like `posts` for News. Put them in `web-portal.sql`, which runs after `hygears.sql` in the same `hygears_db` database.

When you change a table, update the `.sql` file in the same commit, and tell the GC so everyone re-imports it.

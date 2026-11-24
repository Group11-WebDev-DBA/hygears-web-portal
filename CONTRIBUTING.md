# How we work on this repo

Short rules so six people can work without breaking each other's code.

## 1. Branches

`main` always works. Never code directly on `main`.

For each task, make a branch from the latest `main`:
```
git checkout main
git pull
git checkout -b feature/news-page
```

Branch names: `feature/...` for new things, `fix/...` for bugs, `docs/...` for documents. Lowercase, words joined with `-`.

## 2. Commits

One commit = one finished piece of work that makes sense on its own. Not "fixed typo" ten times, and not the whole week in one commit.

Good size examples:
- `Add news list page with category filter`
- `Connect reservation form to the database`
- `Fix officer table overflowing on phones`

Writing the message:
- Start with a verb: Add, Fix, Update, Remove, Move.
- Say what changed, in under about 60 characters.
- If it needs more explaining, leave a blank line and write a short paragraph.

Before committing, check what you're about to commit:
```
git status
git diff
```
Never commit `config.php`, passwords, or test uploads (the `.gitignore` already blocks them).

## 3. Pull requests

When your branch is done:
```
git push -u origin feature/news-page
```
Then open a Pull Request on GitHub into `main`. Fill in the template, then ask one groupmate to check it in the GC. They open the site from your branch, test it, and approve or leave comments. After approval, use **Squash and merge** or **Merge**, then delete the branch.

Before starting new work, always `git pull` on `main` first so you have everyone's latest changes.

## 4. Code style (what the class taught)

- Plain HTML, one `assets/css/style.css` with CSS variables, plain JavaScript.
- PHP pages include `includes/header.php` and `includes/footer.php`.
- Database queries use **prepared statements** (`$stmt = $conn->prepare(...)`), never values pasted into SQL.
- Print user data with `htmlspecialchars()`.
- Passwords use `password_hash()` and `password_verify()`.
- Indent with 2 spaces.
- Comment only what isn't obvious from the code itself.

## 5. If something goes wrong

- **Merge conflict:** don't panic or force push. Ask in the GC; whoever knows that file helps fix it.
- **Committed something by mistake:** say so in the GC before pushing more.
- **Never** use `git push --force` on `main`.

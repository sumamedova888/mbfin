# Hostinger Upload Checklist

This project is prepared for Hostinger shared hosting.

## Required file structure
- Upload the entire `public_html/` folder contents to your Hostinger `public_html` directory.
- Ensure `index.html` is directly inside `public_html`.

## Configuration
- Copy `public_html/.env.example` to `public_html/.env`.
- Update the Hostinger database values and `APP_URL`.
- If your app reads PHP config arrays, use `public_html/config.php`.

## Old domain cleanup
Run this from the repo root and replace any old links with your new domain:

```bash
rg -n "old-domain\.com|http://|https://" public_html
```

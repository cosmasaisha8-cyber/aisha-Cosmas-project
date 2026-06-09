# COSSIE Wholesale Inventory and Management System

This project is a wholesale business system for placing product orders, choosing
business type, checking actual prices and discounts, recording payments, and
rejecting damaged or short goods.

## Files

- `index.php` - Home page
- `products.php` - Product list, companies, prices and discounts
- `order.php` - Wholesale order form
- `payment.php` - Payment form
- `returns.php` - Damaged or short goods rejection form
- `admin.php` - Inventory dashboard
- `assets/css/styles.css` - Main styling
- `assets/js/app.js` - Frontend JavaScript and AJAX calls
- `ajax/order.ajax` - AJAX endpoint notes
- `api/*.php` - PHP backend endpoints
- `database.sql` - MySQL database schema and sample product data

## How to run

1. Run the folder with a PHP server to view the frontend demo.
2. To use PHP and MySQL, create the database by importing `database.sql`.
3. Update database login details in `api/db.php` if your MySQL username or
   password is different.
4. Run the folder with a PHP server, for example:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000/index.php
```

## Product image credits

Product photos are loaded from Tanzanian brand and shop product pages, including
Bakhresa/Azam, Jumla Traders, Maduka Network, iMart Tanzania, and Kilombero
product listings. Check each source page for license and usage permission before
publishing the project publicly.

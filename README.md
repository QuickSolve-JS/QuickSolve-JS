
-----

<p align="center">
  <img src="https://i.ibb.co/m52fsp00/Quick-Solve-JS.jpg" alt="QuickSolve-JS" width="150">
</p>

<h1 align="center">QuickSolve Calculation Engine 🚀</h1>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.1+-777bb4.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/Laravel-9.x%20|%2010.x%20|%2011.x%20|%2012.x%20|%2013.x-ff2d20.svg" alt="Laravel Version">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

A high-precision, action-based calculation engine for Laravel, specifically designed for **POS and Financial Systems**. Built with **SOLID principles** and **BCMath** for "Bank-level" mathematical accuracy.


## ✨ Features

- ✅ **Action Pattern:** Clean, modular logic for Taxes and Discounts.
- 🔢 **BCMath Integration:** Eliminates floating-point precision errors.
- 🔗 **Fluent Interface:** Beautiful and readable method chaining.
- 🧪 **Unit Tested:** Ensuring 100% reliability in financial calculations.
- 🚀 **Laravel Ready:** Includes Facades for seamless integration.

## 📦 Installation

You can install the package via composer:

```bash
composer require quicksolve/laravel-calc
````

> **Note:** Ensure the `bcmath` PHP extension is enabled on your server.

## 🚀 Usage

Using the engine is simple and intuitive. You can use the `QuickSolve` Facade:

```php
use QuickSolve\Calc\Facades\QuickSolve;

// Basic calculation
$total = QuickSolve::setAmount(1000)
            ->addTax(15)        // Adds 15% Tax
            ->applyFlatDiscount(50) // Deducts flat 50
            ->get();            // Returns 1100.00

// Formatting for display
echo QuickSolve::setAmount(1250.50)->format('LKR'); 
// Output: LKR 1,250.50
```

## 🛠 Planned Features (Roadmap)

  - [ ] **Multiple Tax Support:** Ability to stack multiple tax types (VAT, SSCL, etc.).
  - [ ] **Service Charges:** Built-in action for hospitality service fees.
  - [ ] **Rounding Strategies:** Support for various rounding modes (Half Up, Half Down, etc.).

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

-----

<p align="center"\>
Developed with ❤️ by </b\>Niduranga Jayarathna</b\>
</p\>

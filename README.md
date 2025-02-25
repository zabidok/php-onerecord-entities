# OneRecord Cargo & Core Lists Implementation

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Doctrine ORM](https://img.shields.io/badge/ORM-Doctrine-orange)](https://www.doctrine-project.org/)
[![Database Support](https://img.shields.io/badge/Database-MySQL%20%7C%20PostgreSQL-green)](https://www.mysql.com/)

## 🚀 Overview
This project provides an **open-source implementation** of **Cargo (123 entities)** and **Core Lists (45 entities)** from the [IATA OneRecord standard](https://iata-cargo.github.io/ONE-Record/stable/). It is built with **Doctrine ORM**, making it easy to integrate with **MySQL** and **PostgreSQL** databases.

## 🛠 Features
- ✅ **Complete Entity Set** – Covers all Cargo and Core Lists models from OneRecord.
- ✅ **Doctrine ORM Compatibility** – Auto-generates tables in relational databases.
- ✅ **MySQL & PostgreSQL Support** – Works with major SQL databases.
- ✅ **Open-source & Community-driven** – Contributions welcome!

## 🔧 Installation

### 1️⃣ Install via composer
```sh
composer require zabidok/php-onerecord-entities
```
### 1️⃣ OR Clone Repository
```sh
git clone https://github.com/zabidok/php-onerecord-entities.git
cd https://github.com/zabidok/php-onerecord-entities
```

### 2️⃣ Install Dependencies
Ensure you have **PHP 8+, Composer, and Doctrine** installed.
```sh
composer install
```

### 3️⃣ Configure Database
Create a `.env.local` file and update the database settings:
```ini
DATABASE_URL="mysql://user:password@127.0.0.1:3306/onerecord_db"
```
Or for PostgreSQL:
```ini
DATABASE_URL="pgsql://user:password@127.0.0.1:5432/onerecord_db"
```

### 4️⃣ Run Database Migrations
```sh
php bin/console doctrine:schema:update --force
```

### 5️⃣ Start Using the Entities!
You can now use the Cargo and Core Lists entities in your Symfony application.

## 📌 Example Usage
Here’s how you can create and persist a `Piece` entity:

```php
$entityManager = $this->getDoctrine()->getManager();

$piece = new Piece();
$piece->setUpid('example-upid');
$piece->setGoodsDescription('Test cargo');

$entityManager->persist($piece);
$entityManager->flush();
```

## 🤝 Contributing
We welcome contributions! To contribute:
1. Fork the repository.
2. Create a new branch (`feature-branch-name`).
3. Submit a pull request.

## 📝 License
This project is open-source and available under the [MIT License](LICENSE).

# Simple Panel with AMQP

This is a dummy application with CRUD functionality. Authentication, Authorization, Data Validation and other
aspects of wide applications were skipped in order to demonstrate how an application can interact with RabbitMQ. 

# 0. Getting Started

This application is a simple panel with the following functions.

- Create merchants
- Update merchants
- Show merchants
- Delete merchants
- Index of merchants

The creation of a merchant looks like the following

![create merchant](https://blog.pleets.org/img/articles/create-dummy-merchant.jpeg)

# 1. Installation

This application was developed with Laravel 8x, most of the following steps are related to laravel
installation and configuration.

You can download this project as follows.

```bash
git clone https://github.com/darioriverat/simple-panel-with-amqp
```

## 1.1 Requirements

As any Laravel application, you will need to make sure your server meets the following requirements.

- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

In addition, you need the following dependencies.

- MySQL >= 5.7

## 1.2 Set up

Set up permission of `storeage` and `bootstrap/cache` directories.

```bash
chmod -R a+w storage
chmod a+w bootstrap/cache
```

Let's copy the `.env.example` to `.env`.

```bash
cp .env.example .env
```
### 1.2.1 Env Vars

Set up `DB_` and other env vars as you need.

## 1.3 Step-by-Step Installation

Make sure you have composer installed in your machine and execute the following command to install the
dependencies.

```bash
composer install
```

Then generate the key for the application.

```bash
php artisan key:generate
```

Finally, create the database schema and basic data executing the following command.

```bash
php artisan migrate
```
## 1.4 Creating Dummy Data

You can use the factories to create dummy data in tinker

```php
\App\Models\Country::factory()->create();
\App\Models\MerchantCategoryCode::factory()->create();
\App\Models\Merchant::factory()->create();
```

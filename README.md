# Magento 2 Playing with the Checkout

This module has been built to show some changes that you can do in the checkout.

Changes that has been done:
1. Removing 2 fields from the Shipping step, I removed `Company` and `Street 2`
2. All other field names, are written vice versa, like Name, should be emaN.
3. And the next step button is rediringct back to the cart.


## How to install

### Via composer

Edit `composer.json`

```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ozzytop/m2-playing-with-checkout"
        }
    ],
    "require": {
        "ozzytop/m2-playing-with-checkout": "dev-master"
    }
}
```

```
composer install
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### Or copy and paste

Download latest version from GitHub

Paste into `app/code/Ozzytop/PlayingCheckout` directory

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## Usage

Once is enabled you will see the changes in the Checkout page, enjoy!!


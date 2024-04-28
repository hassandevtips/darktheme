
# Dark Theme Toggle For Bootstrap
A Simple Package to add dark mode toggle feature to Bootstrap 5x

## Screenshots
[<img src="https://i.snipboard.io/5EYe2L.jpg" width="250">](https://i.snipboard.io/5EYe2L.jpg)


## Installation

Install the package by the following command, (try with `--dev` if you want to not install it on production environment)

    composer require  hassandevtips/darktheme


## Add Provider (Optional)

Add the provider to your `config/app.php` into `provider` section if using lower version of laravel,

   Hassandevtips\DarkTheme\Providers\DarkThemeProvider::class,


## Publish the Assets

Run the following command to publish config file,

    php artisan vendor:publish --tag=dark-theme-assets

## Configure Dark Mode On App
 Add following code in root blade file in header section.

    <!-- Dark Mode Toggle -->
    <x-darktheme::dark-mode-toggle />
    
Or Can Also Add A Blade Directive

     <!-- Dark Mode Toggle -->
     @darkmodetoggle


### License
The MIT License (MIT). Please see [License](LICENSE.md) File for more information

<a href="https://buymeacoffee.com/hassandevtips" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-red.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" ></a>

## Note
 Dark Theme only works with Bootstrap 5x.

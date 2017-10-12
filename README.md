## Introduction
Zurb Foundation 6 included with Laravel 5 (boilerplate). Made for artisans who love Foundation 6 just as much as we do. We made a few changes to the default installation of Laravel 5.5, and got rid of default Bootstrap that comes with it.
- Removed all Bootstrap code
- Remove all Vue code using `php artisan preset none` command
- Changed the default `welcome.blade.php` look (to show proof that foundation is working)

## Versions
- Laravel 5.5.14
- Zurb Foundation 6.4.2

## Install
First, create a new project
```
composer create-project ompmega/laravel-fdn <project_name>
```
..or..
```
git clone https://github.com/ompmega/laravel-fdn.git <project_name>
```

Go inside the newly created project
```
cd <project_name>
```

Install required node modules (includes foundation-sites)
```
npm install
```

Run Laravel Mix to make sure everything runs smoothly
```
npm run dev
```

And you're done! 🎉

## Configuration
Unlike the new way to install a laravel project using `laravel new <project_name>`, you'll have to manually configure this Laravel installation.

First, install composer using:
```
composer install
```

Then, create the new .env file
```
cp .env.example .env
```

Finally, generate a new app key using:
```
php artisan key:generate
```

That's it! Get out there and make good shit :)

## License
Licensed under the [MIT license](http://opensource.org/licenses/MIT)
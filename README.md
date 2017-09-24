## Introduction
Laravel 5 + Zurb Foundation 6 (Boilerplate)

## Versions
- Laravel 5.5
- Zurb Foundation 6.4.2

## Install
Grab the latest copy of laravel-fdn
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

Finally, generate an new app key using:
```
php artisan key:generate
```

That's it! Get out there and make good shit :)

## License
Licensed under the [MIT license](http://opensource.org/licenses/MIT)
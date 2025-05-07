
# Laravel + Filament base install

There is a base installs on of:

- **Laravel 12** https://laravel.com/
- **Filament** https://filamentphp.com/docs/3.x/panels/installation
- **Blueprint** https://blueprint.laravelshift.com/
- **Bun** https://github.com/OpenForgeProject/ddev-bun
- **Debugbar** https://github.com/barryvdh/laravel-debugbar
- **Laradumps** https://laradumps.dev/
- **Hot reload** https://github.com/fatihdurmaz/filament-hot-reloading-guide


Requirement is `ddev` https://ddev.readthedocs.io/en/stable/users/quickstart/#laravel

```sh
mkdir your-project-directory
cd your-project-directory
git clone https://github.com/sajt/laravel-filament.git .
. ./setup.sh
ddev start
ddev composer install
ddev bun install
ddev artisan migrate:fresh --seed --force
ddev bun run dev #in a separete terminal
ddev launch
```

After all yo can see your project in the browser
`https://laravel-filament.ddev.site/app/login`
Change `laravel-filament` to `your-project-directory`
The user is test@example.com the password is `password`
You can change it in the `database/seeders/DatabaseSeeder.php` before the migration.

##
Original
https://ddev.readthedocs.io/en/stable/users/quickstart/#laravel

## Steps
```bash
mkdir <project-name>
cd <project-name>
ddev config --project-type=laravel --docroot=public
ddev start
ddev composer create "laravel/laravel:^12"
# Blueprint
ddev composer require -W --dev laravel-shift/blueprint
# Create draft.yaml
ddev artisan blueprint:new
# Filament
ddev composer require filament/filament:"^3.3" -W
ddev artisan filament:install --panels
# Debugbar
ddev composer require barryvdh/laravel-debugbar --dev
# Laradump
ddev composer require laradumps/laradumps ^4.0 --dev -W

ddev artisan ds:init $(pwd)

# bun
ddev add-on get OpenForgeProject/ddev-bun
ddev restart

ddev composer install
ddev bun install

ddev artisan migrate:fresh --seed --force

ddev bun run dev #in a separete terminal
```

## Extra not in the package now
```sh
# Laravel permission https://spatie.be/docs/laravel-permission/v6/introduction
ddev composer require spatie/laravel-permission
# filament package for it if needed
# https://filamentphp.com/plugins/tharinda-rodrigo-spatie-roles-permissions
ddev composer require althinect/filament-spatie-roles-permissions
```

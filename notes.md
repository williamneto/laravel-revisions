- Install TALL stack
```
./vendor/bin/sail composer require livewire/livewire
./vendor/bin/sail npm install -D tailwindcss postcss autoprefixer
./vendor/bin/sail npx tailwindcss init -p
```
- Create Model and Migration
```
./vendor/bin/sail artisan make:model Veicle
./vendor/bin/sail artisan make:model People
./vendor/bin/sail artisan make:model Revision

```
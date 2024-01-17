- Install TALL stack
```
./vendor/bin/sail composer require livewire/livewire
./vendor/bin/sail npm install -D tailwindcss postcss autoprefixer
./vendor/bin/sail npx tailwindcss init -p
```
- Create Model and Migration using artisan
```
./vendor/bin/sail artisan make:model Veicle -m
./vendor/bin/sail artisan make:model People -m
./vendor/bin/sail artisan make:model Revision -m

```
- Run migrations
```
./vendor/bin/sail artisan migrate
```
- Create a livewire component
```
./vendor/bin/sail artisan make:livewire PeopleManager
```
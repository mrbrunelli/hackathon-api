## API Hackathon

### How to execute?
1. First, you need **Docker** and **Docker Compose** in your machine.

2. Clone repo
```sh
git clone https://github.com/mrbrunelli/hackathon-api.git
```

3. After repo cloned, enter in project folder
```sh
cd ./hackathon-api
```

4. Start containers
```sh
docker-compose up -d
```

5. Access application on
```sh
http://localhost:8085/
```

### How to execute migrations?
1. Install migrations
```sh
docker container exec -it -u 1000 laravel php artisan migrate:install
```

2. Create new migration
```sh
docker container exec -u 1000 laravel php artisan make:migration create_nameoftable_table
```

3. Execute migrations
```sh
docker container exec -u 1000 laravel php artisan migrate
```

4. Create new seed
```sh
docker container exec -u 1000 laravel php artisan make:seeder NameOfSeed
```

5. Erase all tables and seed
```sh
docker container exec -u 1000 laravel php artisan migrate:fresh --seed
```

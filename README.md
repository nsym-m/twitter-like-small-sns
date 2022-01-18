# README

## docker初回起動
```bash
docker-compose up -d
```

## docker接続
```bash
docker-compose exec php bash
```

## 初期設定
```bash
docker-compose exec php bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

接続先：http://loccalhost:3000

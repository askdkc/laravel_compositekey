# Compostite Prime Keyに対応したLaravel Trait

## インストール
```
git clone このURL お好きな名前
cd お好きな名前
composer install
cp .env.example .env

vi .env
DB_CONNECTION=sqlite に変更

php artisan key:generate
touch database/database.sqlite

npm install
npm run dev

php artisan serve --host=0.0.0.0
```

## Data Table用意
```
sqlite3 database/database.sqlite

create table memos(id integer, subid integer, memo text, primary key(id, subid));

.quit
```

## 動作確認
```
php artisan serve

http://127.0.0.1:8000/memos にアクセスし新規データ作成

ID が同一かつSub IDが異なるデータを作成

一覧でメモをクリックすると編集画面

IDとSub IDはそのままに、メモだけ編集すると、なんということでしょう。きちんとデータ更新が可能です。
```



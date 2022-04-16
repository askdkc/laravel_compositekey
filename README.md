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

php artisan migrate

npm install
npm run dev
```

## 動作確認
```
php artisan serve

http://127.0.0.1:8000/memos にアクセスし新規データ作成

ID が同一かつSub IDが異なるデータを作成

一覧でメモをクリックすると編集画面

IDとSub IDはそのままに、メモだけ編集すると、なんということでしょう。きちんとデータ更新が可能です。
```

## 既存のDBが既にあり、それをLaravelでCRUDしたい場合
```
    App\Models\Memo.php でコメントアウトされている

    use \App\Traits\HasCompositeKey;
    protected $primaryKey = ['id','subid'];

    を参考に、既存のDBのPrimary Keyに合わせてご利用願います。

    Primary Keyが company_id, product_id, customer_id の場合は

    protected $primaryKey = ['company_id','product_id','customer_id'];
    
    と設定しましょう。
```

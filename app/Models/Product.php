<?php

namespace App\Models;

// 使うツールを取り込んでいます。
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Productという名前のツール（クラス）を作っています。
class Product extends Model
{
    // ダミーレコードを代入する機能を使うことを宣言しています。
    use HasFactory;

    // 以下の情報（属性）を一度に保存したり変更したりできるように設定しています。
    // $fillable を設定しないと、Laravelはセキュリティリスクを避けるために、この一括代入をブロックします。
    protected $fillable = [
        'product_name',
        'price',
        'stock',
        'company_id',
        'comment',
        'img_path',
    ];

    // Productモデルがsalesテーブルとリレーション関係を結ぶためのメソッドです
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    // Productモデルがcompanysテーブルとリレーション関係を結ぶ為のメソッドです
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // public function registArticle($data) {
    //     // 登録処理
    //     DB::table('articles')->insert([
    //         'title' => $data->title,
    //         'url' => $data->url,
    //         'comment' => $data->comment,
    //     ]);
    // }

    public function registProduct($data) {
        // 登録処理
        DB::table('products')->insert([

            'product_name' => $data->product_name,
            'price' => $data->price,
            'stock' => $data->stock,
            'company_id' => $data->company_id,
            'comment' => $data->comment,
            'img_path' => $img->product_path,

        ]);
    }

}


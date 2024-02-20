<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product; // この行を追加
use App\Models\Company; // この行を追加

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;  // この行を追加
    
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'product_name' => $this->faker->word,  // ダミーの商品名
            'price' => $this->faker->numberBetween(100, 10000),  // 100から10,000の範囲のダミー価格
            'stock' => $this->faker->randomDigit,  // 0から9のランダムな数字でダミーの在庫数
            'comment' => $this->faker->sentence,  // ダミーの説明文
            'img_path' => 'https://picsum.photos/200/300',  // 200x300のランダムな画像
        ];
    }
}

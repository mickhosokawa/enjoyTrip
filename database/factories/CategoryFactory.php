<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        // Fakerのlexifyメソッドを使用して、特定の文字パターンに基づく文字列を生成します。
        // ここでは'Category ????'のようなパターンを想定しています。
        $categoryName = $this->faker->lexify('Category ????');

        // Fakerのtextメソッドで50文字のランダムなテキストを生成します。
        $categoryDescription = $this->faker->text(50);

        return [
            'name' => $categoryName,
            'description' => $categoryDescription,
        ];
    }
}

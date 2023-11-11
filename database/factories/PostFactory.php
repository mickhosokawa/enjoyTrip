<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
//use App\Models\Thread;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    // ランダムなthread_id, user_id, category_idを取得する
    //$threadId = Thread::query()->inRandomOrder()->first();
    
    public function definition(): array
    {
        $userId = User::query()->inRandomOrder()->first()->id;
        $categoryId = Category::query()->inRandomOrder()->first()->id;
        
        return [
            //'thread_id' => $threadId,
            'user_id' => $userId,
            'category_id' => $categoryId,
            'title' => $this->faker->text(50),
            'body' => $this->faker->text(200),
            'created_by' => $userId,
            'update_by' => $userId,
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();
        $user = User::factory()->create();
        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem bla bla bla </p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus arcu non dolor volutpat finibus. Donec ultrices sed est nec laoreet. Curabitur condimentum turpis libero, vitae vehicula quam sollicitudin suscipit. Vestibulum vulputate id elit nec molestie. Etiam posuere finibus justo, malesuada semper lectus tincidunt quis. Nulla quis malesuada sem. Ut varius erat elit, nec dictum purus pellentesque nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc ut ultrices lorem. Morbi luctus mauris a lacus condimentum, vitae fermentum dui sodales. Cras vel ligula quis eros maximus scelerisque eu feugiat lectus. Nam eu magna in turpis efficitur pellentesque. Duis auctor non metus vel tristique. Nunc viverra arcu non mi sagittis, et sodales risus commodo.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem bla bla bla </p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus arcu non dolor volutpat finibus. Donec ultrices sed est nec laoreet. Curabitur condimentum turpis libero, vitae vehicula quam sollicitudin suscipit. Vestibulum vulputate id elit nec molestie. Etiam posuere finibus justo, malesuada semper lectus tincidunt quis. Nulla quis malesuada sem. Ut varius erat elit, nec dictum purus pellentesque nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc ut ultrices lorem. Morbi luctus mauris a lacus condimentum, vitae fermentum dui sodales. Cras vel ligula quis eros maximus scelerisque eu feugiat lectus. Nam eu magna in turpis efficitur pellentesque. Duis auctor non metus vel tristique. Nunc viverra arcu non mi sagittis, et sodales risus commodo.</p>',
        ]);
    }
}

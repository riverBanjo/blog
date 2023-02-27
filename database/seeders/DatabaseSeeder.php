<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        
        Post::create([
            'user_id'     => $user->id,
            'category_id' => $family->id,
            'title'       => 'My Family Post',
            'slug'        => 'my-family-post',
            'excerpt'     => '<p>Lorem ipsum dolar sit amet.</p>',
            'body'        => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget nunc mauris. Morbi ut nibh et eros interdum egestas vitae ut erat. Morbi consequat felis ut quam mattis, non mollis erat suscipit. Curabitur venenatis justo in ante congue fermentum. Nulla lectus eros, ornare id diam vel, tincidunt fermentum ex. Donec auctor egestas felis id rhoncus. Pellentesque nulla mi, tempus vel magna sed, ultrices malesuada erat. Fusce molestie et dui ac sollicitudin. Duis sit amet sem a nibh pellentesque rutrum ut condimentum felis.</p>',
        ]);

        Post::create([
            'user_id'     => $user->id,
            'category_id' => $personal->id,
            'title'       => 'My Personal Post',
            'slug'        => 'my-personal-post',
            'excerpt'     => '<p>Lorem ipsum dolar sit amet.</p>',
            'body'        => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget nunc mauris. Morbi ut nibh et eros interdum egestas vitae ut erat. Morbi consequat felis ut quam mattis, non mollis erat suscipit. Curabitur venenatis justo in ante congue fermentum. Nulla lectus eros, ornare id diam vel, tincidunt fermentum ex. Donec auctor egestas felis id rhoncus. Pellentesque nulla mi, tempus vel magna sed, ultrices malesuada erat. Fusce molestie et dui ac sollicitudin. Duis sit amet sem a nibh pellentesque rutrum ut condimentum felis.</p>',
        ]);

        Post::create([
            'user_id'     => $user->id,
            'category_id' => $work->id,
            'title'       => 'My Work Post',
            'slug'        => 'my-work-post',
            'excerpt'     => '<p>Lorem ipsum dolar sit amet.</p>',
            'body'        => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget nunc mauris. Morbi ut nibh et eros interdum egestas vitae ut erat. Morbi consequat felis ut quam mattis, non mollis erat suscipit. Curabitur venenatis justo in ante congue fermentum. Nulla lectus eros, ornare id diam vel, tincidunt fermentum ex. Donec auctor egestas felis id rhoncus. Pellentesque nulla mi, tempus vel magna sed, ultrices malesuada erat. Fusce molestie et dui ac sollicitudin. Duis sit amet sem a nibh pellentesque rutrum ut condimentum felis.</p>',
        ]);
    }
}

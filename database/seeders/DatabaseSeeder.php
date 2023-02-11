<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rony Setiawan',
            'username' => 'rony100801',
            'email' => 'setiawanrony603@gmail.com',
            'password' => bcrypt('Rokil12345')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Yudi Satriawan',
        //     'email' => 'yudi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Hacking',
            'slug' => 'hacking'
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Postingan Judul Pertama',
        //     'slug' => 'postingan-judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, optio asperiores debitis quibusdam at, libero, nostrum consequuntur error vero ipsum molestiae? Esse atque animi vero placeat deserunt ipsum rerum. Tenetur.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum accusantium incidunt laboriosam id dolorem nesciunt quaerat inventore placeat, perspiciatis quae doloremque ut officia quia ab unde laborum amet ipsa facilis sunt cumque, dignissimos repellat? Saepe impedit mollitia explicabo doloremque sed molestiae distinctio eaque asperiores, voluptatem, accusantium esse nihil cupiditate necessitatibus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident molestiae expedita, dolorem vero recusandae dignissimos nihil eius labore libero et voluptates! Illo iste eveniet nemo exercitationem dolor. Explicabo ducimus facere recusandae beatae commodi quia dolore, quas, est ad aliquid ea cumque, vel accusamus voluptates minima suscipit rem cupiditate ipsum voluptatem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus at nisi ad laborum quo dolorum quisquam vitae nam debitis soluta itaque rem est distinctio dolores praesentium odit dolore assumenda perspiciatis repellat odio voluptatem, voluptate laboriosam vero! Velit accusantium cumque veritatis, vitae, ducimus expedita delectus mollitia blanditiis nihil debitis aut non.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Postingan Judul Kedua',
        //     'slug' => 'postingan-judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, optio asperiores debitis quibusdam at, libero, nostrum consequuntur error vero ipsum molestiae? Esse atque animi vero placeat deserunt ipsum rerum. Tenetur.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum accusantium incidunt laboriosam id dolorem nesciunt quaerat inventore placeat, perspiciatis quae doloremque ut officia quia ab unde laborum amet ipsa facilis sunt cumque, dignissimos repellat? Saepe impedit mollitia explicabo doloremque sed molestiae distinctio eaque asperiores, voluptatem, accusantium esse nihil cupiditate necessitatibus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident molestiae expedita, dolorem vero recusandae dignissimos nihil eius labore libero et voluptates! Illo iste eveniet nemo exercitationem dolor. Explicabo ducimus facere recusandae beatae commodi quia dolore, quas, est ad aliquid ea cumque, vel accusamus voluptates minima suscipit rem cupiditate ipsum voluptatem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus at nisi ad laborum quo dolorum quisquam vitae nam debitis soluta itaque rem est distinctio dolores praesentium odit dolore assumenda perspiciatis repellat odio voluptatem, voluptate laboriosam vero! Velit accusantium cumque veritatis, vitae, ducimus expedita delectus mollitia blanditiis nihil debitis aut non.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Postingan Judul Ketiga',
        //     'slug' => 'postingan-judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, optio asperiores debitis quibusdam at, libero, nostrum consequuntur error vero ipsum molestiae? Esse atque animi vero placeat deserunt ipsum rerum. Tenetur.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum accusantium incidunt laboriosam id dolorem nesciunt quaerat inventore placeat, perspiciatis quae doloremque ut officia quia ab unde laborum amet ipsa facilis sunt cumque, dignissimos repellat? Saepe impedit mollitia explicabo doloremque sed molestiae distinctio eaque asperiores, voluptatem, accusantium esse nihil cupiditate necessitatibus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident molestiae expedita, dolorem vero recusandae dignissimos nihil eius labore libero et voluptates! Illo iste eveniet nemo exercitationem dolor. Explicabo ducimus facere recusandae beatae commodi quia dolore, quas, est ad aliquid ea cumque, vel accusamus voluptates minima suscipit rem cupiditate ipsum voluptatem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus at nisi ad laborum quo dolorum quisquam vitae nam debitis soluta itaque rem est distinctio dolores praesentium odit dolore assumenda perspiciatis repellat odio voluptatem, voluptate laboriosam vero! Velit accusantium cumque veritatis, vitae, ducimus expedita delectus mollitia blanditiis nihil debitis aut non.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Postingan Judul Keempat',
        //     'slug' => 'postingan-judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, optio asperiores debitis quibusdam at, libero, nostrum consequuntur error vero ipsum molestiae? Esse atque animi vero placeat deserunt ipsum rerum. Tenetur.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum accusantium incidunt laboriosam id dolorem nesciunt quaerat inventore placeat, perspiciatis quae doloremque ut officia quia ab unde laborum amet ipsa facilis sunt cumque, dignissimos repellat? Saepe impedit mollitia explicabo doloremque sed molestiae distinctio eaque asperiores, voluptatem, accusantium esse nihil cupiditate necessitatibus!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident molestiae expedita, dolorem vero recusandae dignissimos nihil eius labore libero et voluptates! Illo iste eveniet nemo exercitationem dolor. Explicabo ducimus facere recusandae beatae commodi quia dolore, quas, est ad aliquid ea cumque, vel accusamus voluptates minima suscipit rem cupiditate ipsum voluptatem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus at nisi ad laborum quo dolorum quisquam vitae nam debitis soluta itaque rem est distinctio dolores praesentium odit dolore assumenda perspiciatis repellat odio voluptatem, voluptate laboriosam vero! Velit accusantium cumque veritatis, vitae, ducimus expedita delectus mollitia blanditiis nihil debitis aut non.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}

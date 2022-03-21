<?php

namespace Database\Seeders;

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
        

        User::create([
            'name'=>'Halomoan Nababan',
            'username' => 'halomoan',
            'email'=>'halomoan@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        // User::create([
        //     'name'=>'Eva Elfie',
        //     'email'=>'evaelfie@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'web-personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse. Quasi voluptatum delectus quo officia? Natus quaerat nulla blanditiis ipsum suscipit animi sunt, necessitatibus nisi, magni, hic eius! Doloremque necessitatibus enim numquam quae dolore. Quibusdam, ut! Voluptatem, unde deserunt? Hic et dolorum harum dolor ipsa minus minima error dicta quae placeat. Soluta, commodi sunt? Ratione at quos facilis velit tenetur, veniam maxime consectetur nihil excepturi, nam blanditiis voluptates, ipsa vel voluptas nesciunt quo fuga accusamus cupiditate labore error molestiae iste officia fugit? Explicabo, soluta fugiat esse eum perspiciatis atque! Beatae illo doloribus officia quam? Harum doloribus fugit numquam sed praesentium neque est quis aspernatur voluptatibus quod, esse error? Et itaque quod quae? Magnam nam asperiores rerum consequatur autem?',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse. Quasi voluptatum delectus quo officia? Natus quaerat nulla blanditiis ipsum suscipit animi sunt, necessitatibus nisi, magni, hic eius! Doloremque necessitatibus enim numquam quae dolore. Quibusdam, ut! Voluptatem, unde deserunt? Hic et dolorum harum dolor ipsa minus minima error dicta quae placeat. Soluta, commodi sunt? Ratione at quos facilis velit tenetur, veniam maxime consectetur nihil excepturi, nam blanditiis voluptates, ipsa vel voluptas nesciunt quo fuga accusamus cupiditate labore error molestiae iste officia fugit? Explicabo, soluta fugiat esse eum perspiciatis atque! Beatae illo doloribus officia quam? Harum doloribus fugit numquam sed praesentium neque est quis aspernatur voluptatibus quod, esse error? Et itaque quod quae? Magnam nam asperiores rerum consequatur autem?',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ke-tiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse. Quasi voluptatum delectus quo officia? Natus quaerat nulla blanditiis ipsum suscipit animi sunt, necessitatibus nisi, magni, hic eius! Doloremque necessitatibus enim numquam quae dolore. Quibusdam, ut! Voluptatem, unde deserunt? Hic et dolorum harum dolor ipsa minus minima error dicta quae placeat. Soluta, commodi sunt? Ratione at quos facilis velit tenetur, veniam maxime consectetur nihil excepturi, nam blanditiis voluptates, ipsa vel voluptas nesciunt quo fuga accusamus cupiditate labore error molestiae iste officia fugit? Explicabo, soluta fugiat esse eum perspiciatis atque! Beatae illo doloribus officia quam? Harum doloribus fugit numquam sed praesentium neque est quis aspernatur voluptatibus quod, esse error? Et itaque quod quae? Magnam nam asperiores rerum consequatur autem?',
        //     'category_id'=> 2,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aliquam possimus esse. Quasi voluptatum delectus quo officia? Natus quaerat nulla blanditiis ipsum suscipit animi sunt, necessitatibus nisi, magni, hic eius! Doloremque necessitatibus enim numquam quae dolore. Quibusdam, ut! Voluptatem, unde deserunt? Hic et dolorum harum dolor ipsa minus minima error dicta quae placeat. Soluta, commodi sunt? Ratione at quos facilis velit tenetur, veniam maxime consectetur nihil excepturi, nam blanditiis voluptates, ipsa vel voluptas nesciunt quo fuga accusamus cupiditate labore error molestiae iste officia fugit? Explicabo, soluta fugiat esse eum perspiciatis atque! Beatae illo doloribus officia quam? Harum doloribus fugit numquam sed praesentium neque est quis aspernatur voluptatibus quod, esse error? Et itaque quod quae? Magnam nam asperiores rerum consequatur autem?',
        //     'category_id'=> 2,
        //     'user_id'=>2
        // ]);

    }
}

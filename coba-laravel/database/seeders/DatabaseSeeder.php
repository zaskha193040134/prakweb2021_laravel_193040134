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
        

        // User::create([
        //     'name' => 'Zaskha',
        //     'email' => 'zaskha@mail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rika',
        //     'email' => 'rika@mail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertamax',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo inventore veniam nostrum fugit minus nam cupiditate ex. Molestiae, officia quae necessitatibus consequuntur libero explicabo ea inventore repellat nam ab sapiente atque ipsam? Ut saepe velit perspiciatis quas iure delectus earum dignissimos sint doloremque. Ad, dolore, qui fugit veniam vitae sequi consequatur corporis, numquam nisi cum expedita a impedit repellat quo. Commodi nisi dolore recusandae voluptatem suscipit molestias expedita accusamus ex reiciendis similique ratione eaque accusantium voluptatibus libero incidunt inventore tenetur consectetur harum aperiam voluptate quo, debitis quam? Corrupti nihil asperiores cupiditate ad doloribus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo inventore veniam nostrum fugit minus nam cupiditate ex. Molestiae, officia quae necessitatibus consequuntur libero explicabo ea inventore repellat nam ab sapiente atque ipsam? Ut saepe velit perspiciatis quas iure delectus earum dignissimos sint doloremque. Ad, dolore, qui fugit veniam vitae sequi consequatur corporis, numquam nisi cum expedita a impedit repellat quo. Commodi nisi dolore recusandae voluptatem suscipit molestias expedita accusamus ex reiciendis similique ratione eaque accusantium voluptatibus libero incidunt inventore tenetur consectetur harum aperiam voluptate quo, debitis quam? Corrupti nihil asperiores cupiditate ad doloribus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo inventore veniam nostrum fugit minus nam cupiditate ex. Molestiae, officia quae necessitatibus consequuntur libero explicabo ea inventore repellat nam ab sapiente atque ipsam? Ut saepe velit perspiciatis quas iure delectus earum dignissimos sint doloremque. Ad, dolore, qui fugit veniam vitae sequi consequatur corporis, numquam nisi cum expedita a impedit repellat quo. Commodi nisi dolore recusandae voluptatem suscipit molestias expedita accusamus ex reiciendis similique ratione eaque accusantium voluptatibus libero incidunt inventore tenetur consectetur harum aperiam voluptate quo, debitis quam? Corrupti nihil asperiores cupiditate ad doloribus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, suscipit? Ut in, odio totam magni explicabo inventore veniam nostrum fugit minus nam cupiditate ex. Molestiae, officia quae necessitatibus consequuntur libero explicabo ea inventore repellat nam ab sapiente atque ipsam? Ut saepe velit perspiciatis quas iure delectus earum dignissimos sint doloremque. Ad, dolore, qui fugit veniam vitae sequi consequatur corporis, numquam nisi cum expedita a impedit repellat quo. Commodi nisi dolore recusandae voluptatem suscipit molestias expedita accusamus ex reiciendis similique ratione eaque accusantium voluptatibus libero incidunt inventore tenetur consectetur harum aperiam voluptate quo, debitis quam? Corrupti nihil asperiores cupiditate ad doloribus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

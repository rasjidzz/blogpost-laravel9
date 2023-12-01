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

        // User::create([
        //     'name' => 'Risjad Shidqi',
        //     'email' => 'risjadsf@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        // User::create([
        //     'name' => 'Doddy Suherman',
        //     'email' => 'doddys@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.
        //     Debitis doloribus quidem eligendi veritatis harum labore magni, pariatur
        //     cupiditate praesentium. Libero adipisci dolorem fugiat repellat unde ex
        //     excepturi neque nam non porro, nostrum enim velit accusamus iure fuga! Explicabo
        //     tenetur officiis repellat illo maiores fugit dolore eius recusandae libero
        //     expedita nobis, voluptate sit eaque vero veniam quam quisquam cupiditate iure
        //     consequuntur. Maiores, ad! Culpa velit maxime impedit excepturi facere nesciunt
        //     autem alias aperiam rem deserunt?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.
        //     Debitis doloribus quidem eligendi veritatis harum labore magni, pariatur
        //     cupiditate praesentium. Libero adipisci dolorem fugiat repellat unde ex
        //     excepturi neque nam non porro, nostrum enim velit accusamus iure fuga! Explicabo
        //     tenetur officiis repellat illo maiores fugit dolore eius recusandae libero
        //     expedita nobis, voluptate sit eaque vero veniam quam quisquam cupiditate iure
        //     consequuntur. Maiores, ad! Culpa velit maxime impedit excepturi facere nesciunt
        //     autem alias aperiam rem deserunt?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.
        //     Debitis doloribus quidem eligendi veritatis harum labore magni, pariatur
        //     cupiditate praesentium. Libero adipisci dolorem fugiat repellat unde ex
        //     excepturi neque nam non porro, nostrum enim velit accusamus iure fuga! Explicabo
        //     tenetur officiis repellat illo maiores fugit dolore eius recusandae libero
        //     expedita nobis, voluptate sit eaque vero veniam quam quisquam cupiditate iure
        //     consequuntur. Maiores, ad! Culpa velit maxime impedit excepturi facere nesciunt
        //     autem alias aperiam rem deserunt?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed magni fuga
        //     molestias deleniti. Tempore nihil nisi, tenetur at earum velit illum dolor quasi
        //     dicta non eos amet fuga, perferendis voluptate? Temporibus dolores amet ea.
        //     Debitis doloribus quidem eligendi veritatis harum labore magni, pariatur
        //     cupiditate praesentium. Libero adipisci dolorem fugiat repellat unde ex
        //     excepturi neque nam non porro, nostrum enim velit accusamus iure fuga! Explicabo
        //     tenetur officiis repellat illo maiores fugit dolore eius recusandae libero
        //     expedita nobis, voluptate sit eaque vero veniam quam quisquam cupiditate iure
        //     consequuntur. Maiores, ad! Culpa velit maxime impedit excepturi facere nesciunt
        //     autem alias aperiam rem deserunt?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        User::factory(15)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Designing',
            'slug' => 'web-designing'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(25)->create();
    }
}

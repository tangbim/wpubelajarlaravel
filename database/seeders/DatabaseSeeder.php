<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        // User::create([
        //     'name' => 'Sandhika',
        //     'email' => 'sandika@gmail.com',
        //     'password' => bcrypt("12345")
        // ]);

        // User::create([
        //     'name' => 'Ferry',
        //     'email' => 'ferry@gmail.com',
        //     'password' => bcrypt("54321")
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

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident ipsa voluptatem fuga obcaecati rerum hic suscipit doloribus magnam, sequi minus dolorum cum asperiores quibusdam repellat mollitia esse velit blanditiis modi?",
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptate rerum voluptatem enim, tenetur asperiores fugiat eos libero rem illum, possimus ab nulla vero, ipsa eum quia magni ut obcaecati in consequatur? Id distinctio consequuntur quod culpa voluptates recusandae, animi sed ipsam placeat non, officia commodi qui quas, illo tenetur itaque ipsum. Possimus eius odit nesciunt debitis ab rem harum, tempore itaque sunt porro ducimus vero eum dolorem explicabo assumenda consequuntur suscipit, ipsa nemo commodi, id voluptatum dolorum quisquam nihil. Inventore et, possimus dolor tempora officia saepe deserunt fugit explicabo adipisci laudantium animi, culpa non, sapiente asperiores sit in aut.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident ipsa voluptatem fuga obcaecati rerum hic suscipit doloribus magnam, sequi minus dolorum cum asperiores quibusdam repellat mollitia esse velit blanditiis modi?",
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptate rerum voluptatem enim, tenetur asperiores fugiat eos libero rem illum, possimus ab nulla vero, ipsa eum quia magni ut obcaecati in consequatur? Id distinctio consequuntur quod culpa voluptates recusandae, animi sed ipsam placeat non, officia commodi qui quas, illo tenetur itaque ipsum. Possimus eius odit nesciunt debitis ab rem harum, tempore itaque sunt porro ducimus vero eum dolorem explicabo assumenda consequuntur suscipit, ipsa nemo commodi, id voluptatum dolorum quisquam nihil. Inventore et, possimus dolor tempora officia saepe deserunt fugit explicabo adipisci laudantium animi, culpa non, sapiente asperiores sit in aut.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident ipsa voluptatem fuga obcaecati rerum hic suscipit doloribus magnam, sequi minus dolorum cum asperiores quibusdam repellat mollitia esse velit blanditiis modi?",
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptate rerum voluptatem enim, tenetur asperiores fugiat eos libero rem illum, possimus ab nulla vero, ipsa eum quia magni ut obcaecati in consequatur? Id distinctio consequuntur quod culpa voluptates recusandae, animi sed ipsam placeat non, officia commodi qui quas, illo tenetur itaque ipsum. Possimus eius odit nesciunt debitis ab rem harum, tempore itaque sunt porro ducimus vero eum dolorem explicabo assumenda consequuntur suscipit, ipsa nemo commodi, id voluptatum dolorum quisquam nihil. Inventore et, possimus dolor tempora officia saepe deserunt fugit explicabo adipisci laudantium animi, culpa non, sapiente asperiores sit in aut.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident ipsa voluptatem fuga obcaecati rerum hic suscipit doloribus magnam, sequi minus dolorum cum asperiores quibusdam repellat mollitia esse velit blanditiis modi?",
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptate rerum voluptatem enim, tenetur asperiores fugiat eos libero rem illum, possimus ab nulla vero, ipsa eum quia magni ut obcaecati in consequatur? Id distinctio consequuntur quod culpa voluptates recusandae, animi sed ipsam placeat non, officia commodi qui quas, illo tenetur itaque ipsum. Possimus eius odit nesciunt debitis ab rem harum, tempore itaque sunt porro ducimus vero eum dolorem explicabo assumenda consequuntur suscipit, ipsa nemo commodi, id voluptatum dolorum quisquam nihil. Inventore et, possimus dolor tempora officia saepe deserunt fugit explicabo adipisci laudantium animi, culpa non, sapiente asperiores sit in aut.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}

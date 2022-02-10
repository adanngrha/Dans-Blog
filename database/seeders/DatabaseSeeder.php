<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Ardana',
            'username' => 'adann',
            'email' => 'adanngrha@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Data',
            'slug' => 'data',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum architecto natus neque enim veniam laborum distinctio ea doloremque. Sit, praesentium porro! Repellat illum amet voluptatum suscipit autem nam. Natus, voluptatum nulla harum quas at autem voluptate modi. Nostrum quo nemo excepturi autem minima molestiae, accusamus quas veritatis. Corporis sequi vitae minus ipsam aspernatur blanditiis excepturi officiis dolorum voluptate voluptates. Esse minima illo, laborum doloribus iure veniam ratione pariatur sunt dolorum nam inventore tenetur.</p><p>Dolorem, sunt suscipit consectetur quam mollitia repellendus quisquam earum natus placeat nihil minima expedita nobis, repudiandae vero quos fugiat necessitatibus doloremque inventore veritatis! Nemo explicabo sed perspiciatis consequuntur, illum amet, quae beatae veniam eaque, voluptatum aspernatur aperiam ad a corrupti eveniet omnis? Impedit, unde? Eaque maxime nulla quisquam recusandae fuga cumque inventore dolorem quos, libero, omnis rem ex numquam sequi vel quibusdam soluta magnam minima unde sapiente facere, sed at. Tenetur dolor officiis quis amet aliquam assumenda quibusdam ratione, praesentium vel eos odit consectetur labore perferendis ea qui, impedit molestiae obcaecati laborum quas? Suscipit animi officia a debitis dignissimos. Deleniti a voluptatibus cupiditate, obcaecati tempora et natus labore eius provident enim, tenetur iste perspiciatis similique molestias aut distinctio autem harum rerum ullam quam quis aspernatur! Rem, aperiam?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum architecto natus neque enim veniam laborum distinctio ea doloremque. Sit, praesentium porro! Repellat illum amet voluptatum suscipit autem nam. Natus, voluptatum nulla harum quas at autem voluptate modi. Nostrum quo nemo excepturi autem minima molestiae, accusamus quas veritatis. Corporis sequi vitae minus ipsam aspernatur blanditiis excepturi officiis dolorum voluptate voluptates. Esse minima illo, laborum doloribus iure veniam ratione pariatur sunt dolorum nam inventore tenetur.</p><p>Dolorem, sunt suscipit consectetur quam mollitia repellendus quisquam earum natus placeat nihil minima expedita nobis, repudiandae vero quos fugiat necessitatibus doloremque inventore veritatis! Nemo explicabo sed perspiciatis consequuntur, illum amet, quae beatae veniam eaque, voluptatum aspernatur aperiam ad a corrupti eveniet omnis? Impedit, unde? Eaque maxime nulla quisquam recusandae fuga cumque inventore dolorem quos, libero, omnis rem ex numquam sequi vel quibusdam soluta magnam minima unde sapiente facere, sed at. Tenetur dolor officiis quis amet aliquam assumenda quibusdam ratione, praesentium vel eos odit consectetur labore perferendis ea qui, impedit molestiae obcaecati laborum quas? Suscipit animi officia a debitis dignissimos. Deleniti a voluptatibus cupiditate, obcaecati tempora et natus labore eius provident enim, tenetur iste perspiciatis similique molestias aut distinctio autem harum rerum ullam quam quis aspernatur! Rem, aperiam?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum architecto natus neque enim veniam laborum distinctio ea doloremque. Sit, praesentium porro! Repellat illum amet voluptatum suscipit autem nam. Natus, voluptatum nulla harum quas at autem voluptate modi. Nostrum quo nemo excepturi autem minima molestiae, accusamus quas veritatis. Corporis sequi vitae minus ipsam aspernatur blanditiis excepturi officiis dolorum voluptate voluptates. Esse minima illo, laborum doloribus iure veniam ratione pariatur sunt dolorum nam inventore tenetur.</p><p>Dolorem, sunt suscipit consectetur quam mollitia repellendus quisquam earum natus placeat nihil minima expedita nobis, repudiandae vero quos fugiat necessitatibus doloremque inventore veritatis! Nemo explicabo sed perspiciatis consequuntur, illum amet, quae beatae veniam eaque, voluptatum aspernatur aperiam ad a corrupti eveniet omnis? Impedit, unde? Eaque maxime nulla quisquam recusandae fuga cumque inventore dolorem quos, libero, omnis rem ex numquam sequi vel quibusdam soluta magnam minima unde sapiente facere, sed at. Tenetur dolor officiis quis amet aliquam assumenda quibusdam ratione, praesentium vel eos odit consectetur labore perferendis ea qui, impedit molestiae obcaecati laborum quas? Suscipit animi officia a debitis dignissimos. Deleniti a voluptatibus cupiditate, obcaecati tempora et natus labore eius provident enim, tenetur iste perspiciatis similique molestias aut distinctio autem harum rerum ullam quam quis aspernatur! Rem, aperiam?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet keempat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum architecto natus neque enim veniam laborum distinctio ea doloremque. Sit, praesentium porro! Repellat illum amet voluptatum suscipit autem nam. Natus, voluptatum nulla harum quas at autem voluptate modi. Nostrum quo nemo excepturi autem minima molestiae, accusamus quas veritatis. Corporis sequi vitae minus ipsam aspernatur blanditiis excepturi officiis dolorum voluptate voluptates. Esse minima illo, laborum doloribus iure veniam ratione pariatur sunt dolorum nam inventore tenetur.</p><p>Dolorem, sunt suscipit consectetur quam mollitia repellendus quisquam earum natus placeat nihil minima expedita nobis, repudiandae vero quos fugiat necessitatibus doloremque inventore veritatis! Nemo explicabo sed perspiciatis consequuntur, illum amet, quae beatae veniam eaque, voluptatum aspernatur aperiam ad a corrupti eveniet omnis? Impedit, unde? Eaque maxime nulla quisquam recusandae fuga cumque inventore dolorem quos, libero, omnis rem ex numquam sequi vel quibusdam soluta magnam minima unde sapiente facere, sed at. Tenetur dolor officiis quis amet aliquam assumenda quibusdam ratione, praesentium vel eos odit consectetur labore perferendis ea qui, impedit molestiae obcaecati laborum quas? Suscipit animi officia a debitis dignissimos. Deleniti a voluptatibus cupiditate, obcaecati tempora et natus labore eius provident enim, tenetur iste perspiciatis similique molestias aut distinctio autem harum rerum ullam quam quis aspernatur! Rem, aperiam?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet kelima',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum architecto natus neque enim veniam laborum distinctio ea doloremque. Sit, praesentium porro! Repellat illum amet voluptatum suscipit autem nam. Natus, voluptatum nulla harum quas at autem voluptate modi. Nostrum quo nemo excepturi autem minima molestiae, accusamus quas veritatis. Corporis sequi vitae minus ipsam aspernatur blanditiis excepturi officiis dolorum voluptate voluptates. Esse minima illo, laborum doloribus iure veniam ratione pariatur sunt dolorum nam inventore tenetur.</p><p>Dolorem, sunt suscipit consectetur quam mollitia repellendus quisquam earum natus placeat nihil minima expedita nobis, repudiandae vero quos fugiat necessitatibus doloremque inventore veritatis! Nemo explicabo sed perspiciatis consequuntur, illum amet, quae beatae veniam eaque, voluptatum aspernatur aperiam ad a corrupti eveniet omnis? Impedit, unde? Eaque maxime nulla quisquam recusandae fuga cumque inventore dolorem quos, libero, omnis rem ex numquam sequi vel quibusdam soluta magnam minima unde sapiente facere, sed at. Tenetur dolor officiis quis amet aliquam assumenda quibusdam ratione, praesentium vel eos odit consectetur labore perferendis ea qui, impedit molestiae obcaecati laborum quas? Suscipit animi officia a debitis dignissimos. Deleniti a voluptatibus cupiditate, obcaecati tempora et natus labore eius provident enim, tenetur iste perspiciatis similique molestias aut distinctio autem harum rerum ullam quam quis aspernatur! Rem, aperiam?</p>'
        // ]);
    }
}

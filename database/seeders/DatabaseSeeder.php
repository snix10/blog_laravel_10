<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\blog;
use App\Models\category;
use App\Models\user;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // user::create([
        //    'name' => 'saepulloh',
        //    'email'=> 'saepulloh@gmail.com',
        //       'password' => bcrypt('12345'),
        // ]);

        // user::create([
         //    'name' => 'yoga agiustian',
        //     'email'=> 'yoga@gmail.com',
        //        'password' => bcrypt('54321'),
        //  ]);
     
        category::create([
            'name' => 'web programing',
            'slug' => 'web-programing',

        ]);

        category::create([
            'name' => 'web design',
            'slug' => 'web-design',

        ]);

        category::create([
            'name' => 'personal',
            'slug' => 'personal',
        ]);

        blog::factory(20)->create();

        // blog::create([
        //     'judul' => 'web programing',
        //     'slug' => 'web-programing',
        //     'subjudul' => 'apa mmenbuyt yabng saya membuat wkjwjw oje jadi apa yg membuat kiat',
        //     'isi'  => 'jadi apa yg dimaksdu dengan mobile legensds haha kwkw yg kita saya apa ngsala coba',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // blog::create([
        //     'judul' => 'personal pribados wkwkw',
        //     'slug' => 'personal-pribados',
        //     'subjudul' => 'apa mmenbuyt yabng saya membuat wkjwjw oje jadi apa yg membuat kiat',
        //     'isi'  => 'jadi apa yg dimaksdu dengan mobile legensds haha kwkw yg kita saya apa ngsala coba
        //                ksjdkjksdjsk jeh eijle oijoi jdje ',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // blog::create([
        //     'judul' => 'jdudl ketiga coba',
        //     'slug' => 'jduul-kedya-kedua',
        //     'subjudul' => 'apa mmenbuyt yabng saya membuat wkjwjw oje jadi apa yg membuat kiat',
        //     'isi'  => 'jadi apa yg dimaksdu dengan mobile legensds haha kwkw yg kita saya apa ngsala coba
        //                ksjdkjksdjsk jeh eijle oijoi jdje ',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // blog::create([
        //     'judul' => 'hihi coba',
        //     'slug' => 'jduul-kedya-lima',
        //     'subjudul' => 'apa mmenbuyt yabng saya membuat wkjwjw oje jadi apa yg membuat kiat',
        //     'isi'  => 'jadi apa yg dimaksdu dengan mobile legensds haha kwkw yg kita saya apa ngsala coba
        //                ksjdkjksdjsk jeh eijle oijoi jdje ',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}

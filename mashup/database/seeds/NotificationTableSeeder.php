<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // seeding using querybuilder
        // Insert content into notifications
        // DB::table('post')->insert([
        //     'title' => 'Dummy',
        //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere vitae tortor ultrices iaculis. Vivamus maximus finibus libero. Duis a aliquam metus, sit amet consectetur nisl. Praesent ultricies tincidunt purus ac pharetra. Morbi rhoncus efficitur volutpat. Pellentesque eu elit sit amet diam fermentum tempor luctus ut eros. Duis dolor erat, ullamcorper ac aliquam nec, bibendum nec lectus. Fusce id libero tristique, semper ipsum ut, semper nibh. Vestibulum nec mauris vel eros eleifend consequat non sit amet lacus. In rhoncus ultrices fringilla. Aenean quam turpis, cursus ut commodo porta, vehicula vitae purus. Integer accumsan lacinia quam, at tristique nisi blandit efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras urna nisl, aliquet id hendrerit nec, vulputate eget quam. Nunc et urna eget arcu gravida scelerisque vel nec tortor. Suspendisse id vehicula libero. ',
        // ]);
            // using model factory
         factory(App\post::class, 50)->create();
    }
}

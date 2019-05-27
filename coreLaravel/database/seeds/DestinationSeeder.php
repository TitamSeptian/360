<?php

use Illuminate\Database\Seeder;
use App\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = [
            'user_id' => 2,
            'category_id' => 1,
            'slug' => str_slug('bukit pamoyanan', '-'),
            'name' => 'bukit pamoyanan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, veritatis. Deleniti dolorem sint molestias veniam perspiciatis commodi rem. Neque voluptatibus ad laboriosam sequi facere quos cupiditate animi magnam in reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minus dolor, at nostrum tempore consequuntur aspernatur cumque nesciunt voluptatum saepe? Saepe velit itaque, ratione placeat aliquid corporis maiores sapiente veritatis!',
            'address' => 'Kecamatan Tanjung Siang'
        ];

        Destination::create($destinations);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = ['Kecamatan Subang', 'Kecamatan Tanjung Siang', 'Kecamatan Ciater'];

        foreach ($locations as $location) {
            Location::create([
                'name' => $location
            ]);
        }
    }
}

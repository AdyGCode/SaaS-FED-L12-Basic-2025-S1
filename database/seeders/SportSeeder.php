<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            ['name' => "Hockey (m)",],
            ['name' => "Diving - Springboard 3m (w)",],
            ['name' => "Athletics - 100m (m)",],
            ['name' => "Swimming - 200m Freestyle (w)",],
            ['name' => "Basketball (w)",],
            ['name' => "Gymnastics - Floor Exercise (m)",],
            ['name' => "Cycling - Road Race (w)",],
            ['name' => "Tennis - Singles (m)",],
            ['name' => "Volleyball (w)",],
            ['name' => "Archery - Individual (m)",],
            ['name' => "Weightlifting - 73kg (w)",],
            ['name' => "Rowing - Double Sculls (m)",],
            ['name' => "Judo - Heavyweight (m)",],
            ['name' => "Boxing - Lightweight (w)",],
            ['name' => "Fencing - Épée Individual (m)",],
            ['name' => "Sailing - 470 (w)",],
            ['name' => "Shooting - 10m Air Rifle (m)",],
            ['name' => "Taekwondo - 57kg (w)",],
            ['name' => "Triathlon (m)",],
            ['name' => "Badminton - Singles (w)",],
            ['name' => "Canoeing - Slalom K1 (m)",],
            ['name' => "Equestrian - Individual Jumping",],
            ['name' => "Wrestling - Freestyle 65kg (m)",],
            ['name' => "Table Tennis - Singles (w)",],
            ['name' => "Surfing (m)",],
            ['name' => "Skateboarding - Park (w)",],
            ['name' => "Sport Climbing - Combined (m)",],
            ['name' => "Karate - Kata (w)",],
            ['name' => "Baseball (m)",],
            ['name' => "Softball (w)",],
            ['name' => "Rugby Sevens (m)",],
            ['name' => "Beach Volleyball (w)",],
        ];

        Sport::insert($sports);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

<<<<<<< HEAD
        $this->call(ProjectTypeTableSeeder::class);
=======
        // $this->call(UserTableSeeder::class);
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d

        Model::reguard();
    }
}

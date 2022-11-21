<?php

namespace Modules\Icheckin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class IcheckinDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(IcheckinModuleTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}

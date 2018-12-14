<?php

use Illuminate\Database\Migrations\Migration;

/**
 * Class SeedUsersData
 */
class SeedUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\User::create([
            'name' => 'Soldoros',
            'email' => 'coderlxc@gmail.com',
            'password' => bcrypt('123123'),
        ]);
    }
    
    
    /**
     * @throws Exception
     */
    public function down()
    {
        \App\Models\User::first()->delete();
    }
}

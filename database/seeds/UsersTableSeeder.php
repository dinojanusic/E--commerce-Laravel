<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name'          =>  'Root',
          'description'   =>  'This is the root category, don\'t delete this one',
          'parent_id'     =>  null,
          'menu'          =>  0,
      ]);
    }
}

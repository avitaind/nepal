<?php
  
  use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Facades\Hash;
  use Illuminate\Support\Str;

   
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Admin',
            'email'=>'info@ashplan.media',
            'password'=> bcrypt('123456'),
        ]);
    }
}
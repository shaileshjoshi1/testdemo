<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		
		\DB::table('students')->delete();
        
        \DB::table('users')->insert(array (
            0 =>
            array (
                "id" => 1,
				"name" => "admin",	
				"email" => "shailesh611@gmail.com",
				"password" => "admin123"
            ),
			 1 =>
			array (
                "id" => 2,
				"name" => "shaielsh",				
				"email" => "shailesh@gmail.com",
				"password" => "shailesh611"
				
            ),
			
			
			
			
        ));
		
		
		
		
		
		
    }
}

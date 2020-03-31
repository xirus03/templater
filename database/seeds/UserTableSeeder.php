<?php

use Illuminate\Database\Seeder;
use App\Models\Access\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'admin',
            'last_name' => 'trator',
            'middle_name' => 'is',
            'email' => 'admin@user.com',
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now()
        ]);
        
        $user->assignRole('admin');
    }
}

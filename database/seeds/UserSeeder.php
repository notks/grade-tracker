<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,20)->create();
        $admin =new User();
        $admin->name='admin';
        $admin->email = 'a@a';
        $admin->email_verified_at = now();
        $admin->role='admin';
        $admin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $admin->remember_token = Str::random(10);
        $admin->save();
        $admin =new User();
        $admin->name='admin';
        $admin->email = 'a@2';
        $admin->email_verified_at = now();
        $admin->role='admin';
        $admin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $admin->remember_token = Str::random(10);
        $admin->save();
    }
}

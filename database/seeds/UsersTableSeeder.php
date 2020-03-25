<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
          //  $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
              'name' => "admin",
              'phone'=>'0799012907',
              'email' => "admin@admin.com",
              'user_type'=>'admin',
              'email_verified_at' => now(),
              'password' => bcrypt('12345678'), // password
              'remember_token' => Str::random(10),
            ]);

                   User::create([
              'name' => "admin",
              'phone'=>'0799012907',
              'email' => "second@admin.com",
              'user_type'=>'user',
              'email_verified_at' => now(),
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
              'remember_token' => Str::random(10),
            ]);
                          User::create([
              'name' => "user",
              'phone'=>'0799012907',
              'email' => "third@user.com",
              'user_type'=>'user',
              'email_verified_at' => now(),
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
              'remember_token' => Str::random(10),
            ]);
                                 User::create([
              'name' => "user",
              'phone'=>'0799012907',
              'email' => "user2@user.com",
              'user_type'=>'user',
              'email_verified_at' => now(),
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
              'remember_token' => Str::random(10),
            ]);
        }


    }

}

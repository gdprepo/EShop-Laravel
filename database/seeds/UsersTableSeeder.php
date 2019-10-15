<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 100)->create();

        $role_admin = Role::where('name', 'Admin')->first();
        factory(App\User::class, 10)->create()->each(function ($user)  use ($role_admin){
            //$user->posts()->save(factory(App\Post::class)->make());
            $user->assignRole($role_admin);
        });

        $role_moderator = Role::where('name', 'Moderator')->first();
        factory(App\User::class, 40)->create()->each(function ($user)  use ($role_moderator){
            //$user->posts()->save(factory(App\Post::class)->make());
            $user->assignRole($role_moderator);
        });

        $role_autre = Role::where('name', 'Autres')->first();
        factory(App\User::class, 50)->create()->each(function ($user)  use ($role_autres){
            //$user->posts()->save(factory(App\Post::class)->make());
            $user->assignRole($role_autres);
        });
    }
}

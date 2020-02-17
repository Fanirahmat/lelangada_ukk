<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "admin@lelangada.test";
        $administrator->phone = "087654113887";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("lelangada");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Gudo, Jombang, Jawa Timur";

        $administrator->save();

        $this->command->info("User Admin berhasil ditambahkan");
    }
}

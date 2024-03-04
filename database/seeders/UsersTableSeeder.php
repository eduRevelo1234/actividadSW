<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ejemplo',
            'surname' => 'Usuario',
            'dni' => '123456789',
            'email' => 'seguridadweb@campusviu.es',
            'password' => bcrypt('S3gur1d4d?W3b'),
            'telephone' => '1234567890',
            'country' => 'ECUADOR',
            'bankingAccount' => 'ES9121000418450200051332',
            'about' => 'Este es un usuario de ejemplo.'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = now();

        //admin
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => $dateNow,
            'password' => Hash::make('1wd8o;'),
            'is_super_admin' => true,
        ]);

        
        User::create([
            'name' => 'Dummy Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => $dateNow,
            'password' => Hash::make('123123'),
            'is_super_admin' => false,
        ]);

        for ($x = 0; $x <= 3; $x++) {
            Registration::create([
                'room_no' => "001".$x,
                'room_type' => 'DUMMY / 1',
                'arrival' => Carbon::parse('02/12/2019'),
                'departure' => Carbon::parse('04/12/2019'),
                'room_rate' => '500000',
                'last_name' => 'Dummy',
                'first_name' => 'Ronna Nichole',
                'source' => 'WALK IN GUEST',
                'address' => '44000 Donlorenzo Drive, Unit 10Los Angeles,',
                'place_date_birth' => 'California, U.S.A 31/12/1981',
                'passport_id_number' => '472309233',
                'nationality' => 'USA',
                'telp_no_handphone' => '081654321354',
                'city' => 'Los Angeles',
                'email' => 'liasldias@hotmail.com',
                'remark' => '',
                'signature_path' => '1656006055.PNG', 
                ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Registration;
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
        for ($x = 0; $x <= 30; $x++) {
            Registration::create([
                'room_no' => "001".$x,
                'room_type' => 'GSU / 1',
                'arrival' => Carbon::parse('02/12/2019'),
                'departure' => Carbon::parse('04/12/2019'),
                'room_rate' => '500000',
                'last_name' => 'Ragland',
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

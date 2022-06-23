<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('room_no');
            $table->string('room_type');
            $table->date('arrival');
            $table->date('departure');
            $table->string('room_rate')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('source')->nullable();
            $table->text('address');
            $table->text('place_date_birth');
            $table->string('passport_id_number');
            $table->string('nationality');
            $table->string('telp_no_handphone')->nullable();
            $table->string('city');
            $table->string('email');
            $table->text('remark')->nullable();
            $table->text('signature_path', "65535")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('Data', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->integer('Umur');
            $table->string('Alamat');
            $table->string('Nomor_Telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('Data');
    }
};

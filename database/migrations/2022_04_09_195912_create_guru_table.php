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
        Schema::create('guru', function (Blueprint $table) {
            $table->id('NIG');
            $table->string('Nama_Lengkap')->nullable();
            $table->string('Nama_Mandarin')->nullable();
            $table->string('Tempat_Lahir')->nullable();
            $table->date('Tanggal_Lahir')->nullable();
            $table->string('Jenis_Kelamin')->nullable();
            $table->string('Jabatan')->nullable();
            $table->string('Agama')->nullable();
            $table->string('Pendidikan')->nullable();
            $table->string('No_Whatsapp')->nullable();
            $table->string('Alamat')->nullable();
            $table->string('Memohon_Ketuhanan')->nullable();
            $table->string('Vegetarian')->nullable();
            $table->string('Tempat_Memohon_Ketuhanan')->nullable();
            $table->date('Tanggal_Memohon_Ketuhanan')->nullable();
            $table->string('Foto_Guru')->nullable();
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
        Schema::dropIfExists('guru');
    }
};

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
        Schema::create('pendaftaranonline', function (Blueprint $table) {
            $table->id('No_Form');
            $table->string('Nama_Lengkap')->nullable();
            $table->string('Nama_Mandarin')->nullable();
            $table->string('Tempat_Lahir')->nullable();
            $table->date('Tanggal_Lahir')->nullable();
            $table->string('Jenis_Kelamin')->nullable();
            $table->string('Kelas_ID')->nullable();
            $table->string('Agama')->nullable();
            $table->string('Sekolah_Asal')->nullable();
            $table->string('Kelas_Asal')->nullable();
            $table->string('Alamat')->nullable();
            $table->string('Memohon_Ketuhanan')->nullable();
            $table->string('Vegetarian')->nullable();
            $table->string('Tempat_Memohon_Ketuhanan')->nullable();
            $table->date('Tanggal_Memohon_Ketuhanan')->nullable();
            $table->string('Nama_Ayah')->nullable();
            $table->string('Agama_Ayah')->nullable();
            $table->string('No_HP_Ayah')->nullable();
            $table->string('Nama_Ibu')->nullable();
            $table->string('No_HP_Ibu')->nullable();
            $table->string('Agama_Ibu')->nullable();
            $table->string('Nama_Ortu_Aktif')->nullable();
            $table->string('No_Whatsapp')->nullable();
            $table->string('Foto_Siswa')->nullable();
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
        Schema::dropIfExists('pendaftaranonline');
    }
};

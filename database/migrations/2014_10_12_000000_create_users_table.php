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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('noinduk_siswa')->nullable();
            $table->string('kelas')->nullable();
            $table->string('Alamat');
            $table->string('level');
            $table->string('noinduk_guru')->nullable();
            $table->string('email')->unique();
            $table->string('asal_sekolah')->nullable();
            $table->string('tempat_prakerin')->nullable();
            $table->string('pimpinan_dudi')->nullable();
            $table->string('pembimbing_dudi')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('nama_guru')->nullable();
            $table->string('telepon')->nullable();
            $table->string('password');
            $table->string('jabatan')->nullable();
            $table->string('image');
            $table->string('alamat_sekolah')->nullable();
            $table->string('telepon_sekolah')->nullable();
            $table->string('email_sekolah')->nullable();
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
        Schema::dropIfExists('users');
    }
};

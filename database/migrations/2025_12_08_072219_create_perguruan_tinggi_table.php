<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perguruan_tinggi', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->string('singkatan');
            $table->string('akreditasi')->nullable();
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perguruan_tinggi');
    }
};

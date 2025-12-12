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
        Schema::create('nilai_skala', function (Blueprint $table) {
            $table->id();
            // Foreign key ke program_studi
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')
                ->references('id')
                ->on('program_studi')
                ->onDelete('cascade'); // jika prodi dihapus, skala ikut hilang
            $table->string('nilai_huruf', 2); // misal A, B+, dll
            $table->decimal('nilai_index', 5, 2); // misal 4.00, 3.50
            $table->decimal('bobot_minimum', 5, 2); // misal 91.00
            $table->decimal('bobot_maksimum', 5, 2); // misal 100.00
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_skala');
    }
};

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
        Schema::create('daftaracara', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama_kegiatan');
            $table->timestamps();
            $table->foreign('nim')->references('nim')->on('alumnus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('daftaracara', function (Blueprint $table) {
            $table->dropForeign(['nim']);
        });

        Schema::dropIfExists('daftaracara');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * INI UNTUK FORM CRUD:
     * - BIODATA DIRI_CUSTOMER
     * - CUSTOMER_ADMIN
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_sim');
            $table->string('jenis_kelamin');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('password');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

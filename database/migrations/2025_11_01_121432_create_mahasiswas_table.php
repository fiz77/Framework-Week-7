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
        Schema::create('mahasiswas', function (Blueprint $table): void {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->decimal('ipk', 3, 2);
            $table->timestamps();

            $table->decimal('ipk',3,2)->default(1.00);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};

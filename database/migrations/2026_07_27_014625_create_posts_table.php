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
        Schema::create('posts', function (Blueprint $table) {
             // Kolom id, otomatis nomor urut buat tiap data
            $table->id();
            // Kolom title, buat nyimpen judul (teks pendek)
            $table->string('title');
            // Kolom body, buat nyimpen isi konten (teks panjang)
            $table->text('body');
            // Kolom is_published, buat nandain post ini udah tayang atau belum
            // Defaultnya false, artinya post baru dianggap belum tayang
            $table->boolean('is_published')->default(false);
            // Otomatis nyimpen kapan data dibuat dan terakhir diubah
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

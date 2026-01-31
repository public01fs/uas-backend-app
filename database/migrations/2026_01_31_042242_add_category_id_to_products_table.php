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
        Schema::table('products', function (Blueprint $table) {
            // Menambahkan kolom category_id sebagai foreign key
            $table->foreignId('category_id')
                ->after('id') // diletakkan setelah kolom id
                ->nullable()  // boleh kosong dulu agar data lama tidak error
                ->constrained('categories')
                ->onDelete('cascade'); // Jika kategori dihapus, produk ikut terhapus
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }

    
};

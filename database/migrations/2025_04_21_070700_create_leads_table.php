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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // sales yang input
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // produk yang dipilih
            $table->foreignId('customer_id')->nullable()->constrained()->onDelete('cascade'); // project yang diajukan
            $table->string('name');
            $table->string('contact');
            $table->string('company')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('customer_created')->default(false); // untuk menandai apakah customer sudah dibuat
            $table->timestamps();
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};

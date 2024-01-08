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
        Schema::create('orderies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('sum');
            $table->foreignId('delivery_method_id')->constrained();
            $table->foreignId('payment_type_id')->constrained();
            $table->text('address')->nullable();
            $table->json('products');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderies');
    }
};

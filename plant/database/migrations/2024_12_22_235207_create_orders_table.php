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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name')->nullable();
            $table->string(column: 'email')->nullable();
            $table->string(column: 'phone')->nullable();
            $table->string(column: 'address')->nullable();
            $table->string(column: 'user_id')->nullable();


            $table->string(column: 'product_title')->nullable();
            $table->string(column: 'quantity')->nullable();

            $table->string(column: 'price')->nullable();

            $table->string(column: 'image')->nullable();
            $table->string(column: 'product_id')->nullable();
            $table->string(column: 'payment_status')->nullable();
            $table->string(column: 'delivery_status')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

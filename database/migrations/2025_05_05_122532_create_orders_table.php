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
            $table->string('g_number');
            $table->dateTime('date');
            $table->date('last_change_date');
            $table->string('supplier_article');
            $table->string('tech_size');
            $table->string('barcode'); // Строка, чтобы избежать обрезки длинных чисел
            $table->decimal('total_price', 10, 2);
            $table->unsignedTinyInteger('discount_percent');
            $table->string('warehouse_name');
            $table->string('oblast');
            $table->bigInteger('income_id');
            $table->string('odid');
            $table->bigInteger('nm_id');
            $table->string('subject');
            $table->string('category');
            $table->string('brand');
            $table->boolean('is_cancel');
            $table->dateTime('cancel_dt')->nullable();
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

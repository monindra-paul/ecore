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
        Schema::create('view_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('bill_no')->nullable();
            $table->string('bill_date')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->enum('service_type', ['Service', 'Purchase', 'Order'])->nullable();
            $table->enum('item_type', ['Laptop', 'Desktop', 'Printer', 'CCTV'])->nullable();
            $table->string('device_no')->nullable();
            $table->string('problem')->nullable();
            $table->string('details')->nullable();
            $table->string('amount')->nullable();
            $table->enum('current_status', ['Pending', 'Ready', 'Not Repaired'])->nullable();
            $table->enum('delivery_status', ['Yes', 'No', 'In Process'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_statuses');
    }
};

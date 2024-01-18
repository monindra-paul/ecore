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
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('bits')->nullable();
            $table->string('version')->nullable();
            $table->enum('brand', ['Xerox', 'Hp', 'Epson', 'Canon', 'Brother', 'BizHub', 'Kyocera', 'Konica Minolta']);
            $table->string('type');
            $table->string('model_no');
            $table->string('link')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printers');
    }
};

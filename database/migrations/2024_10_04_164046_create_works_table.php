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
        Schema::create('tbl_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('tbl_work_categories')->onDelete('cascade');
            $table->text('title');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->text('live_url')->nullable();
            $table->longText('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_works');
    }
};

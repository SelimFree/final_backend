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
        Schema::disableForeignKeyConstraints();

        Schema::create('post_cate', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('PostId');
            $table->foreign('PostId')->references('Id')->on('post');
            $table->foreignId('CategoryName')->constrained('category', 'Name');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_cate');
    }
};

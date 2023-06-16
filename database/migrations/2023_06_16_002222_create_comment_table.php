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

        Schema::create('comment', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('Content');
            $table->string('Posted');
            $table->integer('PostId');
            $table->foreign('PostId')->references('Id')->on('post');
            $table->foreignId('UserName')->constrained('user', 'Name');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};

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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('content');
            $table->timestamps();
            // foreignkey
            $table->integer('id_category');
            $table->integer('id_attr');
            $table->foreign('id_category')
                    ->references('id')
                    ->on('categories')
                    // ->onDelete('cascade')
                    ->oDelete('set null');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

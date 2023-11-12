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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('thread_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id')->nullable()->comment('choose categories');
            $table->string('title', 50)->nullable()->comment('post title');
            $table->string('body', 500)->nullable()->comment('body');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

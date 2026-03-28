<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new  class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id');
            $table->string('title');
            $table->string('summary');
            $table->integer('days')->default(1);
            $table->decimal('price', 8, 2)->default(0);
            $table->integer('capacity')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('image');
            $table->enum('status', ['Available','published','Completed'])->default('Available');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('destination_id')->references('id')->on('destinations');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};

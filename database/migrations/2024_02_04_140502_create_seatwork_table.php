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
        Schema::create('seatwork', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->string('seatwork_no');
            $table->dateTime('date');
            $table->string('semester');
            $table->string('term');
            $table->double('score')->nullable();
            $table->integer('seatwork_item');
            $table->string('score_in_percent');
            $table->timestamps();

            $table->unique(['student_id', 'semester', 'term', 'seatwork_no']);
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seatwork');
    }
};

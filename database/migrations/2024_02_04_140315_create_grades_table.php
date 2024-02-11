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
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->dateTime('date');
            $table->string('semester');
            $table->string('term');
            $table->string('grade')->nullable();
            $table->string('remarks');
            $table->timestamps();

            $table->unique(['student_id', 'semester', 'term']);
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};

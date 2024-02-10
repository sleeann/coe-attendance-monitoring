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
        Schema::table('users', function (Blueprint $table) {
            $table->string('parent_name')->nullable();
            $table->string('address')->nullable();
            $table->string('sex')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('year')->nullable();
            $table->string('block')->nullable();
            $table->string('course')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('parent_name');
            $table->dropColumn('address');
            $table->dropColumn('sex');
            $table->dropColumn('contact_number');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('year');
            $table->dropColumn('block');
            $table->dropColumn('course');
        });
    }
};

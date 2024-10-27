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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('gr_no')->unique();
            $table->string('name');
            $table->string('caste')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('last_institution_attended')->nullable();
            $table->date('date_of_admission')->nullable();
            $table->string('class_admitted')->nullable();
            $table->string('conduct')->nullable();
            $table->text('remarks')->nullable();
            $table->string('extra_field')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

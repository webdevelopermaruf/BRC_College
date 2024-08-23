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
        Schema::create('applicant', function (Blueprint $table) {
            $table->id('applicant_id');
            $table->json('student_personal');
            $table->json('student_academic');
            $table->json('student_files');
            $table->string('applicant_no');
            $table->string('applicant_phone');
            $table->string('applicant_email');
            $table->string('applicant_password');
            $table->tinyInteger('applicant_status');
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

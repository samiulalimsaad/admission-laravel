<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('applicationId')->unique();
            $table->string('name');
            $table->string('hsc_roll');
            $table->string('hsc_board');
            $table->string('hsc_passing_year');
            $table->string('hsc_result');
            $table->string('ssc_roll');
            $table->string('ssc_board');
            $table->string('ssc_passing_year');
            $table->string('ssc_result');
            $table->string('profile_image')->nullable();
            $table->json('units')->nullable()->toArray();

            $table->string('father_name')->nullable()->unique();
            $table->string('mother_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('is_phone_number_verified')->default(false)->nullable();
            $table->integer('temp_otp')->nullable();
            $table->string('quota')->nullable();
            $table->string('exam_language')->default('en')->nullable();
            $table->boolean('is_paid')->default(false)->nullable();
            $table->string('invoice')->nullable();




            $table->unsignedBigInteger('user_id')->nullable();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

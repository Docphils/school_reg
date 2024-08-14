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
        Schema::create('register_forms', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('othernames');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('learner_surname');
            $table->string('learner_names');
            $table->date('dob');
            $table->enum('previous_class', ['pre_nursery','play_group','nursery','reception','grade_1','grade_2','grade_3','grade_4','grade_5','grade_6']);
            $table->string('remarks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_forms');
    }
};

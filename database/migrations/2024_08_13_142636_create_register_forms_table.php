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
            $table->enum('previous_class', ['Pre Nursery','Play Group','Nursery','Reception','Grade 1','Grade 2','Grade 3','Grade 4','Grade 5','Grade 6']);
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

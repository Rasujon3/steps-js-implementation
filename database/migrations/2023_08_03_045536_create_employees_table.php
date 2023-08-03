<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('mobile');
            $table->string('nid');
            $table->string('address');
            $table->string('gender');
            $table->decimal('ssc_gpa', 3, 2);
            $table->integer('ssc_year');
            $table->decimal('hsc_gpa', 3, 2);
            $table->integer('hsc_year');
            $table->decimal('bsc_cgpa', 3, 2);
            $table->integer('bsc_year');
            $table->decimal('msc_cgpa', 3, 2)->nullable();
            $table->integer('msc_year')->nullable();
            $table->string('previous_company_name');
            $table->string('designation');
            $table->string('experience');
            $table->string('current_salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};

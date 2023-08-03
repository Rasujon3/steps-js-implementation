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
        Schema::create('employee_educational_qualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id', 'employee_id')->references('id')->on('employee_personal_information');
            $table->decimal('ssc_gpa', 3, 2);
            $table->integer('ssc_year');
            $table->decimal('hsc_gpa', 3, 2);
            $table->integer('hsc_year');
            $table->decimal('bsc_cgpa', 3, 2);
            $table->integer('bsc_year');
            $table->decimal('msc_cgpa', 3, 2)->nullable();
            $table->integer('msc_year')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_educational_qualifications');
    }
};

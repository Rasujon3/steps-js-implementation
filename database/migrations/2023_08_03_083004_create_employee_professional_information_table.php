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
        Schema::create('employee_professional_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employees_id');
            $table->foreign('employees_id', 'employees_id')->references('id')->on('employee_personal_information');

            $table->string('previous_company_name');
            $table->string('designation');
            $table->string('experience');
            $table->string('current_salary');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_professional_information');
    }
};

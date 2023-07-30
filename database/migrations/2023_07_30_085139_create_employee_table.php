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

        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->integer('mobile');
            $table->string('nid');
            $table->text('address');
            $table->string('gender');
            $table->double('ssc_gpa',2,0);
            $table->double('ssc_year',2,0);
            $table->double('hsc_gpa',2,0);
            $table->double('hsc_year',2,0);
            $table->double('bsc_cgpa',2,0);
            $table->double('bsc_year',2,0);
            $table->double('msc_cgpa',2,0)->nullable();
            $table->double('msc_year',2,0)->nullable();;
            $table->string('previous_company_name');
            $table->string('designation');
            $table->double('experience',2,0);
            $table->double('current_salary',2,0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};

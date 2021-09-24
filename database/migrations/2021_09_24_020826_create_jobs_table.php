<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('application_start');
            $table->string('last_date');
            $table->string('salary');
            $table->string('position');
            $table->integer('vacancy');
            $table->string('eligibility');
            $table->text('description');
            //P = part time F = full time C = contractual O = online I = internship
            $table->enum('job_type',["P","F","C","O","I"]);
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
        Schema::dropIfExists('jobs');
    }
}

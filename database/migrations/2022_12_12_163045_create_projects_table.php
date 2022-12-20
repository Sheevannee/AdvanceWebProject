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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('proj_type');
            $table->string('proj_title');
            $table->date('sdate');
            $table->date('edate');
            $table->integer('duration');
            $table->string('progress');
            $table->string('status');
            $table->string('supervisors');
            $table->string('supervisors_id');
            $table->string('examiner_one');
            $table->string('examiner_two');
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
        Schema::dropIfExists('projects');
    }
};

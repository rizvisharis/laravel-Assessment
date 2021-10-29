<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('career');
            $table->string('1st_up');
            $table->string('2nd_up');
            $table->string('3rd_up');
            $table->string('4th_up');
            $table->string('track');
            $table->string('distance');
            $table->string('trk_dist');
            $table->string('firm');
            $table->string('good');
            $table->string('soft');
            $table->string('heavy');
            $table->string('synthetic');
            $table->string('night');
            $table->string('runner_id')->constrained('tbm_runners');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_form_data');
    }
}

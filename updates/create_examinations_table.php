<?php namespace AzahariZaman\Dosys\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateExaminationsTable extends Migration
{

    public function up()
    {
        Schema::create('azaharizaman_dosys_examinations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('group');
            $table->string('exam_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('azaharizaman_dosys_examinations');
    }

}

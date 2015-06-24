<?php namespace AzahariZaman\Dosys\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRadiographersTable extends Migration
{

    public function up()
    {
        Schema::create('azaharizaman_dosys_radiographers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('position');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('azaharizaman_dosys_radiographers');
    }

}

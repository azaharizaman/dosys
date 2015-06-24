<?php namespace AzahariZaman\Dosys\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBodyPartsTable extends Migration
{

    public function up()
    {
        Schema::create('azaharizaman_dosys_body_parts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('azaharizaman_dosys_body_parts');
    }

}

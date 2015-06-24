<?php namespace AzahariZaman\Dosys\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOrderTypesTable extends Migration
{

    public function up()
    {
        Schema::create('azaharizaman_dosys_order_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('azaharizaman_dosys_order_types');
    }


}

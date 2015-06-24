<?php namespace AzahariZaman\Dosys\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('azaharizaman_dosys_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('order_type_id');
            $table->string('MRN');
            $table->string('patient_name');
            $table->string('gender');
            $table->string('body_part_id');
            $table->string('doctor_id');
            $table->string('radiographer_id');
            $table->timestamp('order_date');
            $table->string('user')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
        Schema::create('azaharizaman_dosys_orders_examinations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('order_id')->unsigned();
            $table->integer('examination_id')->unsigned();
            $table->primary(['order_id', 'examination_id'], 'order_examination');
        });
    }

    public function down()
    {
        Schema::dropIfExists('azaharizaman_dosys_orders');
        Schema::dropIfExists('azaharizaman_dosys_orders_examinations');
    }

}

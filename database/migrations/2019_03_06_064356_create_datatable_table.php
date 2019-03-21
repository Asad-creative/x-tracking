<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatatableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('team')->nullable();
            $table->string('client')->nullable();
            $table->string('pm')->nullable();
            $table->string('status')->nullable();
            $table->string('deadline')->nullable();
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
        Schema::dropIfExists('datatable');
    }
}

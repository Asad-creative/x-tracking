<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDatatableAddParentAndSortOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datatables', function($table) {
            $table->integer('parent_id')->default(0)->after("id");
            $table->integer('sort_order')->default(0)->after("parent_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datatables', function($table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('sort_order');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyLotNumberInLotsTable extends Migration
{
    public function up()
    {
        Schema::table('lots', function (Blueprint $table) {
            $table->increments('lot_number')->change();
        });
    }

    public function down()
    {
        Schema::table('lots', function (Blueprint $table) {
            $table->integer('lot_number')->change();
        });
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropLotNumberColumnFromLotsTable extends Migration
{
    public function up()
    {
        Schema::table('lots', function (Blueprint $table) {
            $table->dropColumn('lot_number');
        });
    }

    public function down()
    {
        Schema::table('lots', function (Blueprint $table) {
            // Si vous souhaitez annuler la suppression et rétablir la colonne
            $table->integer('lot_number');
        });
    }
}

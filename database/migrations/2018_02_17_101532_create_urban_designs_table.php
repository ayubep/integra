<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrbanDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urban_designs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('UrbTitle',127);
            $table->text('UrbDescription');
            $table->string('UrbPhoto',127);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urban_designs');
    }
}

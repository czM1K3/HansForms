<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectInputChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_input_choices', function (Blueprint $table) {
            $table->id();
            $table->string("text");
            $table->string("description")->nullable();
            $table->integer("hidden_label")->default(0);
            $table->integer("order");
            $table->timestamps();

            //fk: select_input_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('select_input_choices');
    }
}

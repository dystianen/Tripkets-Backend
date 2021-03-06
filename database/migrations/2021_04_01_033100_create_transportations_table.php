<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->bigIncrements('id_transportation');
            $table->unsignedBigInteger('id_category');
            $table->string('transportation_name');
            $table->string('p_depart');
            $table->string('p_till');
            $table->string('price');
            $table->datetime('departure');
            $table->datetime('till');
            $table->string('image');
            $table->timestamps();

            $table->foreign('id_category')->references('id_category')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportations');
    }
}

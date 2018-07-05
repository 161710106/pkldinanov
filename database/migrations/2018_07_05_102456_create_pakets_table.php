<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_paket');
            $table->unsignedInteger('pembina_id');
            $table->foreign('pembina_id')->references('id')->on('pembinas')->onDelete('cascade');
            $table->unsignedInteger('fasilitas_id');
            $table->foreign('fasilitas_id')->references('id')->on('fasilitas')->onDelete('cascade');
            $table->unsignedInteger('syarat_id');
            $table->foreign('syarat_id')->references('id')->on('syarats')->onDelete('cascade');
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
        Schema::dropIfExists('pakets');
    }
}

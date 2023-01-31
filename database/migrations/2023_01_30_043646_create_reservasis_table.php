<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('kamar_id')->unsigned();
            $table->foreign('kamar_id')->references('id')->on('tbl_kamars')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->BigInteger('pengunjung_id')->unsigned()->nullable();
            $table->foreign('pengunjung_id')->references('id')->on('pengunjungs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('reservasis');
    }
};

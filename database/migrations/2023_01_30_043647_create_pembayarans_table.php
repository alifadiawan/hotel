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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('reservasi_id')->unsigned()->nullable();
            $table->foreign('reservasi_id')->references('id')->on('reservasis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('total_harga');
            $table->string('uang_bayar');
            $table->string('kode_bayar');
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
        Schema::dropIfExists('pembayarans');
    }
};

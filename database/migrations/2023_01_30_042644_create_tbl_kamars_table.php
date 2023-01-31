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
        Schema::create('tbl_kamars', function (Blueprint $table) {
            $table->id();
            $table->string('kode_ruangan');
            $table->BigInteger('tipe_id')->unsigned()->nullable();
            $table->foreign('tipe_id')->references('id')->on('tipe_kamars')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('status');
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
        Schema::dropIfExists('tbl_kamars');
    }
};

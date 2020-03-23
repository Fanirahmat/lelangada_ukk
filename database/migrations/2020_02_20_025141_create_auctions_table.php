<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->Increments('id');
            $table->bigInteger('auctioner_id')->unsigned();
            $table->string('name',100);
            $table->text('description')->nullable();
            $table->integer('start_price')->unsigned();
            $table->string('image');
            $table->enum('status',['dibuka','ditutup']);
            $table->timestamps();

            $table->foreign('auctioner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
}

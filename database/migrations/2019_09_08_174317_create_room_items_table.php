<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->tinyInteger('roomtype');
            $table->tinyInteger('roomclass');
            $table->tinyInteger('status');
            $table->text('description')->nullable();
            $table->integer('bed');
            $table->enum('firstfloor',['0','1'])->default('0')->nullable();
            $table->enum('secondfloor',['0','1'])->default('0')->nullable();
            $table->enum('thirdfloor',['0','1'])->default('0')->nullable();
            $table->enum('groundfloor',['0','1'])->default('0')->nullable();
            $table->enum('frontview',['0','1'])->default('0')->nullable();
            $table->enum('backview',['0','1'])->default('0')->nullable();
            $table->text('remark')->nullable();
            $table->tinyInteger('acctname');
            $table->enum('lock_room',['0','1'])->default('0')->nullable();
            $table->enum('close_phone_tv',['0','1'])->default('0')->nullable();
            $table->string('type')->default('room');
            $table->string('signature_created');
            $table->dateTime('date_created');
            $table->dateTime('date_modified')->nullable();
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
        Schema::dropIfExists('room_items');
    }
}

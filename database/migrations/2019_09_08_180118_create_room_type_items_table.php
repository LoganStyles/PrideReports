<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTypeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_type_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->tinyInteger('roomclass');
            $table->integer('beds');
            $table->text('description')->nullable();
            $table->text('remark')->nullable();
            $table->string('type')->default('roomtype');
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
        Schema::dropIfExists('room_type_items');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_id');
            $table->enum('account_type', ['ROOM', 'HOUSE','GROUP'])->default('ROOM');
            $table->string('master_id')->nullable();
            $table->date('arrival');
            $table->integer('nights')->default(1);
            $table->date('departure');
            $table->tinyInteger('room_number')->default(0);
            $table->integer('roomtype');
            $table->enum('client_type',['person','group'])->default('person');
            $table->string('client_name');
            $table->string('agency_name')->nullable();
            $table->text('agency_name')->nullable();
            $table->string('guest1')->nullable();
            $table->string('guest2')->nullable();
            $table->integer('guest_count')->nullable()->default(0);
            $table->integer('adults')->nullable()->default(1);
            $table->integer('children')->nullable()->default(0);
            $table->string('type')->default('reservation');
            $table->text('remarks')->nullable();
            $table->dateTime('date_created');
            $table->dateTime('date_modified')->nullable();
            $table->string('signature_created');
            $table->string('signature_modified')->nullable();
            $table->enum('status',['staying','confirmed','departed','cancelled'])->default('confirmed');
            $table->enum('deleted',['0','1'])->default('0');
            $table->dateTime('actual_arrival')->nullable();
            $table->dateTime('actual_departure')->nullable();
            $table->dateTime('last_room_charge')->nullable();
            $table->dateTime('last_account_close')->nullable();
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
        Schema::dropIfExists('reservation_items');
    }
}

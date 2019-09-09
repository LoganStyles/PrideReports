<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationPriceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_price_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_id');
            $table->tinyInteger('price_rate');
            $table->enum('folio_room',['BILL1','BILL2','BILL3','BILL4','INV'])->default('BILL1');
            $table->enum('folio_extra',['BILL1','BILL2','BILL3','BILL4','INV'])->default('BILL1');
            $table->enum('folio_other',['BILL1','BILL2','BILL3','BILL4','INV'])->default('BILL1');
            $table->decimal('weekday',10, 2);
            $table->decimal('weekend',10, 2);
            $table->decimal('holiday',10, 2);
            $table->string('type')->default('reservationprice');
            $table->decimal('price_room',10, 2);
            $table->decimal('price_extra',10, 2);
            $table->decimal('price_total',10, 2);
            $table->enum('invoice',['none','client','agency'])->default('none');
            $table->integer('comp_nights')->default(0);
            $table->enum('comp_visits',['yes','no'])->default('no');
            $table->enum('auto_deposit',['yes','no'])->default('no');
            $table->enum('block_pos',['yes','no'])->default('no');
            $table->enum('deleted',['0','1'])->default('0');
            $table->date('charge_from_date');
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
        Schema::dropIfExists('reservation_price_items');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationFolioItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_folio_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_id');
            $table->text('description')->nullable();
            $table->integer('plu_group')->nullable();
            $table->decimal('price',10, 2);
            $table->decimal('debit',10, 2);
            $table->decimal('credit',10, 2);
            $table->string('pak',10)->nullable();
            $table->enum('sub_folio',['BILL1','BILL2','BILL3','BILL4','INV'])->default('BILL1');
            $table->integer('account_number');
            $table->string('links',100)->nullable();
            $table->integer('qty')->default(0);
            $table->string('terminal')->nullable();
            $table->string('reference')->nullable();
            $table->string('charge')->nullable();
            $table->string('audit')->nullable();
            $table->enum('action',['sale','payment'])->default('sale');
            $table->integer('plu')->nullable();
            $table->text('reason')->nullable();
            $table->enum('source_app',['fnb','hotel'])->default('hotel');
            $table->string('type')->default('reservationfolio');
            $table->string('signature_created');
            $table->string('signature_modified')->nullable();
            $table->enum('status',['active','closed','ledger'])->default('active');
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
        Schema::dropIfExists('reservation_folio_items');
    }
}

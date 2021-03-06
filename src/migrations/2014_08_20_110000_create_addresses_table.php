<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address', 256);
            $table->string('postal_code', 10)->nullable();
            $table->integer('addressable_id')->unsigned();
            $table->string('addressable_type', 256);
            $table->timestamps();
        });
    }
}

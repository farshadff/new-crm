<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->longText('description')->nullable();
            $table->integer('fax')->nullable();
            $table->text('adrress1')->nullable();
            $table->text('adrress2')->nullable();
            $table->text('adrress3')->nullable();
            $table->text('adrress4')->nullable();
            $table->text('adrress5')->nullable();
            $table->integer('telephone1')->nullable();
            $table->integer('telephone2')->nullable();
            $table->integer('telephone3')->nullable();
            $table->integer('telephone4')->nullable();
            $table->integer('telephone5')->nullable();
            $table->text('client_type')->nullable();
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
        Schema::dropIfExists('clients');
    }
}

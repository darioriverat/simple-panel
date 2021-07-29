<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->unique();
            $table->string('name', 90);
            $table->string('brand', 90);
            $table->unsignedInteger('merchant_category_code_id');
            $table->unsignedInteger('country_id');
            $table->timestamps();

            $table->foreign('merchant_category_code_id')
                ->references('id')
                ->on('merchant_category_codes');

            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
}

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
        Schema::create('countdowns', function (Blueprint $table) {
            $table->id();
            $table->integer('days')->default(0);
            $table->integer('hours')->default(0);
            $table->integer('minutes')->default(0);
            $table->integer('seconds')->default(0);
            $table->decimal('post_countdown_price', 10, 2)->nullable();
            $table->string('title');
            $table->decimal('stake_price', 15, 2);
            $table->decimal('raised_price', 15, 2);
            $table->decimal('sold_allocation', 15, 2);
            $table->string('currency');
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
        Schema::dropIfExists('countdowns');
    }
};

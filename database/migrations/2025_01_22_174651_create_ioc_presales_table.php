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
        Schema::create('ioc_presales', function (Blueprint $table) {
            $table->id();
            $table->decimal('ioc_token_price', 10, 2)->nullable();
            $table->string('token_address')->nullable();
            $table->string('presale_address')->nullable();
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
        Schema::dropIfExists('ioc_presales');
    }
};

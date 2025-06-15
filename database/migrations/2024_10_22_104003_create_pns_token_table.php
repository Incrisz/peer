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
        Schema::create('pns_token', function (Blueprint $table) {
            $table->id();
            $table->string('ico_button_text')->default('Buy PNS')->nullable();
            $table->string('ico_button_url')->default('https://peernetics.io/')->nullable();
            $table->string('white_paper_button_text')->default('Whitepaper')->nullable();
            $table->string('white_paper')->default('sites/default/files/2024-03/Whitepaper%20V2_0.pdf')->nullable();
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
        Schema::dropIfExists('pns_token');
    }
};

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
        Schema::table('banners', function (Blueprint $table) {
            $table->string('loyalty_button_url')->default('https://loyaltyclub.peernetics.io/')->nullable();
            $table->string('ico_button_url')->default('https://peernetics.io/')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('loyalty_button_url');
            $table->dropColumn('ico_button_url');
        });
    }
};

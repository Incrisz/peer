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
        Schema::create('home_sectioniiis', function (Blueprint $table) {
            $table->id();
            $table->string('texti')->default('Accept Crypto');
            $table->string('textii')->default('Safe');
            $table->string('textiii')->default('and');
            $table->string('textiv')->default('Securely');
            $table->string('textv')->default('with');
            $table->string('textvi')->default('Peernetics');
            $table->string('image')->default('sites/default/files/2023-09/peernetics-dashnoard.png');

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
        Schema::dropIfExists('home_sectioniiis');
    }
};

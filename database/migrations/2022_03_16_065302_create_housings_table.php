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
        Schema::create('housings', function (Blueprint $collection) {
            $collection->id();
            $collection->string('name');
            $collection->string('type');
            $collection->string('location');
            $collection->double('price');
            $collection->string('period');
            $collection->string('image');
            $collection->boolean('is_active')->default(false);
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('housings');
    }
};

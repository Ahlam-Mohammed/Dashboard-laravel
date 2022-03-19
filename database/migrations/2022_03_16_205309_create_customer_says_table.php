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
        Schema::create('customer_says', function (Blueprint $collection) {
            $collection->id();
            $collection->string('comment');
            $collection->string('imag');
            $collection->boolean('is_active')->default(1);
            $collection->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('customer_says');
    }
};

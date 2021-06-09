<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('model', 50);
            $table->year('yearmodel');
            $table->year('yearmanufacture');
            $table->double('price');
            $table->enum('type', ['new', 'used']);
            $table->string('photo', 50);
            $table->foreignId('brand_id')->constrained('brand');
            $table->foreignId('color_id')->constrained('color');
            $table->foreignId('user_id')->constrained('user');
            $table->text('optionals');
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
        Schema::dropIfExists('vehicle');
    }
}

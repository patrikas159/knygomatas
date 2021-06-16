<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnygomatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knygomatas', function (Blueprint $table) {
            $table->id();
            $table->string('reader_id');
            $table->char('reader_phone');
            $table->enum('status', ['Laukiama', 'Atlikta']);
            $table->integer('statuses')->default(0);
            $table->boolean('statuse')->nullable($value = true);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knygomatas');

    }
}

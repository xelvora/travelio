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
        Schema::create('transaksidts', function (Blueprint $table) {

        $table->id();
        $table->foreignId('transaction_id')->constrained('transaksis')->cascadeOnDelete();
        $table->string('nationality');
        $table->string('is_visa');
        $table->string('doe_passport');
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
        Schema::dropIfExists('transaksidts');
    }
};

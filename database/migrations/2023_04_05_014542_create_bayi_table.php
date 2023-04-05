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
        Schema::create('bayi', function (Blueprint $table) {
            $table->string('no_urut', 25)->index()->primary();
            $table->string('nama', 50)->index();
            $table->string('alamat', 100)->index();
            $table->string('tanggal_lahir', 30)->index();
            $table->string('bb_lahir', 10)->index()->nullable();
            $table->string('tb_lahir', 10)->index()->nullable();
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
        Schema::dropIfExists('bayi');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyVendedorEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendedor', function (Blueprint $table) {
            $table->unsignedBigInteger('endereco_id');

            $table->foreign('endereco_id')->references('id')->on('endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendedor', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['endereco_id']);
            Schema::enableForeignKeyConstraints();
        });
    }
}

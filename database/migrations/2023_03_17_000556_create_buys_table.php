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
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->string('envio');
            $table->string('pago');
            $table->string('cantidad');
            $table->string('forma_envio');
            $table->float('total');
            $table->enum('status', [1,2,3,4])->default(1);

            $table->unsignedBigInteger('book_id')->nullable(); /* Libro */
            $table->unsignedBigInteger('user_id'); /* Usuario */

            /* Llaves foraneas */
            $table->foreign('book_id')->references('id')->on('books')->onDelete('set null'); /* Llave foranea de libro */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); /* Llave foranea de usuario */

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
        Schema::dropIfExists('buys');
    }
};

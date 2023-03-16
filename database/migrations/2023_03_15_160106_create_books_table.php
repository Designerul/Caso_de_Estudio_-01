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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('portada', 2048)->nullable();
            $table->string('titulo');
            $table->text('sinopsis')->nullable();
            $table->float('precio')->nullable();

            $table->string('slug');
            $table->enum('status', [1,2])->default(1);

            $table->unsignedBigInteger('author_id')->nullable(); /* Autor del libro */
            $table->unsignedBigInteger('category_id')->nullable(); /* Categoria del libro */
            $table->unsignedBigInteger('editorial_id')->nullable(); /* Editorial del libro */
            $table->unsignedBigInteger('bookbinding_id')->nullable(); /* Encuadernacion del libro */
            $table->unsignedBigInteger('type_id')->nullable(); /* Tipo de libro */
            $table->unsignedBigInteger('number_id')->nullable(); /* Numero de ejemplares del libro */

            /* Llaves foraneas */
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null'); /* Llave foranea de autor */
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); /* Llave foranea de categoria */
            $table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('set null'); /* Llave foranea de editorial */
            $table->foreign('bookbinding_id')->references('id')->on('bookbindings')->onDelete('set null'); /* Llave foreana de encuadernacion */
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null'); /* LLave foranea de tipo de libro */
            $table->foreign('number_id')->references('id')->on('numbers')->onDelete('set null'); /* Llave foranea de numero de ejemplares del libro */

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
        Schema::dropIfExists('books');
    }
};

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
            $table->string('isbn')->nullable();
            $table->string('encuadernacion')->nullable();
            $table->string('tipo_libro')->nullable();
            $table->text('sinopsis')->nullable();
            $table->float('precio')->nullable();
            $table->integer('cantidad')->nullable();

            $table->string('slug');
            $table->enum('status', [1,2])->default(1);

            $table->unsignedBigInteger('author_id')->nullable(); /* Autor del libro */
            $table->unsignedBigInteger('category_id')->nullable(); /* Categoria del libro */

            /* Llaves foraneas */
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null'); /* Llave foranea de autor */
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); /* Llave foranea de categoria */

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

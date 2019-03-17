<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_library', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookcatid');
            $table->string('authorid');
            $table->string('bookname');
            $table->integer('pdf_doc');
            $table->string('book_pic');
            $table->integer('book_published_year');
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
        Schema::dropIfExists('online_library');
    }
}

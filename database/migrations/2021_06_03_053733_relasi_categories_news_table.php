<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiCategoriesNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table){
            $table->dropColumn('kategori'); //menghapus kolom 
            $table->unsignedBigInteger('kategori_id')->nullable(); //menambah kolom kategori_id
            $table->foreign('kategori_id')->references('id')->on('categories'); //menambah foreign key di kolom kategori_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table){
            $table->string('kategori');
            $table->dropForeign(['kategori_id']);
        });
    }
}

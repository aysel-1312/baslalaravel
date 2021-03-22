<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('image');
            $table->longText('content');
            $table->integer('hit')->default(0);
            $table->integer('status')->default(0)->comment(' 0:pasif  1:aktif ');
            $table->string('slug');
            $table->timestamps();


            //category tablosunda ki id sütunu ile blogs tablosunda ki category_id bağla ve kontrol et ilişki kurduk.
            $table->foreign('category_id')->references('id')->on('category')

                //eğer ilişki yaptığımız category silinirse bu tabloda silinsin diye yazdık.
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

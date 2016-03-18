<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'blog', function (Blueprint $table){
            $table->increments( 'id' );
            $table->string( 'title' )->comment = "記事タイトル";
            $table->string( 'slag' )->comment = "記事を一言表す為の単語";

            $table->text( 'header' )->comment = "ブログ先頭記事";
            $table->text( 'description' )->comment = "ブログ詳細";
            
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop( 'blog' );
    }
}

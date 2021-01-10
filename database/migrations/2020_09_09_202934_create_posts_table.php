<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            //Table_Id
            $table->id();

            //Music Title
            $table->string('title');

            //Artwork
            $table->string('cover_image');

            //Heading Text
            $table->string('heading_text');

            //Body Text
            $table->mediumText('body');

            //Audiomack Link
            $table->string('audiomack_link');

            //Music itself
            $table->string('music');

            //Youtube Link
            $table->string('youtube_link');

            //Artiste Link
            $table->string('artiste_link');


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
        Schema::dropIfExists('posts');
    }
}

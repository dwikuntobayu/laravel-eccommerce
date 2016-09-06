<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Articles
 *
 * @author  The scaffold-interface created at 2016-09-06 03:39:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('articles',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title');
        
        $table->longText('content');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('answers');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('users');
    }//
    
    
}

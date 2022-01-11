<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('view');
            // $table->bigInteger('price');
            // $table->dateTime('birthday');
            // $table->date('year');
            // $table->decimal('price', 10, 3);
            // $table->double('price', 10, 3);
            // $table->enum('status', ['enabled', 'disabled']);
            // $table->float('status', 10, 3);
            // $table->foreignId('post_id');
            // $table->increments('post_id');
            // $table->integer('age');
            // $table->longText('html');
            // $table->mediumIncrements('id');
            // $table->mediumInteger('price');
            // $table->set('favcolor', ['red', 'green', 'blue']);
            // $table->string('name');
            // $table->text('comment');
            // $table->time('newYear');
            // $table->timestamp('birthDay');
            // $table->unsignedBigInteger('price');
            // $table->unsignedDecimal('price');
            // $table->year('year');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

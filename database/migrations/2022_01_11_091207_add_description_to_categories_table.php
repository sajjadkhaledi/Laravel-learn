<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {

            // $table->text('description')->after('name');
            // $table->text('description')->autoIncrement();
            // $table->text('description')->charset('utf8mb4');
            // $table->text('description')->collation('utf8mb4_unicode_ci');
            // $table->text('description')->comment('some text');
            // $table->text('description')->default('test');
            // $table->text('description')->first();
            // $table->text('description')->nullable();
            // $table->text('description')->unsigned();
            // $table->text('published_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}

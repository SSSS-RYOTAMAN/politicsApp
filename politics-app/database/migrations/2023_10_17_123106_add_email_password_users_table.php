<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailPasswordUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('email')->nullable()->unique()->after('id');
          $table->string('password')->nullable()->after('email');
          $table->integer('sex')->nullable()->change();
          $table->integer('age')->nullable()->change();
          $table->integer('support')->nullable()->change();
          $table->string('name', '50')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}

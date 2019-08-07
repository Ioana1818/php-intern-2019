<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldUrlToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('validate_url',255)->after('remember_token')->nullable();
            $table->datetime('validation_date')->nullable();
            $table->tinyInteger('email_validated')->nullable();


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
            $table->dropColumn('validate_url');
            $table->dropColumn('validation_date');
            $table->dropColumn('email_validated');

        });
    }
}

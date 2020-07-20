<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('do_not_call')->default('0')->nullable();
            $table->integer('do_not_sms')->default('0')->nullable();
            $table->integer('do_not_email')->default('0')->nullable();
            $table->string('dob')->nullable();
 
            $table->string('gender')->nullable();
            $table->string('other_email')->nullable();
            $table->integer('client_status')->default('1')->nullable();
            $table->string('base_currency')->nullable(); 
            $table->string('lead_exist')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('client_state')->nullable();
            $table->string('language')->nullable();
            $table->string('portal_user_id')->nullable();
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
            $table->dropColumn('do_not_call');
            $table->dropColumn('do_not_sms');
            $table->dropColumn('do_not_email');
            $table->dropColumn('dob');
 
            $table->dropColumn('gender');
            $table->dropColumn('other_email');
            $table->dropColumn('client_status');
            $table->dropColumn('base_currency'); 
            $table->dropColumn('lead_exist');
            $table->dropColumn('citizenship');
            $table->dropColumn('client_state');
            $table->dropColumn('language');
            $table->dropColumn('portal_user_id');
         });
    }
}

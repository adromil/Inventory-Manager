<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suppliers', function (Blueprint $table) {
            $table->string('contact_person')->after('name');
            $table->string('street')->after('contact_person');
            $table->string('house_number')->after('street');
            $table->string('postal', 30)->after('house_number');
            $table->string('state_province_county')->after('postal');
            $table->string('country')->after('state_province_county');
            $table->string('phone')->after('country');
            $table->string('mobile')->after('phone');
            $table->string('email')->after('mobile');
            $table->string('fax')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suppliers', function (Blueprint $table) {
            $table->dropColumn('contact_number');
            $table->dropColumn('street');
            $table->dropColumn('house_number');
            $table->dropColumn('postal');
            $table->dropColumn('state_province_county');
            $table->dropColumn('country');
            $table->dropColumn('phone');
            $table->dropColumn('mobile');
            $table->dropColumn('email');
            $table->dropColumn('fax');
        });
    }
}

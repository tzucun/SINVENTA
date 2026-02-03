<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('alkers', function (Blueprint $table) {
        $table->date('terakhir_dikalibrasi')->nullable()->after('lokasi');
    });
}

public function down()
{
    Schema::table('alkers', function (Blueprint $table) {
        $table->dropColumn('terakhir_dikalibrasi');
    });
}
};

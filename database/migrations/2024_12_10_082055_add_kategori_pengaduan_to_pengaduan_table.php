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
    Schema::table('pengaduan', function (Blueprint $table) {
        $table->string('kategori_pengaduan')->nullable();
    });
}

public function down()
{
    Schema::table('pengaduan', function (Blueprint $table) {
        $table->dropColumn('kategori_pengaduan');
    });
}

};

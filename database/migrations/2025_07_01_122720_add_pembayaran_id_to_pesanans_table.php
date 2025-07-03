<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('pesanans', function (Blueprint $table) {
        $table->foreignId('pembayaran_id')->nullable()->constrained()->onDelete('set null');
    });
}

public function down()
{
    Schema::table('pesanans', function (Blueprint $table) {
        $table->dropForeign(['pembayaran_id']);
        $table->dropColumn('pembayaran_id');
    });
}
};

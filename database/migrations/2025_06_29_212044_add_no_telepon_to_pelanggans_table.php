<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // cek dulu apakah kolom 'no_telepon' belum ada
        if (!Schema::hasColumn('pelanggans', 'no_telepon')) {
            Schema::table('pelanggans', function (Blueprint $table) {
                $table->string('no_telepon')->after('email');
            });
        }
    }

    public function down()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            // cek juga sebelum menghapus
            if (Schema::hasColumn('pelanggans', 'no_telepon')) {
                $table->dropColumn('no_telepon');
            }
        });
    }
};

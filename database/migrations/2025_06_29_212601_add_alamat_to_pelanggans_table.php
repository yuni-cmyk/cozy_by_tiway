<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // cek dulu apakah kolom 'alamat' belum ada
        if (!Schema::hasColumn('pelanggans', 'alamat')) {
            Schema::table('pelanggans', function (Blueprint $table) {
                $table->text('alamat')->after('no_telepon');
            });
        }
    }

    public function down()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            // cek sebelum menghapus
            if (Schema::hasColumn('pelanggans', 'alamat')) {
                $table->dropColumn('alamat');
            }
        });
    }
};

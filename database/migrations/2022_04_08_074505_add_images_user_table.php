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
        Schema::table('users', function (Blueprint $table) {
            $table->string('img')->after('phone')->default('default.jpg');
            $table->string('img_webp')->after('img')->default('default_webp.webp');
            $table->string('img_preview')->after('img_webp')->default('default_preview.jpg');
            $table->string('img_preview_webp')->after('img_preview')->default('default_preview_webp.webp');
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
            $table->dropColumn('img');
            $table->dropColumn('img_webp');
            $table->dropColumn('img_preview');
            $table->dropColumn('img_preview_webp');
        });
    }
};

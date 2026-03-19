<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
{
    Schema::table('favoritos', function (Blueprint $table) {
        $table->string('lugar_id')->nullable()->change();
    });
}

    public function down(): void
    {
        // Nothing to revert
    }
};
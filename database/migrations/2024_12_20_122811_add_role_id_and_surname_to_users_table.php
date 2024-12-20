<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    # users tablosuna ek alanlar: soyisim ve role_id alanı eklenecek.
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('surname')->nullable()->after('name');
            $table->foreignId('role_id')->nullable()->after('id')->constrained('roles')->cascadeOnDelete();
        });
    }
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('surname');
            $table->dropConstrainedForeignId('role_id');
        });
    }
};

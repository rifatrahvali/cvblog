<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    # invitatons tablosu: Davet kayıtları, tokenlar ve geçerlilik süreleri tutulacak.
    public function up(): void
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('email',255)->unique();
            $table->string('token',255)->unique();
            $table->dateTime('expires_at');
            $table->boolean('used')->default(false);
            $table->dateTime('used_at')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};

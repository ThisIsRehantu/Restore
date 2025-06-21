<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMethodePembayaransTable extends Migration
{
    public function up(): void
    {
        Schema::create('methode_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('methode');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('methode_pembayarans');
    }
}

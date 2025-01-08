<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRastreamentoEntregasTable extends Migration
{
    public function up(): void
    {
        Schema::create('rastreamento_entregas', function (Blueprint $table) {
            $table->id();
            $table->uuid('entrega_id');
            $table->string('message');
            $table->timestamp('date');
            $table->timestamps();

            $table->foreign('entrega_id')->references('id')->on('entregas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rastreamento_entregas');
    }
}

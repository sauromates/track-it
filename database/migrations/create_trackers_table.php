<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->id();

            $table->string('issue_provider');
            $table->string('issue_url');
            $table->dateTime('started_at');
            $table->dateTime('stopped_at')->nullable();
            $table->dateTime('paused_at')->nullable();
            $table->dateTime('resumed_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::drop('trackers');
    }
};

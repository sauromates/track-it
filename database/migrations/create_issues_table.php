<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();

            $table->string('subject');
            $table->string('description')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('priority');
            $table->float('estimate')->nullable();
            $table->float('hours_spent')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::drop('issues');
    }
};

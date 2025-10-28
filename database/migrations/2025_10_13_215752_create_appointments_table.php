<?php

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->string('notes');
            $table->date('appointment_date');
            $table->integer('appointment_time');
            $table->string('status');
            $table->timestamps();
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Service::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

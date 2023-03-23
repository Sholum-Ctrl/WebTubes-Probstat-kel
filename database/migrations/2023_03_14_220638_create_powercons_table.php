<?php

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
        Schema::create('powercons', function (Blueprint $table) {
            $table->string('Time', 100);
            $table->string('Punjab', 100);
            $table->string('Haryana', 100);
            $table->string('Rajasthan', 100);
            $table->string('Delhi', 100);
            $table->string('UP', 100);
            $table->string('Uttarakha', 100);
            $table->string('HP', 100);
            $table->string('J&K', 100);
            $table->string('Chandigarh', 100);
            $table->string('Chattisgarh', 100);
            $table->string('Gujarat', 100);
            $table->string('MP', 100);
            $table->string('Maharashtra', 100);
            $table->string('Goa', 100);
            $table->string('DNH', 100);
            $table->string('Andhra_Pradesh', 100);
            $table->string('Telangana', 100);
            $table->string('Karnataka', 100);
            $table->string('Kerala', 100);
            $table->string('Tamil_Nadu', 100);
            $table->string('Pondy', 100);
            $table->string('Bihar', 100);
            $table->string('Jharkhand', 100);
            $table->string('Odisha', 100);
            $table->string('West_Bengal', 100);
            $table->string('Sikkim', 100);
            $table->string('Arunachal', 100);
            $table->string('Assam', 100);
            $table->string('Manipur', 100);
            $table->string('Meghalaya', 100);
            $table->string('Mizoram', 100);
            $table->string('Nagaland', 100);
            $table->string('Tripura', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('powercons');
    }
};

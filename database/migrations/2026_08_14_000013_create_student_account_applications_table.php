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
        Schema::create('student_account_applications', function (Blueprint $table) {
            $table->id();
            
            $table->string('tid')->comment('教師編號');
            $table->string('class_name')->comment('班級名稱');
            $table->string('status')->default('pending')->comment('申請狀態');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_account_applications');
    }
};

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
        Schema::create('teacher_applications', function (Blueprint $table) {
            $table->id()->comment('申請編號');

            $table->string('name')->comment('教師名稱');
            $table->string('email')->comment('教師信箱');
            $table->text('reason')->comment('申請理由')->nullable();
            $table->string('status')->comment('申請狀態')->default('pending');
            
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_applications');
    }
};

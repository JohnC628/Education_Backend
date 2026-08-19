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
        Schema::create('student_account_application_items', function (Blueprint $table) {
            $table->id();

            // 讓item知道自己屬於哪個application
            $table->foreignId('application_id')
                ->constrained('student_account_applications')
                ->onDelete('cascade');

            $table->string('student_no')->comment('學生學號');
            $table->string('name')->comment('學生姓名');
            $table->string('email')->unique()->comment('信箱');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_account_application_items');
    }
};

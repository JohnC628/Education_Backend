<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * 學生表
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id()->comment('學生 ID');
            
            $table->string('student_no')->unique()->comment('學生學號');// 作為帳號
            $table->string('class_name')->comment('班級名稱');
            $table->string('name')->comment('學生姓名');
            $table->string('password')->comment('密碼');
            $table->string('email')->unique()->comment('信箱');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

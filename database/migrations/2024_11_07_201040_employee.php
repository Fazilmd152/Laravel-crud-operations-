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
        Schema::create('employee_list',function(Blueprint $column){
            $column->id();
            $column->string('name');
            $column->string('email')->unique();
            $column->string('phone',11)->unique();
            $column->date('joining_date');
            $column->integer('salary');
            $column->tinyInteger('is_active');
            $column->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOpeningsTable extends Migration
{
    public function up()
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->nullable()->constrained('positions')->nullOnDelete();
            $table->foreignId('establishment_id')->nullable()->constrained('establishments')->nullOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('location')->nullable();
            $table->unsignedInteger('vacancies')->default(1);
            $table->string('status')->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_openings');
    }
}

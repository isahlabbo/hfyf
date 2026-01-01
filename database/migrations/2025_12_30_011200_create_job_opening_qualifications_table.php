<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOpeningQualificationsTable extends Migration
{
    public function up()
    {
        Schema::create('job_opening_qualifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_opening_id')->constrained('job_openings')->cascadeOnDelete();
            $table->text('description');
            $table->boolean('required')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_opening_qualifications');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('application_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained('applications')->cascadeOnDelete();
            $table->foreignId('reviewer_id')->nullable()->constrained('users')->nullOnDelete();
            $table->text('comments')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->string('decision')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_reviews');
    }
}

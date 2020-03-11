<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique()->nullable(false);
            $table->integer('min_age')->nullable(false);
            $table->integer('max_age')->nullable(true);
            $table->string('promo_logo_url')->nullable(false);
            $table->mediumText('short_description')->nullable(false);
            $table->longText('description')->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

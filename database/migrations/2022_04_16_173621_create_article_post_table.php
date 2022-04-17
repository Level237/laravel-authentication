<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\post;
use App\Models\article;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(post::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreignIdFor(article::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_post');
    }
};

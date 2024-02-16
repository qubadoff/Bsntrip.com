<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ConstructionEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text("site_name");
            $table->text("site_description")->nullable();
            $table->text("meta_text")->nullable();
            $table->text("meta_keywords")->nullable();
            $table->text("site_email")->nullable();
            $table->text("site_phone")->nullable();
            $table->text("site_location")->nullable();
            $table->text("site_logo_white")->nullable();
            $table->text("site_logo_black")->nullable();
            $table->text("site_favicon")->nullable();
            $table->text("site_author")->nullable();
            $table->text("fb_link")->nullable();
            $table->text("x_link")->nullable();
            $table->text("instagram_link")->nullable();
            $table->text("linkedin_link")->nullable();
            $table->text("tiktok_link")->nullable();
            $table->text("youtube_link")->nullable();
            $table->text("youtube_video_link")->nullable();
            $table->integer('site_status')->default(ConstructionEnum::WORKING);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

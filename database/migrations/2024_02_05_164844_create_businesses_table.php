<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\BusinessStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('businesses', function (Blueprint $table) {
            {
                $table->id();
                $table->integer('status')->default(BusinessStatus::PENDING);
                $table->bigInteger("user_id");
                $table->integer("business_role_id");
                $table->integer("business_purpose_id");
                $table->integer("business_type_id");
                $table->integer("business_work_type_id");
                $table->integer("company_type_id");
                $table->integer("business_status_id");
                $table->string("business_category_id");
                $table->dateTime("business_establish_date");
                $table->integer('country_id');
                $table->integer('city_id');
            }

            {
                $table->mediumText('business_location')->nullable();
                $table->mediumText('business_title')->nullable();
                $table->longText('business_description');
                $table->longText('business_sell_purpose')->nullable();

                $table->string("full_name");
                $table->string("company_name")->nullable();
                $table->string("email");
                $table->string("phone");
                $table->string("web_site")->nullable();

                $table->integer("business_employee_count")->nullable();

                $table->float('sell_amount');
                $table->integer('currency_id');

                $table->float("monthly_income")->nullable();
                $table->float("yearly_income")->nullable();

                $table->float("monthly_net_profit")->nullable();
                $table->float("yearly_net_profit")->nullable();
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};

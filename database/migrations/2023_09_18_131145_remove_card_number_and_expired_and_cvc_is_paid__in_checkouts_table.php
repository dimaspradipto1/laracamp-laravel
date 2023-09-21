<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCardNumberAndExpiredAndCvcIsPaidInCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropColumn(['card_number', 'expired', 'cvc', 'is_paid']);
            
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('card_number')->nullable();
            $table->string('expired')->nullable();
            $table->string('cvc')->nullable();
            $table->boolean('is_paid')->default(false);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePlansTableAddNewFields extends Migration
{
    public function up()
    {
        Schema::table('plans', function (Blueprint $table) {
            // Add only if they don't already exist
            if (!Schema::hasColumn('plans', 'min')) {
                $table->decimal('min', 15, 2)->nullable()->after('name');
            }
            if (!Schema::hasColumn('plans', 'max')) {
                $table->decimal('max', 15, 2)->nullable()->after('min');
            }
            if (!Schema::hasColumn('plans', 'image')) {
                $table->string('image')->nullable()->after('max');
            }
            if (!Schema::hasColumn('plans', 'agent_pay')) {
                $table->decimal('agent_pay', 5, 2)->nullable()->after('roi');
            }
        });
    }

    public function down()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn(['min', 'max', 'image', 'agent_pay']);
        });
    }
}

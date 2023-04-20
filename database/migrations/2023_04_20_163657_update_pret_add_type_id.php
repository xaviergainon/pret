<?php

use App\Models\TypePret;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePretAddTypeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prets', function (Blueprint $table) {
            $table->foreignIdFor(TypePret::class)->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prets', function (Blueprint $table) {
            $table->dropConstrainedForeignId(TypePret::class);
        });
    }
}

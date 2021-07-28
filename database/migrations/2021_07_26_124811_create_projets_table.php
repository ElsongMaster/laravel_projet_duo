<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
                $table->string('titre',50);
                $table->string('image',100);
=======
<<<<<<< HEAD
                $table->string('titre',50);
                $table->string('image',100);
=======
            $table->string('titre',50);
>>>>>>> f9d939f8cddde4d56a5ee7f31c02f3e1ab0caad8
>>>>>>> f3e2a4c5f55c3d0d0c53159a36a609af94681d2d
            $table->text('description');
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
        Schema::dropIfExists('projets');
    }
}

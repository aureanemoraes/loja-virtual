<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            // Identificador único de cada categoria que será cadastrada na tabela
            $table->id(); 
            // string: campo de texto
            $table->string('nome');
            // longText: um campo de texto que possui MUITOS caracteres
            // Nullable: o atributo pode receber um valor VAZIO;
            $table->longText('descricao')->nullable();
            // Armazenará a data em que foi a categoria foi criada e quando foi a última atualização
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
        Schema::dropIfExists('categorias');
    }
}

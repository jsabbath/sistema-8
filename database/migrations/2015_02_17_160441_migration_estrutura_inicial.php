<?php

use NetForce\Framework\Database\Schema\Table;

class MigrationEstruturaInicial extends \NetForce\Framework\Database\Migration
{

	/**
	 * Executar migracao
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Aplicativos', function(Table $table)
		{
			$table->key();
            $table->string('nome', 30);
            $table->text('descricao');
			$table->timestamps();
		});

        Schema::create('Entidades', function(Table $table)
        {
            $table->key();
            $table->association('aplicativo_id', 'Aplicativos');
            $table->string('nome',    50);
            $table->string('legenda', 50);
            $table->string('model',   50);
            $table->boolean('multinquilino');
            $table->timestamps();
        });

        Schema::create('EntPropriedades', function(Table $table)
        {
            $table->key();
            $table->association('entidade_id', 'Entidades');
            $table->integer('ordem');
            $table->string('nome',    50);
            $table->string('legenda', 50);
            $table->options('tipo');
            // Validacoes
            $table->boolean('val_obrigatorio');
            $table->boolean('val_unico');
            $table->options('val_tipo');
            $table->string('val_er', 200);
            //$table->option
            // String
            $table->integer('str_len');
            $table->integer('str_min');
            $table->options('str_tipo');
            $table->string('str_formato');
            $table->string('str_padrao');
            // Numero
            $table->integer('num_dec');
            $table->number('num_min');
            $table->number('num_max');
            $table->number('num_padrao');
            // Datetime
            $table->options('dt_tipo');
            $table->options('dt_padrcao');
            // Associacao
            $table->association('lkp_entidade_id', 'Entidades');

            $table->timestamps();
        });
	}

	/**
	 * Reverter migracao
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('Entidades');
		Schema::drop('Aplicativos');
	}
}

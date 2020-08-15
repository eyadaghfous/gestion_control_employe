<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('datedenaissance');
            $table->string('numerotelephone');
            $table->string('adresse');
            $table->string('ville');
            $table->string('codepostal');
            $table->string('email');
            $table->string('motdepasse');
            $table->timestamps();
        });
        Schema::create('departements', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
           
            $table->timestamps();
        });
        Schema::create('taches', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
            $table->date('debut');
            $table->date('fin');
            $table->timestamps();
        });
       
        Schema::create('employees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('motdepasse');
            $table->string('numerotelephone');
            $table->integer('id_departement')->nullable()->unsigned();
            $table->integer('id_tache')->nullable()->unsigned();
            $table->string('ville');
            $table->string('etat');
            $table->string('sexe');
            $table->date('date_embauche');
            $table->string('photo');
            $table->timestamps();
        });
        Schema::create('projets', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titre');
            $table->date('date_creation');
            $table->date('date_fin');
            $table->string('lieu');
            $table->string('type');
            $table->string('chef');
            $table->timestamps();
        });
        Schema::create('reglements', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
         
        });
        Schema::create('factures', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('num_client')->nullable()->unsigned();
            $table->integer('num_projet')->nullable()->unsigned();
            $table->integer('id_reglement')->nullable()->unsigned();
            $table->date('date');
            $table->float('montant');
            $table->timestamps();

        });
        Schema::create('materiels', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('equipes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nom');
            $table->string('description');
            $table->integer('id_employe')->nullable()->unsigned();
            $table->integer('id_materiel')->nullable()->unsigned();
            $table->date('date_creation');
            $table->timestamps();

        });
        
        Schema::create('contrats', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('details');
            $table->integer('num_projet')->nullable()->unsigned();
            $table->integer('num_client')->nullable()->unsigned();
            $table->integer('num_equipe')->nullable()->unsigned();
            $table->timestamps();

        });
       
        
       
        Schema::create('timesheets', function(Blueprint $table)
        {   
            $table->increments('id');
            $table->integer('numero_employe')->nullable()->unsigned();
            $table->integer('numero_tache')->nullable()->unsigned();
            $table->time('heures');
          
           
            $table->timestamps();
        });
        
       
       
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('timesheets', function (Blueprint $table) {
            $table->foreign('numero_employe')->references('id')->on('employees')->onDelete('cascade');

        });
        Schema::table('timesheets', function (Blueprint $table) {
            $table->foreign('numero_tache')->references('id')->on('taches')->onDelete('cascade');

        });
        Schema::table('contrats', function (Blueprint $table) {
            $table->foreign('num_projet')->references('id')->on('projets')->onDelete('cascade');

        });
        Schema::table('contrats', function (Blueprint $table) {
            $table->foreign('num_client')->references('id')->on('clients')->onDelete('cascade');

        });
        Schema::table('contrats', function (Blueprint $table) {
            $table->foreign('num_equipe')->references('id')->on('equipes')->onDelete('cascade');

        });
        Schema::table('equipes', function (Blueprint $table) {
            $table->foreign('id_employe')->references('id')->on('employees')->onDelete('cascade');

        });
        Schema::table('equipes', function (Blueprint $table) {
            $table->foreign('id_materiel')->references('id')->on('materiels')->onDelete('cascade');

        });
        Schema::table('factures', function (Blueprint $table) {
            $table->foreign('num_client')->references('id')->on('clients')->onDelete('cascade');

        });
        Schema::table('factures', function (Blueprint $table) {
            $table->foreign('num_projet')->references('id')->on('projets')->onDelete('cascade');

        });
        Schema::table('factures', function (Blueprint $table) {
            $table->foreign('id_reglement')->references('id')->on('reglements')->onDelete('cascade');

        });
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('id_departement')->references('id')->on('departements')->onDelete('cascade');

        });
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('id_tache')->references('id')->on('taches')->onDelete('cascade');

        });
       
       

    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

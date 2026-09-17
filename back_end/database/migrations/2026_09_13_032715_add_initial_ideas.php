<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('ideas')->insert([
            [
                'description' => 'Projets scolaires.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Les enseignants.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'description' => 'Les meilleures idées.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('ideas')->whereIn('description', [
            'Créer une plateforme pour centraliser les idées de projets scolaires.',
            'Ajouter un espace de brainstorming pour les élèves et les enseignants.',
            'Mettre en place un système de vote pour choisir les meilleures idées.',
        ])->delete();
    }
};

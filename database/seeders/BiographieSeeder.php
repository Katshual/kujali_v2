<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiographieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('biographies')->insert([
            ['contenu' => "Bienvenue sur mon site dédié au bien-être et à l'harmonie du corps et de l'esprit.\n\n" .
                              "Passionné par les traditions et la culture asiatique, je me suis naturellement tourné vers les arts martiaux internes et les techniques de relaxation pour cultiver la santé physique et mentale. C'est ainsi que j'ai découvert les massages énergétiques chinois, véritables clés pour rétablir l'équilibre énergétique du corps.\n\n" .
                              "Formations et expertise\n\n" .
                              "Je me suis formé aux techniques traditionnelles de massage chinois au sein de l'institut renommé Les Temps du Corps à Paris, complétant mon apprentissage par un stage intensif dans un centre de soins à Foshan, en Chine. Cette expérience m’a permis d'acquérir des compétences approfondies dans les massages chinois, et de mieux comprendre les besoins spécifiques de chaque personne.\n\n" .
                              "Souhaitant élargir mon approche, j'ai également suivi un cursus spécialisé en Massages du Monde (dont californiennes suédois, ayurvédique) à l'École Européenne de Bien-être, avec plus de 50 heures de pratique. Ces formations variées m'ont donné les outils pour proposer des soins adaptés et personnalisés.\n\n" .
                              "Soins énergétiques Reiki\n\n" .
                              "En complément des massages, je propose également des soins énergétiques Reiki (niveaux 1 et 2). Cette pratique ancestrale vise à harmoniser les énergies vitales pour favoriser un bien-être profond et durable.\n\n" .
                              "Prenez soin de vous\n\n" .
                              "Mon objectif est de vous offrir un moment privilégié, où détente et revitalisation se rejoignent pour équilibrer votre corps et votre esprit. Chaque soin est conçu pour répondre à vos besoins spécifiques, que vous cherchiez à relâcher les tensions ou à revitaliser vos énergies.\n\n" .
                              "Réservez dès maintenant votre séance de massage ou soin énergétique et offrez-vous un moment de sérénité et de bien-être durable.\n\n" .
                              "Contactez-moi dès aujourd'hui pour plus d'informations ou pour planifier votre séance. Prenez soin de vous, vous le méritez."]

    ]);
    }
}

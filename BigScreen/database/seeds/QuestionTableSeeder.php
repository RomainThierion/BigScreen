<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
        [
          'title' => 'Question 1/20',
          'text' => 'Votre adresse mail',
          'type' => 'varchar'
        ],
        [
          'title' => 'Question 2/20',
          'text' => 'Votre âge',
          'type' => 'varchar'
        ],
        [
          'title' => 'Question 3/20',
          'text' => 'Votre sexe',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 4/20',
          'text' => 'Nombre de personne dans votre foyer (adulte & enfants)',
          'type' => 'range'
        ],
        [
          'title' => 'Question 5/20',
          'text' => 'Votre profession',
          'type' => 'varchar'
        ],
        [
          'title' => 'Question 6/20',
          'text' => 'Quel marque de casque VR utilisez vous ?',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 7/20',
          'text' => 'Sur quel magasin d’application achetez vous des contenus VR',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 8/20',
          'text' => 'Quel casque envisagez vous d’acheter dans un futur proche ?',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 9/20',
          'text' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 10/20',
          'text' => 'Vous utilisez principalement Bigscreen pour :',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 11/20',
          'text' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 12/20',
          'text' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 13/20',
          'text' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 14/20',
          'text' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 15/20',
          'text' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 16/20',
          'text' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 17/20',
          'text' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
          'type' => 'enum'
        ],
        [
          'title' => 'Question 18/20',
          'text' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 19/20',
          'text' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
          'type' => 'range'
        ],
        [
          'title' => 'Question 20/20',
          'text' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ? ',
          'type' => 'varchar'
        ]
      ]);
    }
}

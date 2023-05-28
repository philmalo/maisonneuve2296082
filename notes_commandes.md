1 - installer l'environnement avec le nom demandé + la méthode pour faire fonctionner le tout sur mon environnement Trix. en installant 8.* + je peux le faire fonctionner sans modification sur mon environnement de travail.

`composer create-project --prefer-dist laravel/laravel maisonneuve2296082.local.t5y.ca "8.*"`

2 - créer les modèles Étudiant et Ville. J'ai des commandes abrégées configurées dans mon environnement, d'où l'usage de pa au lieu de php artisan

`pa make:model Etudiant`
`pa make:model Ville`

3 - créer la base de données dans phpmyadmin, elle se nomme maisonneuve2296082 aussi.

3.1 - créer les migrations, afin de pouvoir faire la clé étrangère directement dans le Schema::create, j'ai créé mes fichiers de migration dans l'ordre nécéssaire, soit de faire villes au préalable pour que la ligne de création de clé étrangère dans la table étudiants puisse pointer vers une table existante

`pa make:migration create_villes_table`
`pa make:migration create_etudiants_table`

les Schemas ressemblent à ceci

```
Schema::create('villes', function (Blueprint $table) {
    $table->id();
    $table->string('nom', 50);
    $table->timestamps();
});
```

```
Schema::create('etudiants', function (Blueprint $table) {
    $table->id();
    $table->string('nom', 50);
    $table->string('adresse', 100);
    $table->string('telephone', 20);
    $table->string('courriel', 50)->unique();
    $table->date('date_de_naissance');
    $table->foreignId('ville_id')->constrained('villes');
    $table->timestamps();
});
```

3.2 - Créer les tables

`pa migrate`

4 - Créer la factory pour faire des noms de villes

`pa make:factory VilleFactory -m Ville`


la définition resemble à ceci

```
public function definition()
{
    return [
        'nom' => $this->faker->city
    ];
}
```

4.1 - Créer 15 noms de villes

`pa tinker`

`\App\Models\Ville::factory()->times(15)->create();`


5 - Créer la factory pour faire des étudiants fictifs

`pa make:factory EtudiantFactory -m Etudiant`


la définition ressemble à ceci

```
public function definition()
{
    return [
        'nom' => $this->faker->firstName . ' ' . $this->faker->lastName,
        'adresse' => $this->faker->address,
        'telephone' => $this->faker->phoneNumber,
        'courriel' => $this->faker->email,
        'date_de_naissance' => $this->faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
        'ville_id' => $this->faker->randomElement(Ville::pluck('id'))
    ];
}
```

5.1 - Créer les 100 étudiants

`pa tinker`
`\App\Models\Etudiant::factory()->times(100)->create();`

6 - Créer le contrôleur Étudiant

`pa make:controller EtudiantController -m Etudiant`

7 - Dossier layout créé, fichier nommé app.blade.php

8 - Css abandonné pour utiliser bootstrap sadge

9 - index créé avec liens vers modification, détail et suppression

10 - Create créé, liste des villes venant de la base de données fonctionnelle bouton retour ajouté

11 - Show créé, affiche le détail pour un étudiant donné, modification, suppression et retour ajoutés

12 - Edit créé, fonctionnel

13 - Destroy créé avec boîte modale d'avertissement


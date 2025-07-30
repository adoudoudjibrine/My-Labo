
<h1> LISTE DES ETUDIANTS </h1>
<table class="table table-striped table-hover">

    <thead>
        <tr>
            <th>Id etudiant</th>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Lieu de Naissance</th>
            <th>Etablissement</th>
            <th>Departement</th>
            <th>Parcours</th>
            <th>Sexe</th>
            <th>Email</th>
            <th>Telephone</th>
        </tr>     
    </thead>        
    <tbody>
        <?php foreach ($etudiant as $etudiant): ?>
            <tr>
                <td><?= $etudiant->id; ?></td>
                <td><?= $etudiant->matricule; ?></td>
                <td><?= $etudiant->nom; ?></td>
                <td><?= $etudiant->prenom; ?></td>
                <td><?= $etudiant->date_de_naissance; ?></td>
                <td><?= $etudiant->extrait; ?></td>
                <td><?= $etudiant->etablissement_id; ?></td>
                <td><?= $etudiant->departement_id; ?></td>
                <td><?= $etudiant->parcours_id; ?></td>
                <td><?= $etudiant->sexe; ?></td>
                <td><?= $etudiant->email; ?></td>
                <td><?= $etudiant->telephone; ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

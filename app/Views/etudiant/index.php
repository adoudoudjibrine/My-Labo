
<h1> LISTE DES ETUDIANTS </h1>
<table class="table table-striped table-hover">

    <thead>
        <tr>
            <th>Id_etudiant</th>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Lieu de Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
            <th>Telephone</th>
        </tr>     
    </thead>        
    <tbody>
        <?php foreach ($etudiant as $etudiant): ?>
            <tr>
                <td><?= $etudiant->id_Etudiant; ?></td>
                <td><?= $etudiant->Matricule; ?></td>
                <td><?= $etudiant->Nom; ?></td>
                <td><?= $etudiant->Prenom; ?></td>
                <td><?= $etudiant->Date_de_Naissance; ?></td>
                <td><?= $etudiant->extrait; ?></td>
                <td><?= $etudiant->Sexe; ?></td>
                <td><?= $etudiant->email; ?></td>
                <td><?= $etudiant->telephone; ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

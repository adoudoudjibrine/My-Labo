<h1 class="title">Administrer les Etudiants </h1>

<p>
    <a href="?p=admin.etudiant.add" class="btn btn-success">Ajouter</a>
</p>

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
            <th>Actions</th>
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
                <td>
                    <a href="?p=admin.etudiant.edit&id=<?= $etudiant->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.etudiant.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $etudiant->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

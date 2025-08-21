<h1 class="title">Administrer les departements </h1>

<p>
    <a href="?p=admin.departement.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Intitule</th>
            <th>Code</th>
            <th>Etablissement</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($departements as $departement) : ?>
            <tr>
                <td><?= $departement->id ?></td>
                <td><?= $departement->intitule ?></td>
                <td><?= $departement->code ?></td>
                <td><?= $departement->etablissement_id ?></td>
                <td><?= $departement->extrait ?></td>
                <td>
                    <a href="?p=admin.departement.edit&id=<?= $departement->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.departement.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $departement->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


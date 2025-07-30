
<h1 class="title">Administrer les etablissements </h1>

<p>
    <a href="?p=admin.etablissement.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Intitule</th>
            <th>code</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $etablissement) : ?>
            <tr>
                <td><?= $etablissement->id ?></td>
                <td><?= $etablissement->intitule ?></td>
                <td><?= $etablissement->code ?></td>
                <td><?= $etablissement->description ?></td>
                <td>
                    <a href="?p=admin.etablissement.edit&id=<?= $etablissement->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.etablissement.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $etablissement->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


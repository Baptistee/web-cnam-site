<br>
<div class="card mx-auto w-50">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Modifier un utilisateur</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto">
        <table id="tableau" class="table text-center table table-hover table-bordered" style="width: 100%">

            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mdp</th>
                    <th scope="col">Role</th>
                    <th scope="col">Promo</th>
                    <th scope="col">Id</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($res as $unUtilisateur => $valeur): ?>
                    <form action="index.php" method="post">
                        <tr>
                            <th scope="row"> <input type="text" name="nom" value="<?=$valeur["Nom"]?>"/> </th>
                            <td> <input type="text" name="prenom" value="<?=$valeur["Prenom"]?>"/> </td>
                            <td> <input type="text" name="identifiant" value="<?=$valeur["Identifiant"]?>"/> </td>
                            <td> <input type="text" name="email" value="<?=$valeur["Email"]?>"/> </td>
                            <td> <input type="text" name="mdp" value="<?=$valeur["Mdp"]?>"/> </td>
                            <td> <input type="text" name="role" value="<?=$valeur["Role"]?>"/> </td>
                            <td> <input type="text" name="promo" value="<?=$valeur["Promo"]?>"/> </td>
                            <td> <input type="text" name="id" value="<?=$valeur["Id"]?>"/> </td>
                            <input type="hidden" name="page" value="informations">
                            <input type="hidden" name="action" value="modifierUtilisateur">
                            <td><input type='submit' value='Submit'> </td>
                        </tr>
                    </form>

                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <br>
</div>

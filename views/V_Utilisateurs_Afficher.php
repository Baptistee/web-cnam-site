<br>
<div class="card mx-auto w-50">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Tableau des utilisateurs</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto">
        <table id="tableau" class="table text-center table table-hover table-bordered" style="width: 100%">

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mdp</th>
                    <th scope="col">Role</th>
                    <th scope="col">Promo</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($res as $unUtilisateur => $valeur): ?>
                    <tr>
                        <th scope="row"> <?=$valeur["Id"]?> </th>
                        <td> <?=$valeur["Nom"]?> </td>
                        <td> <?=$valeur["Prenom"]?> </td>
                        <td> <?=$valeur["Identifiant"]?> </td>
                        <td> <?=$valeur["Email"]?> </td>
                        <td> <?=$valeur["Mdp"]?> </td>
                        <td> <?=$valeur["Role"]?> </td>
                        <td> <?=$valeur["Promo"]?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
     </article>
    </div>
    <br>
</div>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($res as $unUtilisateur => $valeur): ?>
        <div class="col">
            <div class="card">
                <h5 class="card-title"><?php print($valeur["Nom"]." ".$valeur["Prenom"])?></h5>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <ul class="list-group">
                            <li class="list-group-item"> Nom : <input type="text" name="nom" value="<?=$valeur["Nom"]?>"/></li>
                            <li class="list-group-item"> Prénom : <input type="text" name="prenom" value="<?=$valeur["Prenom"]?>"/></li>
                            <li class="list-group-item"> Identifiant : <input type="text" name="identifiant" value="<?=$valeur["Identifiant"]?>"/></li>
                            <li class="list-group-item"> Email : <input type="text" name="email" value="<?=$valeur["Email"]?>"/></li>
                            <li class="list-group-item"> Mdp : <input type="text" name="mdp" value="<?=$valeur["Mdp"]?>"/></li>
                            <li class="list-group-item"> Role : <input type="text" name="role" value="<?=$valeur["Role"]?>"/></li>
                            <li class="list-group-item"> Promo : <input type="text" name="promo" value="<?=$valeur["Promo"]?>"/></li>
                        </ul>
                        <input type="hidden" name="modifier_id" value="<?=$valeur["Id"]?>">
                        <input type="hidden" name="page" value="informations">
                        <input type="hidden" name="action" value="modifierUtilisateur">
                        <input type='submit' value='Submit'>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
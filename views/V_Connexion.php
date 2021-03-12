<div class="container">

    <div class="card mx-auto w-50" style="max-width: 500px;">
        
        <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Page de connexion</h4></div>
        
        <div class="card-body">

            <article class="card-body mx-auto" style="max-width: 400px;">

                <form action="index.php" method="post">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Identifiant</label>
                        <input class="form-control" type="text" name="login">
                        <div class="form-text">Ne partagez pas vos informations secrètes avec vos collègues.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input class="form-control" type="password" name="pwd">
                    </div>

                    <input type="hidden" name="action" value="valideConnexion">

                    <button class="btn btn-primary" type="submit">Valider</button>

                </form>

            </article>

        </div>

    </div>

</div>
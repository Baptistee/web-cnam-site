<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container-fluid">

            <h1 class="display-6">CNAM</h1>

            <a class="navbar-brand" href="#">Bienvenue</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <?php
                if(isset($_SESSION['id']))
                {
                    ?>
                    <li class="nav-item">
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='afficherUtilisateur'/>

                            <button class="linkbutton" type='submit'>Consulter</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='ajouter'/>

                            <button class="linkbutton" type='submit'> . Ajouter</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='modifier'/>

                            <button class="linkbutton" type='submit'> . Modifier</button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='supprimer'/>

                            <button class="linkbutton" type='submit'> . Supprimer</button>
                        </form>
                    </li>
                    <?php
                }
                
                ?>
            </ul>

            </div>

        </div>

    </nav>

</header>

<br>
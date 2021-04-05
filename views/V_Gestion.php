<div class="container">

    <div class="card mx-auto w-50" style="max-width: 500px;">
        
        <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Page admin de gestion</h4></div>
        
        <div class="card-body">

            <article class="card-body mx-auto" style="max-width: 400px;">

                <ul class="list-group list-group-flush">

                    <li>
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='consulter'/>

                            <button id="linkbutton" type='submit'>Consulter</button>
                        </form>
                    </li>

                    <li>
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='ajouter'/>

                            <button id="linkbutton" type='submit'>Ajouter</button>
                        </form>
                    </li>

                    <li>
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='modifier'/>

                            <button id="linkbutton" type='submit'>Modifier</button>
                        </form>
                    </li>

                    <li>
                        <form action='index.php' method='post'>

                            <input type='hidden' name='page' value='informations'/>
                            <input type='hidden' name='action' value='supprimer'/>

                            <button id="linkbutton" type='submit'>Supprimer</button>
                        </form>
                    </li>

                </ul>

            </article>

        </div>

    </div>

</div>
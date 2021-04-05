<?php
// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($test == 0)
{
    print('ok');
}

else
{
    print('non');
}

/*

// On vérifie que la méthode utilisée est correcte
if($_SERVER['REQUEST_METHOD'] == 'GET')
{

    $donnees = json_decode(file_get_contents("php://input"));

    if(!empty($donnees->id))
    {
        $produit->id = $donnees->id;

        // On récupère le produit
        $produit->lireUn();

        // On vérifie si le produit existe
        if($produit->nom != null)
        {
            $prod = [
                "id" => $produit->id,
                "nom" => $produit->nom,
                "description" => $produit->description,
                "prix" => $produit->prix,
                "categories_id" => $produit->categories_id,
                "categories_nom" => $produit->categories_nom
            ];
            // On envoie le code réponse 200 OK
            http_response_code(200);

            // On encode en json et on envoie
            echo json_encode($prod);
        }

        else
        {
            // 404 Not found
            http_response_code(404);
         
            echo json_encode(array("message" => "Le produit n'existe pas."));
        }
    }
}

else
{
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}

*/

?>
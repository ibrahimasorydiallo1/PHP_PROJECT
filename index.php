<?php
// Déclaration des produits
$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

$panier = [$produit1, $produit2, $produit3];

// Fonction pour calculer le sous-total
function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

// Calcul et affichage des sous-totaux et du total
$totalPanier = 0;

echo "<h3>Résumé du panier :</h3>";
echo "<table border='1'>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Sous-total</th>
        </tr>";

foreach ($panier as $produit) {
    $sousTotal = calculerSousTotal($produit);
    echo "<tr>
            <td>{$produit['nom']}</td>
            <td>{$produit['prix']} €</td>
            <td>{$produit['quantite']}</td>
            <td>{$sousTotal} €</td>
          </tr>";
    $totalPanier += $sousTotal;
}

echo "</table>";
echo "<p>Total du panier : $totalPanier €</p>";

// Application de la réduction si le total dépasse 50€
if ($totalPanier > 50) {
    $reduction = $totalPanier * 0.1;
    $totalApresReduction = $totalPanier - $reduction;
    echo "<p>Une réduction de 10% a été appliquée. Nouveau total : $totalApresReduction €</p>";
} else {
    echo "<p>Pas de réduction appliquée.</p>";
}
?>

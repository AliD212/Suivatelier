<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Stagiaires</title>
	</head>
	
	<body>
		<a href="/suivateliers/deconnecter">Se déconnecter</a>
		<a href="/suivateliers/ateliers">Ateliers</a>
		
		<h4>
			Atelier <em><?= $atelier[ 'theme' ] ?></em>
			<?php
				list( $date , $heure ) = explode( ' ' , $atelier[ 'date_heure' ] ) ;
				list( $annee , $mois , $jour ) = explode( '-' , $date ) ;
			?>
			du <em><?= $jour ?>/<?= $mois ?>/<?= $annee ?></em>
		</h4>
		
		<table>
			
			<thead>
				<th>Civilité</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Date de naissance</th>
				<th>Adresse</th>
				<th>CP</th>
				<th>Ville</th>
			</thead>
			
			<tbody>
				
				<?php foreach ($stagiaires as $unStagiaire) { ?>
    <tr>
		
		<?php


function encryptAES($data, $key) {
   
    $cipher = "aes-256-cbc";

   
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

   
    $encrypted = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);

    
    $encryptedWithIv = $iv . $encrypted;

   
    return base64_encode($encryptedWithIv);
}

?>

		
        <td><?= encryptAES($unStagiaire['civilite'], $key) ?></td>
        <td><?= encryptAES($unStagiaire['nom'], $key) ?></td>
        <td><?= encryptAES($unStagiaire['prenom'], $key) ?></td>
        <td><?= encryptAES($unStagiaire['email'], $key) ?></td>
        <td><?= encryptAES($unStagiaire['mobile'], $key) ?></td>
        <?php
        list($annee, $mois, $jour) = explode('-', $unStagiaire['date_naissance']);
        ?>
        <td><?= encryptAES($jour . '/' . $mois . '/' . $annee, $key) ?></td>
        <td><?= encryptAES($unStagiaire['adresse'], $key) ?></td>
        <td><?= encryptAES($unStagiaire['cp'], $key) ?></td>
        <td><?= encryptAES($unStagiaire['ville'], $key) ?></td>
    </tr>
<?php } ?>

			</tbody>
			
		</table>
		
	</body>
	
</html>

<!DOCTYPE html>
<html>

	<body>	

    <?php include 'header.php' ?>

	<section id="actions" class="fond">
		<h2> Nos actions </h2>
		<div class="container-general">
			<div class="element">
				<a href="balance1.html">
					 <img src="./image/sac.jpg" alt="Une image de sac poubelle noir">
					 <h3 class="lien1">Balance ton sac !</h3>
				</a>
			</div>
			<div class="element">
				<a href="compostator2.html">
					<img src="./image/compost.jpg" alt="Une image de compost">
				 	<h3 class="lien1">Le compostator</h3>
				</a>
			 </div>
			 <div class="element">
				 <a href="lessive3.html">
				 	<img src="./image/lessive.jpg" alt="Un logo ultra doux">
				 	<h3 class="lien1">Lessive lave plus vert !</h3>
				 </a>
			 </div>
		</div>
	</section>
	
	<section id="associations">
		<h2> Les acteurs du changement </h2>
		<div class="container-general">
			<div class="element">
			 	<a href="ressourcerie1.html">
			 		<img src="./image/ressourcerie.jpg" alt="Logo de la ressourcerie">
			 		<h3 class="lien1">La ressourcerie</h3>
				</a>
			</div>
			<div class="element">
				<a href="atelier2.html">
					<img src="./image/l'atelier.jpg" alt="Logo de l'atelier">
			 		<h3 class="lien1">L'atelier</h3>
			 	</a>
			 </div>
			 <div class="element">
			 	<a href="ecopole3.html">
			 		<img src="./image/ecopole.jpeg" alt="Logo de l'ecopole">
			 		<h3 class="lien1">Lessive lave plus vert !</h3>
			 </a>
			 </div>
			</div>
	</section>
	
	<section class="containerD" id="dechets">
        <h2>Gestion des déchets</h2>
        <h3>Conseils</h3>
        <div class="visuelg">
            <div class="visuel">
                <img src="image/canvarecyc.jpg" alt="visuel de recyclage de plastique">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in efficitur ante, id faucibus arcu. Aliquam quis tempus mi, ut pretium elit. Etiam laoreet vitae nisl at rutrum. Vivamus cursus, lacus in blandit tempus, velit dui ultricies est, et aliquam lacus augue in odio. Nullam sed tempus nibh, sit amet eleifend metus. Maecenas tincidunt nisi eget velit tristique, nec efficitur magna aliquam. In convallis porta feugiat. Pellentesque imperdiet condimentum odio, vitae pellentesque urna aliquet quis. Phasellus ut lobortis est. </p>
        </div>
            <div class="triButton">
            	<div>
            		<input class="customButton" type="button" name="buttonDechets" value="Déchets verts" onclick="window.location.href='https://www.nantesmetropole.fr/actualite/l-actualite-thematique/que-faire-des-dechets-de-son-jardin-dechets-95905.kjsp'">   
            	</div>
            	<div>
            		<input class="customButton" type="button" name="buttonDechets" value="Verre" onclick="window.location.href='https://www.nantesmetropole.fr/pratique/dechets/le-recyclage-des-emballages-en-verre-28665.kjsp'">
            	</div>
            	<div>
            		<input class="customButton" type="button" name="buttonDechets" value="Plastiques" onclick="window.location.href='https://www.nantesmetropole.fr/pratique/dechets/le-recyclage-des-emballages-plastiques-28659.kjsp'">
            	</div>
            </div>
        <h3>Points de collecte</h3>
        <div class="visueld">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in efficitur ante, id faucibus arcu. Aliquam quis tempus mi, ut pretium elit. Etiam laoreet vitae nisl at rutrum. Vivamus cursus, lacus in blandit tempus, velit dui ultricies est, et aliquam lacus augue in odio. Nullam sed tempus nibh, sit amet eleifend metus. Maecenas tincidunt nisi eget velit tristique, nec efficitur magna aliquam. In convallis porta feugiat. Pellentesque imperdiet condimentum odio, vitae pellentesque urna aliquet quis. Phasellus ut lobortis est. <br><a href="https://ourecycler.fr/recyclage/tout/44300/nantes" title="carte interactive et participative de localisation des points de recyclage ">Pour trouver le point de collecte le plus proche avec Ourecycler.fr</a></p>
				<object class="visuel" data="https://ourecycler.fr/ourecycler.php?typ=&mat=&asso=&ville=Nantes&dpt=&zoom=&Pts-apport=1&bk1=&bk2=&taille="></object>
        </div>
    </section>
	<section class="containerFormulaire">

        <?php include 'form.php' ?>

	</section>

    <?php include 'footer.php' ?>

</body>
</html>
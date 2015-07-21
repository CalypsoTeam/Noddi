<section class="page page_dashboard">
	<header class="headerPage">
	    <h2 class="titlePage">DashBoard</h2>
	    <div class="previousStepMenu">
	    	<a href="<?=$this->request->base?>">
	    		Précédent
	    	</a>
	    </div>
	</header>
	
	<?php if(!empty($finished_offers[0])) { ?>
	<ul id="tabsOfferStatus" class="tabsOfferStatus">
	   	
	    <li id="showCurrentOffer" class="active">Proposition en cours</li>
	    <li id="showTerminatedOffers">Propositions terminées</li>
	</ul>		
	<?php } ?>
	
	<div class="propositions" id="currentOffer">
		<article class="proposition">

			<div class="blue_header">
				<h2><?php if($offer->title != null) { echo $offer->title; } else { echo 'Unknown'; } ?></h2>
				<span class="delete deleteOffer" data-offer="<?=$offer->id?>"></span>
			</div>
			
			<div class="content">
				<img src="<?=$this->request->base?>/img/offers/<?=$offer->uniquid?>/1.png" alt="" />
				<div class="proposition_content">
					<p class="type"><?=$offer->type->name?></p>
					<p class="exchange"><?= str_replace("_", " ", $offer->exchange)?></p>
					<p class="status"><?php if($offer->finished == 0) { echo 'En attente'; } else { echo 'Finie'; } ?></p>
				</div>
			</div>

			<?php if($offer->notif != 0) { echo '<div class="notifOffer">'.$offer->notif.'</div>'; } ?>
			
		</article>

		<footer class="footerLinks">
			<?php 
				if(!empty($applies_modeuse[0]) || !empty($applies_brand[0])) {
					echo $this->Html->link(__('Voir ma proposition'), ['action' => 'view', $offer->id], ['class' => 'button dark']);
				}
			?>
			<?= $this->Html->link(__('Continuer la recherche de Noddiz'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'button dark reversed']) ?>
		</footer>
	</div>

	<div class="propositions" id="terminatedOffers">

		<?php if(!empty($finished_offers[0])) {
			foreach ($finished_offers as $key => $offer) { ?>

				<article class="proposition">

					<div class="blue_header">
						<h2><?=$offer->title?></h2>
						<span class="delete deleteOffer" data-offer="<?=$offer->id?>"></span>
					</div>
					
					<div class="content">
						<img src="<?=$this->request->base?>/img/offers/<?=$offer->uniquid?>/1.png" alt="" />
						<div class="proposition_content">
							<p class="type"><?=$offer->type->name?></p>
							<p class="exchange"><?=$offer->exchange?></p>
							<p class="status"><?php if($offer->finished == 0) { echo 'En attente'; } else { echo 'Finie'; } ?></p>
						</div>
					</div>
				</article>

			<?php }
		} ?>

	</div>

	

	
	
	
	
</section>

<?= $this->Html->script('offers') ?>
<div class="page page_offers"></div>

<?php if($this->request->session()->read('type') == 'brand') { ?>
    <button class="buttons_offers button get_current_offer">Offre en cours</button>
    <button class="buttons_offers button get_finished_offers">Offres terminées</button>

    <section class="finished_offers">

        <ul>
            <?php foreach ($finished_offers as $key => $offer) { ?>
                <li><?=$offer->title?></li>
            <?php } ?>
        </ul>

    </section>

    <section class="current_offer">

        <div>

            <div class="offer_picture">
                <img src="img/offers/<?=$current_offer->id?>/1.jpg" alt="" />
            </div>

            <div class="offer_content">
                <?=$current_offer->type->name?>

                <?=$current_offer->exchange?>
            </div>
            
        </div>

    </section>

<?php } else { ?>

    <?php if(!empty($applies[0])) { 
        $k = 0;
        foreach ($applies as $key => $apply) { 

            if($k==0) { echo'<div>'; } else { echo '<div style="display:none">'; } ?>
                <img width="200" src="img/offers/<?=$apply->offer->uniquid?>/1.jpg" alt=""> 

                <h3>Informations générales</h3>

                <h4><?=$apply->offer->title?></h4>

                <img src="img/<?=$apply->offer->brand->user->picture?>" alt="">

                <button class="display_message" data-message="<?=$apply->message?>">Display Message</button>

                <button class="button acceptApply" data-apply="<?=$apply->id?>" data-offer="<?=$apply->offer->id?>" data-modeuse="<?=$modeuse->id?>">Accepter</button>
                <button class="button removeApplyOffer" data-apply="<?=$apply->id?>">Décliner</button>

            </div>

        <?php $k++; }
   
    } else {

        if($modeuse->boost == 1) { ?>

            <h2>Propositions</h2>

            <p>
                <b>Tu n'as plus de propositions pour le moment.</b> <br /><br />

                Tu recevras un nouvel email d'alerte lorsqu'une autre marque sera intéressée par ton profil. <br /> <br />

                Néanmoins, il te reste encore une chance de prouver ta motivation auprès d'une marque pour tenter de collaborer avec elle.
                
            </p>

            <div>
                <button class="button get_offers">Voir les propositions</button>
            </div>

            <ul class="all_offers"></ul>

        <?php } else { ?>

            <p>
                <b>Si la marque est intéressée par ton offre, tu recevras un mail de confirmation dans ta boîte perso</b> <br /><br />

                Samedi prochain, tu recevras de nouveau un Boost que tu pourras utiliser sur l'offre de ton choix. <br /><br />

                D'ici-là, suis-nous sur les réseaux sociaux pour continuer à recevoir plein de bons plans !

                <footer>
                    <section class="socials">
                        <ul id="sectionSocial">
                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/noddi.eu">facebook</a></li>
                            <li class="twitter"><a target="_blank" href="https://twitter.com/theNoddi">twitter</a></li>
                            <li class="instagram"><a target="_blank" href="https://instagram.com/thenoddi">Instagram</a></li>
                            <li class="snapchat"><a target="_blank" href="#">Snapchat</a></li>
                            <li class="pinterest"><a target="_blank" href="https://fr.pinterest.com/noddi0434/">Pinterest</a></li>
                        </ul>
                    </section>
                </footer>
            </p>

        <?php }
    }
 } ?>



<?=$this->Html->script('offers')?>
<?php
    $tab_lifestyle = array();
    $tab_lifestyle[] = "Bohème";
    $tab_lifestyle[] = "Hippie Chic";
    $tab_lifestyle[] = "Chic";
    $tab_lifestyle[] = "Casual";
    $tab_lifestyle[] = "Street fashion";
    $tab_lifestyle[] = "Excentrique";
    $tab_lifestyle[] = "Pinup";
    $tab_lifestyle[] = "Rétro vintage";
    $tab_lifestyle[] = "Glam rock";
    $tab_lifestyle[] = "Baroque";
    $tab_lifestyle[] = "Flashy";
    $tab_lifestyle[] = "Old School";
    $tab_lifestyle[] = "Romantique";

    function getValue($text) {
        $text = str_replace(" ", "_", $text);
        return $text;
    }

    $i = 0;
    foreach ($tab_lifestyle as $key => $lifestyle) {
        $tab_lifestyle[$i] = array();
        $tab_lifestyle[$i]['name'] = $lifestyle;
        $tab_lifestyle[$i]['value'] = getValue($lifestyle);
        $i++;
    }

    $tab_personnality = array();
    $tab_personnality[] = "Amusante";
    $tab_personnality[] = "Bavarde";
    $tab_personnality[] = "Curieuse";
    $tab_personnality[] = "Sincère";
    $tab_personnality[] = "Gourmande";
    $tab_personnality[] = "Joueuse";
    $tab_personnality[] = "optimiste";
    $tab_personnality[] = "Patiente";
    $tab_personnality[] = "Sensible";
    $tab_personnality[] = "Réfléchie";
    $tab_personnality[] = "Sociable";
    $tab_personnality[] = "Spontanée";
    $tab_personnality[] = "Rêveuse";

    $i = 0;
    foreach ($tab_personnality as $key => $personnality) {
        $tab_personnality[$i] = array();
        $tab_personnality[$i]['name'] = $personnality;
        $tab_personnality[$i]['value'] = getValue($personnality);
        $i++;
    }

    $tab_echange = array();
    $tab_echange[] = "Don";
    $tab_echange[] = "Prêt";
    $tab_echange[] = "Invitation";
    $tab_echange[] = "Dégustation offerte";
    $tab_echange[] = "Boisson offerte";

    $i = 0;
    foreach ($tab_echange as $key => $echange) {
        $tab_echange[$i] = array();
        $tab_echange[$i]['name'] = $echange;
        $tab_echange[$i]['value'] = getValue($echange);
        $i++;
    }

    $tab_interest = array();
    $tab_interest[] = "le cinéma";
    $tab_interest[] = "la culture";
    $tab_interest[] = "la littérature";
    $tab_interest[] = "la mode";
    $tab_interest[] = "le voyages";
    $tab_interest[] = "le sport";
    $tab_interest[] = "la culture geek";
    $tab_interest[] = "les langues";
    $tab_interest[] = "la nature";
    $tab_interest[] = "la cuisine";
    $tab_interest[] = "les animaux";
    $tab_interest[] = "les Spectacles";
    $tab_interest[] = "l'architecture";
    $tab_interest[] = "les cosmétiques";

    $i = 0;
    foreach ($tab_interest as $key => $interest) {
        $tab_interest[$i] = array();
        $tab_interest[$i]['name'] = $interest;
        $tab_interest[$i]['value'] = getValue($interest);
        $i++;
    }

    $tab_socials = array();
    $tab_socials[] = "facebook";
    $tab_socials[] = "twitter";
    $tab_socials[] = "instagram";
    $tab_socials[] = "vine";
    $tab_socials[] = "snapchat";
    $tab_socials[] = "pinterest";
    $tab_socials[] = "tumblr";
    $tab_socials[] = "Flickr";
    $tab_socials[] = "youtube";

    $i = 0;
    foreach ($tab_socials as $key => $echange) {
        $tab_socials[$i] = array();
        $tab_socials[$i]['name'] = $echange;
        $tab_socials[$i]['value'] = getValue($echange);
        $i++;
    }
?>
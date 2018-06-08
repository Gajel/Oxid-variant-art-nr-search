<?php

/**
 *
 *
 */

$sMetadataVersion = '2.0';
$aModule = array(
    'id'          => 'var_art_suche',
    'title'       => 'Variantensuche',
    'description' => 'Variantensuche per Art-Nr. möglich',
    'thumbnail'   => 'out/pictures/ecs.png',
    'version'     => '0.1',
    'author'      => '<strong style="font-size: 17px;color:#04B431;">Jakob</strong>',
    'email'       => 'jk@trensco.de',
    'extend'      => array(
		\OxidEsales\Eshop\Application\Model\Search::class       => \var_art_suche\Model\Search::class,
    ),
);

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
    'version'     => '2.0.0',
    'author'      => '<strong style="font-size: 17px;color:#04B431;">Jakob</strong>',
    'url'         => 'https://',
    'email'       => 'jk@trensco.de',
    'extend'      => array(
		\OxidEsales\Eshop\Application\Model\Search::class       => \jakob\var_art_suche\Model\Search::class,
    ),
);

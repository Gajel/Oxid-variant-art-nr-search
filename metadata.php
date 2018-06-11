<?php

/**
 *
 *
 */

$sMetadataVersion = '2.0';
$aModule = array(
    'id'          => 'trensco_varartsuche',
    'title'       => 'Variantensuche',
    'description' => 'Variantensuche per Art-Nr. möglich',
    'thumbnail'   => 'monkey.png',
    'version'     => '2.0.0',
    'author'      => '<strong style="font-size: 17px;color:#04B431;">Trensco</strong>',
    'email'       => 'jk@trensco.de',
    'extend'      => array(
		\OxidEsales\Eshop\Application\Model\Search::class       => Trensco\VarArtSuche\Model\Search::class,
    ),
);
<?php

$phrase = 'after twelve long years it should be awesome';

require __DIR__ . '/classes/CMUDict.class.php';
$cmu_dict = CMUDict::get();

$result = array();
$phrase = trim($phrase);
$words = mb_strpos($phrase, ' ') ? explode(' ', $phrase) : (array)$phrase;
foreach ($words as $word) {
    $phonemes = $cmu_dict->getPhonemes($word);
    $result[$word] = $phonemes;
    echo '<pre>' . print_r($phonemes, 1) . '</pre>';
}

echo '<pre>' . print_r($result, 1) . '</pre>';

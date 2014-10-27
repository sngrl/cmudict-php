<?php

$phrase = 'after twelve long years it should be awesome';

header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/classes/CMUDict.class.php';
$cmu_dict = CMUDict::get();

echo '<pre>' . $phrase . '</pre>';

$phrase_phoneme = $cmu_dict->getPhoneme($phrase);
echo '<pre>' . print_r($phrase_phoneme, 1) . '</pre>';

$phrase_transcription = $cmu_dict->getTranscription($phrase);
echo '<pre>' . print_r($phrase_transcription, 1) . '</pre>';

$phrase_rus_transcription = $cmu_dict->getRusTranscription($phrase);
echo '<pre>' . print_r($phrase_rus_transcription, 1) . '</pre>';

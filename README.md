cmudict-php
===========

PHP library for work with [CMU Pronouncing Dictionary](http://www.speech.cs.cmu.edu/cgi-bin/cmudict) (CMUdict).

With this class you can get the pronunciation of words in the English language, and the approximate transcription in Russian.

In work uses the last version: CMUdict  --  Major Version: 0.07a [102007].

[Arpabet](http://en.wikipedia.org/wiki/Arpabet) table is used to convert the phonemes in the transcription.

To obtain an approximate Russian transcription used [rules of Anglo-Russian practical transcription](https://ru.wikipedia.org/wiki/Англо-русская_практическая_транскрипция).

Note. The basis was taken out of class project [is-ottava-rima](https://github.com/cdmckay/is-ottava-rima) (unfortunately, it has not been updated since 2012). In fact, it is left unchanged - all the extra functionality is taken in the auxiliary class that extends the base class.

Example
===========

Original text:

```php
after twelve long years it should be awesome
```

Phonemes (Arpabet):

```php
AE F T ER ;; T W EH L V ;; L AO NG ;; Y IH R Z ;; IH T ;; SH UH D ;; B IY ;; AA S AH M
```

Transcription:

```php
æftɝ twɛɫv ɫɔŋ jɪrz ɪt ʃʊd bi ɑsʌm
```

Russian transcription:

```php
эфте твэлв лон йирз ит шуд би асам
```

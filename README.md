# MASA
## MASA - Multilingual AFINN Sentiment Analysis

Multilingual sentiment analysis library based on translated AFINN word lists.

"AFINN is a list of English words rated for valence with an integer between minus five (negative) and plus five (positive)."
http://www2.imm.dtu.dk/pubdb/views/publication_details.php?id=6010

## Usage
```php

$language = 'no';
$masa = new \Web64\Nlp\Masa\Masa( $language );

$score = $masa->score( $text );
// $score more than 0 for positive
// $score less than 0 for negative
```

## Language Support
More languages to be added soon!
Let us know if there is a specific language you want to be added.
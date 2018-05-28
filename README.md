# MASA
MASA - Multilingual AFINN Sentiment Analysis


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
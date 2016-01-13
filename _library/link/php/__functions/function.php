<?

function titlecase($string, $delimiters = array(" ", "-", "O'"), $exceptions = array("to", "a", "the", "of", "by", "is", "for", "and", "with", "or", "de", "NW", "PMG", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X")) { 
    /* 
    * Exceptions in lower case are words you don't want converted 
    * Exceptions all in upper case are any words you don't want converted to title case 
    *   but should be converted to upper case, e.g.: 
    *   king henry viii or king henry Viii should be King Henry VIII 
    */ 
    foreach ($delimiters as $delimiter){ 
         $words = explode($delimiter, $string); 
         $newwords = array(); 
         foreach ($words as $word){ 
             if (in_array(strtoupper($word), $exceptions)){ 
                 // check exceptions list for any words that should be in upper case 
                 $word = strtoupper($word); 
             } elseif (!in_array($word, $exceptions)){ 
                 // convert to uppercase 
                 $word = ucfirst($word); 
             } 
             array_push($newwords, $word); 
         } 
         $string = join($delimiter, $newwords); 
    } 
    return $string; 
    // titlecase(); can be used to intermingle.
} 

function sentence_case($string) 
    // Converts $string to Sentence case
    { 
    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
    $new_string = ''; 
        foreach ($sentences as $key => $sentence) { 
        $new_string .= ($key & 1) == 0? 
        ucfirst(strtolower(trim($sentence))) : 
        $sentence.' '; 
  } 
  return trim($new_string); 
} 

?>


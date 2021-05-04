<?php
  /**
  * The summary of common helper set of common used function.
  * Common operation
  * @author Adi Prasetyo
  */

  /**
  * read json file.
  * @param string $location path of the file to be read
  * @return mixed
  */
  function readJsonFile($location)
  {
    $data= file_get_contents($location);
		return json_decode($data, TRUE);
  }

  /**
  * write a variable to json.
  * @param string $location of json file
  * @param mixed $var variable to write
  * @param int $encode_option see https://secure.php.net/manual/en/json.constants.php
  * @return mixed return FALSE on failure
  */
  function writeJsonFile($location, $var, $encode_option= JSON_PRETTY_PRINT)
  {
    $var= json_encode($var, $encode_option);
    return file_put_contents($location, $var);
  }

  /**
  * response as json.
  * description
  * @param mixed $data data to be sent
  * @return void
  */
  function responseAsJson($data)
  {
    echo json_encode($data);
  }

  /**
  * truncate word with given number as second parameter.
  * return part of a string specified by $numberOfCharacter also will have
  * suffix .....
  * @param string $word word to be truncated
  * @param int $numberOfCharacter number of character
  * @return string truncated word
  */
  function truncateWord(& $word, $numberOfCharacter)
  {
    if (strlen($word)< $numberOfCharacter-1) {
      $numberOfCharacter= strlen($word);
    }
    $word= substr($word, 0, $numberOfCharacter+5);
    if (strlen($word)> $numberOfCharacter) {
      $word.= '.....';
    }
  }

  /**
  * Construct humanize version of full name.
  * return human version of given string
  * @param string $firstName first name
  * @param string $lastName last name
  * @param string $separator (optional)
  * @return string humanized version of given name
  */
  function humanizeFullName($firstName, $lastName, $separator= ' ')
  {
    return ucfirst($firstName). $separator. ucfirst($lastName);
  }

  // @TODO object to array
  // array to object
  // https://stackoverflow.com/questions/1869091/how-to-convert-an-array-to-object-in-php
  // https://stackoverflow.com/questions/19272011/how-to-convert-an-array-into-an-object-using-stdclass/19272047
?>

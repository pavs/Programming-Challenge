<?
/* Luhn algorithm number checker - (c) 2005-2008 shaman - www.planzero.org *
 * This code has been released into the public domain, however please      *
 * give credit to the original author where possible.                      */

/* Challenge 13: Credit Card Validator - Takes in a credit card number from a common credit card vendor 
(Visa, MasterCard, American Express, Discoverer) and validates it to make sure that it is a valid number 
(look into how credit cards use a checksum). 

*/

echo<<<_END

<form method="post" action="13-creditcard-validator.php">

Enter Your Credit Card number:
<input type="text" name="credit" size="10" />
<input type="submit" value="Validate" />

</form>
_END;

if (isset($_POST['credit'])) {
  $number = $_POST['credit'];
}


if (luhn_check($number) == TRUE) {
  echo "The number is valid";
}

elseif (luhn_check($number) == FALSE) {
  echo "The number is not valid";
}

else echo " ";



function luhn_check($number) {

  // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
  $number=preg_replace('/\D/', '', $number);

  // Set the string length and parity
  $number_length=strlen($number);
  $parity=$number_length % 2;

  // Loop through each digit and do the maths
  $total=0;
  for ($i=0; $i<$number_length; $i++) {
    $digit=$number[$i];
    // Multiply alternate digits by two
    if ($i % 2 == $parity) {
      $digit*=2;
      // If the sum is two digits, add them together (in effect)
      if ($digit > 9) {
        $digit-=9;
      }
    }
    // Total up the digits
    $total+=$digit;
  }

  // If the total mod 10 equals 0, the number is valid
  return ($total % 10 == 0) ? TRUE : FALSE;

}
?>
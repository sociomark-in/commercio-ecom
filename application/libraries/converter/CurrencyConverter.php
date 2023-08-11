<?php
class CurrencyConverter
{
    public function convert($base, $target)
    {
        $endpoint = 'live';
        $access_key = 'a6bfdefd8f57bedc40c13d30ff523cdc';

        if (isset($_SESSION['currency'])) {
            $conversionResult = json_decode($_SESSION['currency'], true)['quotes'];
        } else {
            $ch = curl_init('http://api.currencylayer.com/' . $endpoint . '?access_key=' . $access_key);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json = curl_exec($ch);
            curl_close($ch);
            $_SESSION['currency'] =  $json;
        }
        return $conversionResult['USD' . $target] / $conversionResult['USD' . $base];
    }
}

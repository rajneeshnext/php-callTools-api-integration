function getContactTags($contactid){
    echo $next_page = "https://west-2.calltools.io/api/contacts/$contactid/";
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "$next_page",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Token xxxxxx",
        "accept: application/json"
      ),
     ));

    $response = curl_exec($curl);
    $datas = json_decode($response, true);
    return $datas['tags'];
}
function getContact(){
$next_page = "https://west-2.calltools.io/api/contacts/$id/";
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$next_page",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Token xxxx",
    "accept: application/json"
  ),
 ));
 
$response = curl_exec($curl);
$data = json_decode($response, true);
}

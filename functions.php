function agentperformance(){
$next_page = "https://west-2.calltools.io/api/agentperformance/?range=custom&range_start=".$date_start."T00:00:00.000Z&range_end=".$date_start."T23:59:59.000Z";
//echo "<br/>";
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
    "Authorization: Token xxxxx",
    "accept: application/json"
  ),
 ));
$response = curl_exec($curl);
$data_records = json_decode($response, true);
//print_r($data_records);exit();
}
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

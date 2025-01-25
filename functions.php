function getOwnerforContact(){
if(isset($data_r['call_disposition'])){
            echo "<br>Call dispositions by: ";
            $app_calldispositions = $data_r['call_disposition'];
            $next_page_app_owned_by = "https://west-2.calltools.io/api/calldispositions/$app_calldispositions/";
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "$next_page_app_owned_by",
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
        
            $response_owned_by = curl_exec($curl);
            $data_calldispositions = json_decode($response_owned_by, true);
            $column_values[] = '\"status_16__1\": { \"label\":\"'.$data_calldispositions['name'].'\"}';
        }
        
        if(isset($data_r['owned_by'])){
            $app_owned_by = $data_r['owned_by'];
            echo "<br>Owned by: ".$app_owned_by;
            $next_page_app_owned_by = "https://west-2.calltools.io/api/users/$app_owned_by/";
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "$next_page_app_owned_by",
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
        
            $response_owned_by = curl_exec($curl);
            $data_owned_by = json_decode($response_owned_by, true);
            $column_values[] = '\"owner_name__1\": \"'.$data_owned_by['full_name'].'\"';
            if(isset($data_owned_by['custom_settings'])){
                if(isset($data_owned_by['custom_settings']['MUID'])){
                    $muid = $data_owned_by['custom_settings']['MUID'];
                    $column_values[] = '\"lead_owner\": \"'.$muid.'\"';
                }
            }
            //print_r($data_owned_by);
        }
        //exit();
        
        if(isset($data_r['modified_by'])){
            $app_owned_by = $data_r['modified_by'];
            echo "<br>Modified by: ".$app_owned_by;
            if($data_r['modified_by'] == "7491c245-3303-4b74-9ffa-d2f3fd694fd3"){
                $column_values[] = '\"dropdown7__1\": \"Rajneesh dev\"'; 
            }else{
                $next_page_app_owned_by = "https://west-2.calltools.io/api/users/$app_owned_by/";
                
                $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => "$next_page_app_owned_by",
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
            
                $response_owned_by = curl_exec($curl);
                $data_modified_by = json_decode($response_owned_by, true);
                $column_values[] = '\"dropdown7__1\": \"'.$data_modified_by['full_name'].'\"';   
            }
        }
        
        if(isset($data_r['created_by'])){
            $app_owned_by = $data_r['created_by'];
            echo "<br>Created by: ".$app_owned_by;
            $next_page_app_owned_by = "https://west-2.calltools.io/api/users/$app_owned_by/";
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "$next_page_app_owned_by",
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
        
            $response_owned_by = curl_exec($curl);
            $data_created_by = json_decode($response_owned_by, true);
            $column_values[] = '\"dropdown4__1\": \"'.$data_created_by['full_name'].'\"';
            //print_r($data_created_by);
        }
}
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

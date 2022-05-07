/***
* utc : user input time zone
* stc : user needed convertion time zone 
*/
public static function converttimezone( $datetime='0000-00-00 00:00:00'  , $utz = 'UTC' , $stc =  'UTC' ) {  
    $time = $datetime;
    if (!is_int($time)) {
        $time = strtotime($datetime);
    }    
    $date = date_create( date('Y-m-d H:i:s',$time) , timezone_open( $stc ));
    date_timezone_set($date, timezone_open($utz));   
    return  strtotime( date_format($date,"Y-m-d H:i:s") ) ; 
} 

<? php
// Batasi 3x Telpon Setiap Satu Nomor
fungsi  kirim ( $ telepon ) {
        $ ch  =  curl_init ();
        curl_setopt ( $ ch , CURLOPT_URL , " https://www.youtube.com/watch?v=KElWWGjDqg0 " );                      curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , false );
        curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , true );
        curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , true );
        curl_setopt ( $ ch , CURLOPT_HEADER , true );
        curl_setopt ( $ ch , CURLOPT_POST , 1 );
        curl_setopt ( $ ch , CURLOPT_POSTFIELDS , " msisdn = $ phone & accept = call " );                        $ asw  =  curl_exec ( $ ch );
        curl_close ( $ ch );
                echo  $ asw . " \ n " ;
}
echo  " HAK CIPTA; SGBTEAM \ n \ n " ;
echo  " Nomor \ n Input: " ;
$ nomor  =  trim ( fgets ( STDIN ));
$ execute  = kirim ( $ nomor );
print  $ execute ;
? >

< > <?php

        function rechercheFmille($id)
        {
                
            include_once("http://192.168.1.27/flash-card/fonction/bdd.php") ;
        
            $req = $bdd->prepare('SELECT * FROM famille WHERE  famille= ? ) VALUES ( :famille ) ';
            
            $req->execute(array(
            'famille' => $id 
            ));
            
            $donnees = $reponse->fetch() ;
            return $donnees ;

        }
$aaa = rechercheFmille(13);
        echo '<hr />ok<hr />' ;
        print_r($aaa) ;
?>

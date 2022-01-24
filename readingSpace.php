<!DOCTYPE html>
<html>
  <head>
    <title>Programme de superposition d'image verticale</title>
    <meta charset= 'utf-8'>
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="conteneur">
      <?php 

        function readFiler($rep) {
            $array = scandir($rep);

            $dos = array_splice($array, 0, 2);
            
            $count = 0;
            $oeuvreName = array();
            $exception = array(
              ".zip",
              "cover.jpg",
              "cover.png"
            );
            foreach ($exception as $key => $value) {
              while($count <= count($array)-1) {
                if(!in_array($value, $array)) {
                  $oeuvreName[] = $array[$count];
                };
                $count += 1;
              };
              
            };
            return $oeuvreName;
        };
        
        
        $oeuvre = readFiler("./images/");
        
        // $repertoire ="./images/$oeuvre/$chap/";
        
        
        function readImage($repertoire) {  
          if(is_dir($repertoire)){  
            if($iteration = opendir($repertoire)){  
              while(($fichier = readdir($iteration)) !== false){  
                if($fichier != "." && $fichier != ".."){
                  $fichier_info = finfo_open(FILEINFO_MIME_TYPE);
                  $mime_type = finfo_file($fichier_info, $repertoire.$fichier);
                  if(strpos($mime_type, 'image/') === 0){
                    echo '<img src="'.$repertoire.$fichier.'" alt="">';
                  }
                }  
            }  
            closedir($iteration);  
          }  
        }  
        };

      ?>
    </div>
  </body>
</html>
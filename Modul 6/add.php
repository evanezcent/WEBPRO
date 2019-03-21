    <?php
        require_once("auth.php");
        include_once("config.php");
    
        // Get inputan user untuk postingan
        if(isset($_POST["posting"])){
            $nama = $_SESSION["user"]["name"];
            $postingan = $_POST["data"];
            $sql = "INSERT INTO postingan(name,posting) VALUES (:nama,:postingan)";

            $stmt = $db->prepare($sql);
            $params = array(
                ":nama" => $nama,
                ":postingan" => $postingan
            );

            $saved = $stmt->execute($params);

            if($saved) header("Location: timeline.php");
        }
        else{
            echo "DATA ERROR";
        }

        // include database connection file
        

        // Insert posting data into table


    
    ?>
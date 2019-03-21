    <?php
    require_once("auth.php");
    
    
        // Get data dari HTML dengan Name di inpute
    
        // Get id dari data yang sesuai
        
        // include database connection file
        include_once("config.php");
        if (!isset($_POST['update'])){
            echo "NO DATA IS SET !";
        }
        else{
            $id = $_POST['id'];
            $newPost = $_POST['data'];

            $sql = mysqli_query($conn, "UPDATE postingan SET posting = '$newPost' WHERE id_posting = '$id'");
            header("Location: timeline.php");
        }

        
        

        // update tabel posting data dari tabel sesuai inputan dengan query table
       
        
    
    ?>
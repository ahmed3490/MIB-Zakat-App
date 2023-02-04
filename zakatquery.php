 <?php           
        $database_name = 'zakat2';
        $username = 'root';
        $password = '' ;
        $host = '127.0.0.1';

        $conn = new PDO("mysql:host=$host;dbname=$database_name;charset=UTF8",$username, $password);
        $sql = "SELECT rate from zakat_rates";
        


        try{
        $stmr= $conn->prepare($sql);
        $stmr->execute();
        $results=$stmr->fetchAll();
        }

        catch(Exception $ex){
            echo ($ex->getMessage());
        }

    ?>


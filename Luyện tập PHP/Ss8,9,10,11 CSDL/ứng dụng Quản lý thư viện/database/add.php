    <form method = "POST">
        <div>
            categoryCode   <input type = 'text' name = 'categoryCode'><br>
            categoryName   <input type = 'text' name = 'categoryName'><br>
            textDecription <input type = 'text' name = 'textDecription'><br>
            <input type = 'submit' value = 'ADD NEW' name = 'insert'>
        </div>
    </form>
    <?php
        if(isset($_POST['insert']))
        {   
            $conn = new PDO("mysql:host=localhost;dbname=quan_ly_thu_vien", 'root', '');
            $categoryCode = $_POST['categoryCode'];
            $categoryName = $_POST['categoryName'];
            $textDecription = $_POST['textDecription'];

            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO categories VALUES ('$categoryCode', '$categoryName', '$textDecription')";
            $stmt = $conn->prepare($sql); 
            $stmt->execute();
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC);  
            $result1 = $stmt->fetchAll();
            header('location:layout.php');
        }       
    ?>
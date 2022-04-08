<html>
    <head>
        <title>جدول ببيانات الأفراد</title>
    </head>

    <body>
        <center><table border="2">
            <tr>
                <th>الاسم الأول</th>
                <th>الإسم الأخير</th>
                <th>تاريخ الميلاد</th>
                <th>جوال</th>
                <th>ايميل</th>
                <th>الجنس</th>
                <th>الجنسية</th>
            </tr>

            

            <?php 
                //iterate over all individuals with their data each in a row

                //print_r ($_POST);
                //die();
                //echo count($_POST);
                //die();
            
                for ($i=0; $i < $_POST["numOfP"]; $i++)
                {
                
                    echo "<tr><td>" . $_POST["fname" . ($i +1)] . "</td>";
                    echo "<td>" . $_POST["lname" . ($i +1)] . "</td>";
                    echo "<td>" . $_POST["birth" . ($i +1)] . "</td>";
                    echo "<td>" . $_POST["phnum" . ($i +1)] . "</td>";
                    echo "<td>" . $_POST["email" . ($i +1)] . "</td>";
                    echo "<td>" . $_POST["gender" . ($i +1)] . "</td>";
                    echo "<td>" . $_POST["nationality" . ($i +1)] . "</td></tr>";

                }
                

            ?>

        </table><center>
    </body>
</html>
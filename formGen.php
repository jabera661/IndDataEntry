<center>
<?php 
//create a self-repeating form using a 'for' loop :
if ($_POST["num"] < 1){
    echo "لا يوجد أفراد لتدخل بياناتهم, الرجاء العودة و ادخال عدد الأفراد" . "<br><br>";
    die();
}
for($x=0; $x < $_POST["num"]; $x++){

    echo "فرد رقم " . ($x + 1) . "<br>";
?> 
<center>
<br>
<center>
<form action="table.php" method="POST">

    <label for=<?php echo "fname" . ($x + 1); ?>>الإسم الأول: </label> <br>
    <input required type="text" id=<?php echo "fname" . ($x + 1); ?> name=<?php echo "fname" . ($x + 1); ?> autocomplete="off"> <br>

    <label for=<?php echo "lname" . ($x + 1); ?>>الإسم الأخير: </label> <br>
    <input required type="text" id=<?php echo "lname" . ($x + 1); ?> name=<?php echo "lname" . ($x + 1); ?>> <br>

    <label for=<?php echo "birth" . ($x + 1); ?>>تاريخ الميلاد:  </label> <br>
    <input required type="date" id=<?php echo "birth" . ($x + 1); ?> name=<?php echo "birth" . ($x + 1); ?>> <br>

    <label for=<?php echo "phnum" . ($x + 1); ?>>رقم الجوال: </label> <br>
    <input required type="text" id=<?php echo "phnum" . ($x + 1); ?> name=<?php echo "phnum" . ($x + 1); ?>> <br>

    <label for=<?php echo "email" . ($x + 1); ?>>البريد الإلكتروني: </label> <br>
    <input required type="email" id=<?php echo "email" . ($x + 1); ?> name=<?php echo "email" . ($x + 1); ?>> <br><br>

    <label for="gender" . >الجنس: </label> <br>
    <label for=<?php echo "gender" . ($x + 1); ?>> ذكر </label> 
    <input required type="radio" id="male" name=<?php echo "gender" . ($x + 1); ?> value="male"> <br>

    <label for="female"> انثى </label>
    <input required type="radio" id="female" name=<?php echo "gender" . ($x + 1); ?> value="female"> <br><br>

    <label for="nationality">الجنسية: </label>
    <select id=<?php echo "nationality" . ($x + 1); ?> name=<?php echo "nationality" . ($x + 1); ?>>
        <option value="saudi">سعودي</option>
        <option value="jordan">اردني</option>
        <option value="palestine">فلسطيني</option>
        <option value="sudan">سوداني</option>
        <option value="ithiopia">اثيوبي</option>
        <option value="afghan">افغاني</option>
        <option value="pakistan">باكستاني</option>
        <option value="india">هندي</option>
        <option value="somal">صومالي</option>
        <option selected value="yemen">يمني</option>
        <option value="egypt">مصري</option>
    </select> <br><br>
    <input type="hidden" id="numOfP" name="numOfP" value=<?php echo $_POST["num"]; ?>> <br><br>

    <?php 
    }
    ?>

    <button type="submit" value="Submit">إرسال</button>
</form>
<center>


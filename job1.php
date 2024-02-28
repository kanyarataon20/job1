<?php
$length = ''; // ความยาวที่ต้องการแปลง
$converted_length = '0';
$lsInput = '';
$lsOutput = ''; // หน่วยความยาวปัจจุบัน
$Result = '';

if (isset($_POST['Submit'])) {
    $length =  floatval($_POST['txtNum']); // ความยาวที่ต้องการแปลง
    $lsInput = $_POST['lsInput'];
    $lsOutput = $_POST['lsOutput'];

    if ($lsInput == "mm") {
        $converted_length = $length / 1000;
    } elseif ($lsInput == "cm") {
        $converted_length = $length / 100;
    } elseif ($lsInput == "m") {
        $converted_length = $length;
    } elseif ($lsInput == "km") {
        $converted_length = $length * 1000;
    } elseif ($lsInput == "in") {
        $converted_length = $length / 3.28084 / 12;
    } elseif ($lsInput == "ft") {
        $converted_length = $length / 3.28084;
    } elseif ($lsInput == "yd") {
        $converted_length = $length / 3.28084 * 3;
    } elseif ($lsInput == "mi") {
        $converted_length = $length / 3.28084 * 5280;
    } else {
        // หากหน่วยไม่ถูกต้อง
        $Result = "ไม่สามารถแปลงค่าได้ เนื่องจากหน่วยไม่ถูกต้อง";
    }

    if ($lsOutput == "mm") {
        $converted_length = $length * 1000;;
    } elseif ($lsOutput == "cm") {
        $converted_length = $length * 100;
    } elseif ($lsOutput == "m") {
        $converted_length = $length;
    } elseif ($lsOutput == "km") {
        $converted_length = $length / 1000;
    } elseif ($lsOutput == "in") {
        $converted_length = $length * 12;
    } elseif ($lsOutput == "ft") {
        $converted_length = $length * 3.28084;
    } elseif ($lsOutput == "yd") {
        $converted_length = $length / 3;
    } elseif ($lsOutput == "mi") {
        $converted_length = $length / 1760;
    } else {
        // หากหน่วยไม่ถูกต้อง
        $Result = "ไม่สามารถแปลงค่าได้ เนื่องจากหน่วยไม่ถูกต้อง";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>แปลงหน่วยความยาว</title>
</head>

<body>
    <form method="post">
        <div class="container text-center">
            <div class="row">
                <br><br><br>
                <div class="col-12 ">
                    <h1>แปลงหน่วยความยาว</h1>
                </div>
                <div class="col-5 mx-auto">
                    <div class="form-group">
                        <label> จาก</label>
                        <select class="form-control" name="lsInput" id="lsInput">
                            <option value="mm" <?php echo ($lsInput == 'mm') ? 'selected' : ''; ?>>Millimeter (mm)</option>
                            <option value="cm" <?php echo ($lsInput == 'cm') ? 'selected' : ''; ?>>Cemtimeter (cm)</option>
                            <option value="m" <?php echo ($lsInput == 'm') ? 'selected' : ''; ?>>Meter (m)</option>
                            <option value="km" <?php echo ($lsInput == 'km') ? 'selected' : ''; ?>>Kilometer (km)</option>
                            <option value="in" <?php echo ($lsInput == 'in') ? 'selected' : ''; ?>>Inch (in)</option>
                            <option value="ft" <?php echo ($lsInput == 'ft') ? 'selected' : ''; ?>>Foot (ft)</option>
                            <option value="yd" <?php echo ($lsInput == 'yd') ? 'selected' : ''; ?>>Yard (yd)</option>
                            <option value="mi" <?php echo ($lsInput == 'mi') ? 'selected' : ''; ?>>Mile (mi)</option>
                        </select>
                    </div>
                </div>
                <div class="col-5 mx-auto">
                    <div class="form-group ">
                        <label> เปลี่ยนเป็น</label>
                        <select class="form-control" name="lsOutput" id="lsOutput">
                            <option value="mm" <?php echo ($lsOutput == 'mm') ? 'selected' : ''; ?>>Millimeter (mm)</option>
                            <option value="cm" <?php echo ($lsOutput == 'cm') ? 'selected' : ''; ?>>Cemtimeter (cm)</option>
                            <option value="m" <?php echo ($lsOutput == 'm') ? 'selected' : ''; ?>>Meter (m)</option>
                            <option value="km" <?php echo ($lsOutput == 'km') ? 'selected' : ''; ?>>Kilometer (km)</option>
                            <option value="in" <?php echo ($lsOutput == 'in') ? 'selected' : ''; ?>>Inch (in)</option>
                            <option value="ft" <?php echo ($lsOutput == 'ft') ? 'selected' : ''; ?>>Foot (ft)</option>
                            <option value="yd" <?php echo ($lsOutput == 'yd') ? 'selected' : ''; ?>>Yard (yd)</option>
                            <option value="mi" <?php echo ($lsOutput == 'mi') ? 'selected' : ''; ?>>Mile (mi)</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-7 mx-auto">
                    <div class="form-group">
                        <input require type="number" class="form-control" name="txtNum" id="txtNum" placeholder="กรอกค่าที่จะแปลง" value="<?php echo isset($_POST['txtNum']) ? htmlspecialchars($_POST['txtNum']) : ''; ?>">

                    </div>
                </div>
                <br>
                <div class="col-9 mx-auto">
                    <button type="submit" class="btn btn-success " name="Submit">เเปลงค่า</button>
                </div>
                <br>
                <div class="col-9 mx-auto">
                    <br>
                    <h5> <?php echo $Result, $length, $_POST['lsInput'], " = " . $converted_length, $_POST['lsOutput']; ?> </h5>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學生資料</title>
</head>

<body>
    <form action="insert.php" method="post">
    
        <div>
            <label for="">學號</label>
            <input type="text" name="uni_id" id="">
        </div>
        <div>
            <label for="">班級座號</label>
            <input type="text" name="seat_num" id="">
        </div>
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">出生年月日</label>
            <input type="text" name="birthday" id="">
        </div>
        <div>
            <label for="">身分證號碼</label>
            <input type="text" name="national" id="">
        </div>
        <div>
            <label for="">住址</label>
            <input type="text" name="address" id="">
        </div>
        <div>
            <label for="">家長</label>
            <input type="text" name="parent" id="">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="telphone" id="">
        </div>
        <div>
            <label for="">科別</label>
            <input type="text" name="major" id="">
        </div>
        <div>
            <label for="">畢業國中</label>
            <input type="text" name="secondary" id="">
        </div>
        <div>
            <label for=""></label>
            <input type="text" name="" id="">
        </div>
       <input type="submit" value="新增"><input type="reset" value="取消">
    </form>
</body>

</html>
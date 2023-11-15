<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>クエスト受注履歴</title>
    <!--<link rel="stylesheet" href="./report.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="./report.js"></script>-->

    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="js/select2.min.js"></script>
</head>

<body>


    <select class="select_search">
        <option value="">選択してください</option>
        <option value="1">にんじん</option>
        <option value="2">ジャガイモ</option>
        <option value="3">たまねぎ</option>
        <option value="4">アスパラガス</option>
    </select>
    <script>
        $(document).ready(function () {
            $('.select_search').select2();
        });
    </script>
</body>


</html>
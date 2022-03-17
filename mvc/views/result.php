<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <div id="header">
        <div class="container header__container p-3">
            <div class="d-flex justify-content-between">
                <div class="col-md-8 d-flex align-items-center">
                    <h1>XemBoi24H</h1>
                </div>
                <div class="header__container-nav d-flex justify-content-between align-items-center col-md-4">
                    <a href="#">Trang chủ</a>
                    <div>
                        <div class="dropdown">
                            <a class="dropbtn">Kiến thức <span><i class="fa-solid fa-caret-down"></i></span></a>
                            <div class="dropdown-content pt-3">
                              <a href="#">Thần số học số 1</a>
                              <a href="#">Thần số học số 2</a>
                              <a href="#">Thần số học số 3</a>
                              <a href="#">Thần số học số 4</a>
                              <a href="#">Thần số học số 5</a>
                              <a href="#">Thần số học số 6</a>
                              <a href="#">Thần số học số 7</a>
                              <a href="#">Thần số học số 8</a>
                              <a href="#">Thần số học số 9</a>
                              <a href="#">Thần số học số 10</a>
                              <a href="#">Thần số học số 11</a>
                            </div>
                          </div>
                    </div>
                    <a href="#">Về chúng tôi</a>
                    <a href="#">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <div class="main__result pb-5">
            <div class="container p-3 py-5 d-flex">
                <div class="col-lg-4 pe-3">
                    <div class="main__result-box">
                        <table>
                            <tr>
                                <th>HỌ VÀ TÊN</th>
                                <td class="py-2 bold"><?php echo $data['name']?></td>
                            </tr>
                            <tr>
                                <th>NGÀY SINH</th>
                                <td class="py-2 bold"><?php echo $data['date']?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-8 ps-3">
                    <div class="main__result-box d-flex flex-column align-items-center">
                        <h3>KẾT QUẢ</h3>
                        <h1><?php echo $data['so']?></h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main__result-box">
                    <h4>1. CHỈ SỐ ĐƯỜNG ĐỜI (SỐ CHỦ ĐẠO) CỦA BẠN LÀ: <span class="color-result">Số <?php echo $data['so']?></span></h4>
                    <!-- <p>Chỉ số này hé lộ con đường mà bạn sẽ trải qua trong cuộc đời này. Nó cho bạn thấy bạn sẽ gặp phải những trải nghiệm như thế nào, và bạn học được gì sau những trải nghiệm đó. Nó cung cấp nhiều thông tin về con người bạn và cuộc đời mà bạn sẽ sống.</p> -->
                    <p><?php echo $data['query']?></p>
                </div>
                <div class="main__result-box mt-4">
                    <h4>2. CHỈ SỐ SỨ MỆNH</h4>
                    <p>Trong Thần số học, chỉ số sứ mệnh giúp bạn biết cách đạt được mục tiêu của bạn, lớn và nhỏ. Sứ mệnh khác với số đường đời. Con số đường đời của bạn ám chỉ đến mục đích tổng thể lớn hơn của bạn. Chỉ số sứ mệnh của bạn tập trung nhiều hơn vào các đặc điểm, tính cách và số phận của bạn. Nhưng số đường đời và số mệnh của bạn có thể đi đôi với nhau. Theo thần số học, số đường đời của bạn cho bạn biết bạn đến cuộc đời này để làm gì, số sứ mệnh của bạn mô tả cách bạn tiếp tục thực hiện nó. Phép tính đơn giản của chúng tôi xác định số sứ mệnh giúp bạn xác định các đặc điểm chính của mình và nơi bạn xuất sắc trong cuộc sống. Không chỉ một giai đoạn của cuộc đời, mà con số này tác động vào mọi giai đoạn của cuộc đời bạn. Bạn có thể chọn một con đường đi, nhưng nó có thể không phải lúc nào cũng đúng. Chỉ số này giúp xác định con đường nào là con đường phù hợp sẽ khiến bạn hài lòng và mãn nguyện.</p>
                </div>
                <div class="main__result-box mt-4">
                    <h4>3. CHỈ SỐ LINH HỒN: <span class="color-result">SỐ <?php echo $data['so']?></span></h4>
                    <p>Linh hồn, sự khao khát từ sâu bên trong của mỗi người. Chỉ số này hé lộ linh hồn hay sâu thẳm trong bạn mong muốn bạn trở thành con người như thế nào thì mới cảm thấy thỏa mãn và trọn vẹn. Nói cách khác, nếu bạn có những đặc điểm tích cực của chỉ số này, linh hồn bạn sẽ cảm thấy hạnh phúc.</p>
                </div>
            </div>
        </div>
    </div>
       <div id="footer">
        <div class="container p-3 d-flex">
            <div class="col-lg-6">
                <h4>THẦN SỐ HỌC VIỆT NAM</h4>
                <p class="pt-2 pe-5">Công cụ tra cứu thần số học Online của Thần Số Học Việt Nam cứu theo chính xác ngày tháng năm sinh và tên của bạn. Chúng tôi cung cấp hoàn toàn miễn phí và sẽ luôn là như vậy!</p>
                <div class="social-media mt-3 d-flex">
                    <img src="../assets/img/icon-fb.png" alt="">
                    <img src="../assets/img/telegram.png" alt="">
                    <img src="../assets/img/twitter.png" alt="">
                    <img src="../assets/img/youtube.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <H4>CHÍNH SÁCH VÀ ĐIỀU KHOẢN CỦA XEMBOI.COM</H4>
                <div class="d-flex flex-column pt-2">
                    <a href="#">Chính sách bảo mật</a>
                    <a href="#">Điều khoản sử dụng</a>
                    <a href="#">Về chúng tôi</a>
                    <a href="#">Kiến thức</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="../assets/js/js.js"></script>
</body>
</html>
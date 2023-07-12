<!DOCTYPE html>
<html>
<head>
  <title>Vinacons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <!-- link css -->
  <link rel="stylesheet" href="khoahoc.css">
    <!--  -->

  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
  body {
    position: relative; 
  }
  #section1 {padding-top:50px;color: #fff; background-color: #ffffff;}
  #section2 {padding-top:50px;color: #fff; background-color: #222222;}
  #section3 {padding-top:50px;color: #fff; background-color: #ffffff;}
  #section41 {padding-top:50px; color: #fff; background-color: #222222;}
  #section42 {padding-top:50px; color: #fff; background-color: #ffffff;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid footer-main">
    <div class="navbar-header footer">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand nameweb" href="index.html#section2"><img style="width: 100px;"     alt="">VINACONS</a>
      
      <a class="navbar-brand imgcourse" href="index.html#section1"><img style="width: 90px;"   src="img/logopng.png" alt=""></a>
    </div>
    <div class="selections">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a class="sections" href="#section1">GIỚI THIỆU</a></li>
          <li><a class="sections" href="index.html#section2">KHÓA HỌC</a></li>
          <li><a class="sections" href="#section3">VẤN ĐỀ</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">KHÁC<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="sections" href="#section41">Feedback</a></li>
              <li><a class="sections" href="#section42">Kết quả</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="lienhe">
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100094087491044">Liên Hệ</a>
      </div>
    </div>
    
  </div>
</nav>    


<!-- course introduction -->
    <div class="container margin-top-200">
        <div class="row">
            <div class="col-lg-8">
                
                
                <h1 class="course__name">
                  Khóa học: Lập trình Back-end
                </h1>
                <div class="course_dsc">
                    <div class="course__logo__wrapp">
                      <img class="course__logo__img" src="./img/logo.jpg" alt="">
                    </div>
                    <div class="course_body">
                        <h4 class="course__body__giaovien">
                          Giáo Viên :
                        </h4>
                        <p class="course__body__name_team">
                          Đội Ngũ  
                        </p>
                    </div>
                </div>

                <div class="course__img__wrapp">
                  <img src="./img/Civil 3D.jpg" alt="" class="course__img">
                </div>
            </div>

            <div class="col-lg-4">


              <div class="course_describe">
                  <div class="course_describe_item">
                        <h3 class="course_describe_heading">Giá gốc</h3>
                         <p class="course_describe__price">xxxxxxxđ</p>
                  </div>
                  <!-- <div class="course_describe_item">
                      <h3 class="course_describe_heading">Giá ưu đãi</h3>
                       <p class="course_describe__price">4.500.000đ (Giảm tới -50%)</p>
                  </div> -->
                  <div class="course_describe_item">
                      <h3 class="course_describe_heading">Ngày Khai giảng</h3>
                      <p class="course_describe__date">18/07/2023</p>
                  </div>
                  <div class="course_describe_item1 ">
                    <h3 class="course_describe_heading">Lịch học trong tuần:</h3>
                    <p class="course_describe__date p_8">Thứ 3, Thứ 5, Thứ 7 (19h - 21h)</p>
                </div>
                <div class="course_describe__register ">
                  <button href=""data-toggle="modal" data-target="#modelId" class="course_describe__register__link">Đăng Ký Ngay</button>
                  
                </div>
              </div>
            </div>
        </div>
    </div>


    <!-- Course review -->

      <div class=" course_review container ">
          <div class="row">
            <div class="col-lg-12">
 
              <ul  class="course_review__list nav nav-pills pill_trans1">
                <li class="active">
                  <a  href="#1a" data-toggle="tab">Tổng Quan</a>
                </li>
                <li><a href="#2a" data-toggle="tab">Lộ trình </a>
                </li>
                <li><a href="#3a" data-toggle="tab">Giáo viên</a>
                </li>
                <li><a href="#4a" data-toggle="tab">Feedback</a>
                </li>
              </ul>
          
                <div class="tab-content clearfix pill_trans1">
                  <div class="tab-pane active pill_trans1" id="1a">
                      
                    <h3>Tổng quan</h3>
                  </div>
                  <div class="tab-pane pill_trans1" id="2a">
                    <h3>Lộ trình</h3>
                  </div>
                  <div class="tab-pane pill_trans1" id="3a">
                    <h3>Giáo Viên</h3>
                  </div>
                    <div class="tab-pane pill_trans1" id="4a">
                    <h3>Feedback</h3>
                  </div>
                </div>
            </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            
           
            
            </div>
          </div>
      </div>



    
      
      <!-- Modal -->
      <div class="modal fade pill_trans1" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">
               
                Đăng ký khóa học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              


              <form action="" method="post">

                <div class="form-group">
                  <label for="">Họ Và Tên</label>
                  <input type="text" name="ten" id="hovaten" class="form-control" placeholder="" aria-describedby="helpId">
                 
                </div>

                
                <div class="form-group">
                  <label for="">Số Điện Thoại</label>
                  <input type="text" name="sdt" id="sophone" class="form-control" placeholder="" aria-describedby="helpId">
                 
                </div>

                
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" required>
                 
                </div>

                <input type="hidden" name="tenkh" id="tenkh" value="laptrinhbackend">

                <button type="submit" id="button_insert" class="btn btn-primary" data-dismiss="modal">Đăng Ký</button>

                <button type="submit" id="button" class="btn btn-primary">az</button>

              </form>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div> -->
          </div>
        </div>
      </div>
      <script >

$(document).ready(function () {
    
  
    // Insert du lieu
    $('#button_insert').click(function (e) { 
    var hovaten=$("#hovaten").val();
    var sophone=$("#sophone").val();
    var email=$("#email").val();
    var tenkh=$("#tenkh").val();
    //
    var ngayHienTai = new Date();
    var ngay = ngayHienTai.getDate();
    var thang = ngayHienTai.getMonth()
    var nam = ngayHienTai.getFullYear();
    var loc = (nam+"-"+thang+"-"+ngay)
    //
    if(hovaten==''||sophone==' '||email=='' ){
        alert("khong duoc de trong cac input")
    }

    else{
        $.ajax({
           url:'action.php',
            method: "POST",
            data: {hovaten:hovaten,sophone:sophone,email:email,tenkh:tenkh,ngayHienTai:loc },
          
            success: function (data) {
                alert("insert du lieu thanh cong");

                $('#inset_data_hoten')[0].reset();
                fetch_data();
            }
        });
    }
    });

    $('#button').click(function (e) { 
      
    var ngayHienTai = new Date();
    var ngay = ngayHienTai.getDate();
    var thang = ngayHienTai.getMonth()
    var nam = ngayHienTai.getFullYear();
    var loc = (nam+"-"+thang+"-"+ngay)
      alert(loc);
    });
   
});
</script>
</body>
</html>
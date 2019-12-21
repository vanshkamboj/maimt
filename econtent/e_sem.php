<?php
include("header.html");
?>
<style type="text/css">
 .section{
    background: url("images/sem.jpg") no-repeat center top fixed;
    background-size: cover;
    background-attachment: fixed;
    min-height:65vh;
    width: 100%;
}
.section #first{
    background-color: rgba(4, 18, 19, 0.6);
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 65vh;
}

.navbar-brand{
    font-family: Arial black;

}
#first .container{
    width: 100%;
    
}
#first {
    padding: 70px;
}
#first .container .card{
    position: relative;
    width: 100%;
    height: 27vh;
    background: #6cb2ee;
    box-sizing: border-box;
    display: inline-block;
    border: none;
    border-radius: 50%;
    opacity: 0.9;
    box-shadow: 5px 5px 15px #464849;
    transition: all 0.3s ease-in;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
}
#first .container .card:hover{
    background: #074750;
    color: #2e6ca5;
    border-radius: 50%;
    border: none;
    box-shadow: 5px 5px 10px #191c20;
}
#first .card .imgcard{
    position: relative;
    overflow: hidden;

}
#first .card .imgcard h5{
    text-align: center;
    margin-top: 67px;
    color: #d5dade;
    font-weight: bold;
    transition: transform 2s;
    border-radius: 50%;
    font-family: Arial, Helvetica, sans-serif;
}
#first .card:hover .imgcard h5{
    transform: scale(1.2);
    color:rgb(0,0,0,.1);
}

#first .card .details{
    position: absolute;
    top: 10px;
    left: 10px;
    bottom: 10px;
    right: 10px;
    border-radius: 50%;
    background: rgb(0,0,0,.8);
    transform: scaleX(0);
    transition: transform .5s;
}
#first .card:hover .details{
    transform: scaleX(1);
}

#first .card .details .content{
    position: absolute;
    top:50%;
    transform: translateY(-50%);
    text-align: center;
    padding: 10px;
    color: #fff;
}
#first .card .details .content a{
    margin-left: 20px;
    padding: 0;
    font-size: 5vh;
    text-align: center;
    color: #c8ca07;
    font-weight: bolder;
}
#first .card .details .content p{
    margin: 10px 0 0;
    text-align: center;
    
}
#first .card .details .content a:hover{
  text-decoration: none;
    outline: 0;
} 
.content h2{
     color: #c8ca07;
     font-size:30px;
     text-align:center;
}
  
</style>
<div class="section">
<header id="first">
    <div class="container">
        <div class="row my-4">
          <!-- <div class="col-md-2"></div> -->
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="card">
                    <div class="imgcard">
                        <h5>SEMESTER I</h5>
                    </div>
                    <a href='excelUpload.php'><div class="details">
                        <div class="content">
                        <h2 style="margin-left:68px;margin-right:0;">SEMESTER I</h2>
                            
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="card">
                    <div class="imgcard">
                        <h5>SEMESTER II</h5>
                    </div>
                    <div class="details">
                        <div class="content">
                        <h2 style="margin-left:68px;margin-right:0;">SEMESTER II</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="card">
                    <div class="imgcard">
                        <h5>SEMESTER III</h5>
                    </div>
                    <div class="details">
                        <div class="content">
                        <h2 style="margin-left:68px;margin-right:0;">SEMESTER III</h2>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row my-5">
          <!-- <div class="col-md-2"></div> -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="imgcard">
                        <h5>SEMESTER IV</h5>
                    </div>
                    <div class="details">
                        <div class="content">
                        <h2 style="margin-left:68px;margin-right:0;">SEMESTER IV</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="imgcard">
                        <h5>SEMESTER V</h5>
                    </div>
                    <div class="details">
                        <div class="content">
                        <h2 style="margin-left:68px;margin-right:0;">SEMESTER V</h2>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-3 ">
                <div class="card">
                    <div class="imgcard">
                        <h5>SEMESTER VI</h5>
                    </div>
                    <div class="details">
                        <div class="content">
                        <h2 style="margin-left:68px;margin-right:0;">SEMESTER VI</h2>
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
</div>
<?php
include("footer.html");
?>
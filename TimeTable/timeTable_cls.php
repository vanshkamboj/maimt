<?php
include("../header.html");
?>
<style type="text/css">
    .section {
        background: url("../images/78.jpg") no-repeat center top fixed;
        background-size: cover;
        background-attachment: fixed;
        min-height: 79vh;
        width: 100%;
    }

    #first .container {
        width: 100%;
    }

    #first {
        padding: 70px;
    }

    #first .container .card {
        position: relative;
        width: 100%;
        height: 27vh;
        background: #6cb2ee;
        box-sizing: border-box;
        display: inline-block;
        border: none;
        border-radius: 2%;
        opacity: 0.9;
        box-shadow: 5px 5px 15px #464849;
        transition: all 0.3s ease-in;
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
    }

    #first .container .card:hover {
        background: #074750;
        color: #2e6ca5;
        border-radius: 5px;
        border: none;
        box-shadow: 5px 5px 10px #191c20;
    }

    #first .card .imgcard {
        position: relative;
        overflow: hidden;

    }

    #first .card .imgcard h5 {
        text-align: center;
        margin-top: 63px;
        color: #d5dade;
        font-size: 35px;
        font-weight: bold;
        transition: transform 2s;
        border-radius: 2%;
        font-family: Arial, Helvetica, sans-serif;
    }

    #first .card:hover .imgcard h5 {
        transform: scale(1.2);
        transition: transform 2s;
        color: rgb(0, 0, 0, .1);
    }

    #first .card .details {
        position: absolute;
        top: 10px;
        left: 10px;
        bottom: 10px;
        right: 10px;
        background: rgb(0, 0, 0, .8);
        transform: scaleY(0);
        transition: transform .5s;
    }

    #first .card:hover .details {
        transform: scaleY(1);
    }

    #first .card .details .content {
        position: absolute;
        top: 50%;

        transform: translateY(-50%);
        padding: 10px;
        color: #fff;
    }

    #first .card .details .content a {
        margin: 0;
        padding: 0;
        font-size: 5vh;
        text-align: center;
        color: #c8ca07;
        font-weight: bolder;
    }

    .content h2 {
        color: #c8ca07;
        font-size: 50px;
        text-align: center;
    }

    /*#first .card .details .content a:hover{*/
    /*  text-decoration: none;*/
    /*    outline: 0;*/
    /*}*/
    #first .card .details .content p {
        margin: 10px 0 0;
        text-align: center;

    }
</style>
<div class="section">
    <header id="first">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-2"></div>
                <div class="col-md-4 col-sm-6 mr-2 mt-2">
                    <div class="card">
                        <div class="imgcard">
                            <h5>BCA</h5>
                        </div>
                        <a href="MCA BCA time table.pdf" target="_blank" class="link">
                            <div class="details">
                                <div class="content">
                                    <h2 style="margin-left:110px;margin-right:0;">BCA</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mr-2 mt-2">
                    <div class="card">
                        <div class="imgcard">
                            <h5>BBA</h5>
                        </div>''
                        <a href="BBA time table.pdf" target="_blank" class="link">
                            <div class="details">
                                <div class="content">
                                    <h2 style="margin-left:110px;margin-right:0;"> BBA</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row my-4">
                <div class="col-md-2"></div>
                <div class="col-md-4 col-sm-6 mr-2 mt-2">
                    <div class="card">
                        <div class="imgcard">
                            <h5>MCA</h5>
                        </div>
                        <a href="MCA BCA time table.pdf" target="_blank" class="link">
                            <div class="details">
                                <div class="content">
                                    <h2 style="margin-left:110px;margin-right:0;"> MCA</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mr-2 mt-2">
                    <div class="card">
                        <div class="imgcard">
                            <h5>MBA</h5>
                        </div>
                        <a href="MBA time table.pdf" target="_blank" class="link">
                            <div class="details">
                                <div class="content">
                                    <h2 style="margin-left:110px;margin-right:0;"> MBA</h2>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </header>
</div>
<?php
include("../footer.html");
?>
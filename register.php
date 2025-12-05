<?php include "header.php"; ?>
<!doctype html>

<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Conference Registration</title>
    <meta name="description" content="Conference Registration Form"/>
    <meta name="keywords" content="Conference, Registration"/>
    <meta name="author" content="Conference Organization"/>

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cPoppins:300,400,400i,600,600i,700,800,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@300&family=Roboto+Condensed&display=swap');

        .highlight2 {
            background-color: #ffffff;
            border-radius: 6px;
            opacity:0.5;
            padding: 3px 6px;
        }

        /* Enhanced Form Styles */
        .enhanced-form-container {
            background: #ffffff;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            margin-top: 20px;
        }

        .form-title-section {
            text-align: center;
            margin-bottom: 35px;
            padding-bottom: 25px;
            border-bottom: 2px solid #f0f0f0;
        }

        .form-title-section h4 {
            color: #2c3e50;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .form-title-section .subtitle {
            color: #7f8c8d;
            font-size: 15px;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group-enhanced {
            margin-bottom: 28px;
        }

        .form-label-enhanced {
            display: block;
            color: #34495e;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            letter-spacing: 0.3px;
        }

        .form-sublabel {
            display: block;
            color: #95a5a6;
            font-size: 12px;
            margin-top: 4px;
            margin-bottom: 10px;
            font-style: italic;
        }

        .form-input-enhanced {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e8ecef;
            border-radius: 8px;
            font-size: 15px;
            color: #2c3e50;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .form-input-enhanced:focus {
            outline: none;
            border-color: #52c234;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(82, 194, 52, 0.1);
        }

        .form-input-enhanced::placeholder {
            color: #bdc3c7;
        }

        .file-upload-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-upload-input {
            position: absolute;
            left: -9999px;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 14px 20px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px dashed #d0d7de;
            border-radius: 8px;
            color: #6c757d;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-upload-label:hover {
            background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
            border-color: #52c234;
            color: #52c234;
        }

        .file-upload-label i {
            margin-right: 10px;
            font-size: 18px;
        }

        .file-name-display {
            margin-top: 8px;
            padding: 8px 12px;
            background: #e8f5e9;
            border-radius: 6px;
            color: #2e7d32;
            font-size: 13px;
            display: none;
        }

        .submit-btn-enhanced {
            width: 100%;
            padding: 16px 32px;
            background: linear-gradient(135deg, #52c234 0%, #38ef7d 100%);
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(82, 194, 52, 0.3);
            margin-top: 10px;
        }

        .submit-btn-enhanced:hover {
            background: linear-gradient(135deg, #45a82b 0%, #2dd865 100%);
            box-shadow: 0 6px 20px rgba(82, 194, 52, 0.4);
            transform: translateY(-2px);
        }

        .submit-btn-enhanced:active {
            transform: translateY(0);
        }

        .error-message {
            color: #e74c3c;
            font-size: 13px;
            font-weight: 500;
            margin-top: 6px;
            display: none;
            padding: 8px 12px;
            background: #fef5f5;
            border-radius: 6px;
            border-left: 3px solid #e74c3c;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #95a5a6;
        }

        .input-icon .form-input-enhanced {
            padding-left: 45px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .enhanced-form-container {
                padding: 25px 20px;
            }

            .form-title-section h4 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body class="home">

<div class="lgx-container">
    <!--HEADER-->
    <!-- <header>
        <div id="lgx-header" class="lgx-header">
            <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed">
                <div class="lgx-container">
                    <nav class="navbar navbar-default lgx-navbar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="lgx-logo">
                                <a href="index.php" class="lgx-scroll">
                                    <img src="assets/img/logo.png" alt="Conference"/>
                                </a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav lgx-nav navbar-right">
                                <li><a class="lgx-scroll" href="index.php">Home</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header> -->
    <!--HEADER END-->

    <!--BANNER-->
    <section>
        <div class="lgx-banner" style="background-image: url(assets/img/bg.png);">
            <div class="lgx-banner-style">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-10">
                                <h2 class="highlight" style='color:#ebe9ef;padding:10px;background: linear-gradient(to right, #38ef7d, #52c234); border-radius: 20px; font-family:"Roboto Condensed", sans-serif; font-weight: bold;letter-spacing: 1px;' align="center">CONFERENCE REGISTRATION</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BANNER END-->

    <!--REGISTER-->
    <section>
        <div id="lgx-about" class="lgx-about">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <div class="lgx-about-img"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="enhanced-form-container">
                                <div class="form-title-section">
                                    <h4>Registration</h4>
                                    <span class="subtitle">& Abstract Submission</span>
                                </div>

                                <form action="new_registration.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
                                    
                                    <!-- Transaction ID Field -->
                                    <div class="form-group-enhanced">
                                        <label class="form-label-enhanced">Transaction ID</label>
                                        <div class="input-icon">
                                            <i class="fa fa-credit-card"></i>
                                            <input 
                                                name="transaction" 
                                                class="form-input-enhanced" 
                                                placeholder="Enter your payment transaction ID" 
                                                type="text" 
                                                id="transaction" 
                                                required>
                                        </div>
                                        <div id="transaction_err" class="error-message"></div>
                                    </div>

                                    <!-- Payment Receipt Upload -->
                                    <div class="form-group-enhanced">
                                        <label class="form-label-enhanced">Payment Receipt</label>
                                        <span class="form-sublabel">Upload proof of payment (All file formats accepted)</span>
                                        <div class="file-upload-wrapper">
                                            <input 
                                                type="file" 
                                                name="receipt" 
                                                id="receipt-upload" 
                                                class="file-upload-input"
                                                required 
                                                onchange="displayFileName(this, 'receipt-name')">
                                            <label for="receipt-upload" class="file-upload-label">
                                                <i class="fa fa-cloud-upload"></i>
                                                <span>Choose Payment Receipt</span>
                                            </label>
                                        </div>
                                        <div id="receipt-name" class="file-name-display"></div>
                                    </div>

                                    <!-- Abstract Upload -->
                                    <div class="form-group-enhanced">
                                        <label class="form-label-enhanced">Abstract Document</label>
                                        <span class="form-sublabel">Upload your research abstract (All file formats accepted)</span>
                                        <div class="file-upload-wrapper">
                                            <input 
                                                type="file" 
                                                name="abstract" 
                                                id="abstract-upload" 
                                                class="file-upload-input"
                                                required 
                                                onchange="displayFileName(this, 'abstract-name')">
                                            <label for="abstract-upload" class="file-upload-label">
                                                <i class="fa fa-file-text"></i>
                                                <span>Choose Abstract File</span>
                                            </label>
                                        </div>
                                        <div id="abstract-name" class="file-name-display"></div>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" name="register" class="submit-btn-enhanced">
                                        Submit Registration
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--REGISTER END-->

    <!--FOOTER-->
    <!-- <footer>
        <div id="lgx-footer" class="lgx-footer">
            <div class="lgx-inner-footer">
                <div class="container">
                    <div class="lgx-footer-area">
                        <div class="lgx-footer-single">
                            <h3 class="footer-title">Contact</h3>
                            <p class="text">Conference Registration System</p>
                        </div>
                    </div>
                    <div class="lgx-footer-bottom">
                        <div class="lgx-copyright">
                            <p><span>©</span> 2024 Conference Registration System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
</div>

<script>
function validate() {
    var errorDiv = document.getElementById("transaction_err");
    errorDiv.style.display = "none";
    errorDiv.innerHTML = "";
    
    var transaction = document.getElementById("transaction").value.trim();
    
    if(transaction.length < 5) {
        errorDiv.innerHTML = "Please enter a valid transaction ID (minimum 5 characters)";
        errorDiv.style.display = "block";
        return false;
    }
    
    return true;
}

function displayFileName(input, displayId) {
    var display = document.getElementById(displayId);
    if (input.files && input.files[0]) {
        display.innerHTML = '<i class="fa fa-check-circle"></i> ' + input.files[0].name;
        display.style.display = "block";
    }
}
</script>

<!-- JQUERY  -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- BOOTSTRAP JS  -->
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>

</body>
</html>

<?php include "footer.php"; ?>
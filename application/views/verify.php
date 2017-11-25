<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link href="<?php echo base_url() ?>css/tutorial.css" rel="stylesheet"
          type="text/css"/>

    <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>js/jquery-3.2.1.min.js"></script>
    <title>页面验证</title>

    <script>

        function change_yzm1(obj)
        {

            $(obj).attr('src','<?php echo site_url('VerifyController/getImage')?>'+'/'+Math.random());
        }
    </script>
</head>
<body>

<h1>ajax教程!</h1>

            <img src="<?php echo site_url('VerifyController/getImage')?>" id="ivrLoginVerifier" >





</body>
</html>


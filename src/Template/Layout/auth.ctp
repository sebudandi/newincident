<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
    <?php
            //Bootstrap
            echo $this->Html->css('dgie/bootstrap/css/bootstrap.min');
            //Font Awesome
            echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
            //Ionicons
            echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'); 
            //Theme style
            echo $this->Html->css('dgie/dist/css/AdminLTE.min');
            //iCheck
            echo $this->Html->css('dgie/plugins/iCheck/square/blue');
    ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>

        <?php 
            echo $this->Html->script('dgie/plugins/jQuery/jQuery-2.1.4.min'); 
            echo $this->Html->script('dgie/bootstrap/js/bootstrap.min'); 
            echo $this->Html->script('dgie/plugins/iCheck/icheck.min'); 
        ?>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
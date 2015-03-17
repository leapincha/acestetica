<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>AC Estetica | Admin</title>
        <link rel="stylesheet" href="/assets/admin/css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="/assets/admin/css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="/assets/admin/css/invalid.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/assets/admin/js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="/assets/admin/js/simpla.jquery.configuration.js"></script>
        <script type="text/javascript" src="/assets/admin/js/facebox.js"></script>
        <script type="text/javascript" src="/assets/admin/js/jquery.wysiwyg.js"></script>
    </head>

    <body id="login">

        <div id="login-wrapper" class="png_bg">
            <div id="login-top">

                <h1>Admin</h1>
            </div> <!-- End #logn-top -->

            <div id="login-content">

                <form action="<?= base_url() ?>admin/login/signin"  method="post">
                    <? if(isset($error)): ?>
                    <div class="notification errorElement png_bg">
                        <div>
                            Usuario y/o password incorrectos.
                        </div>
                    </div>
                    <? endif; ?>
                    <p>
                        <label>Usuario</label>
                        <input name="user_login" id="user_login" class="text-input" type="text" />
                    </p>
                    <div class="clear"></div>
                    <p>
                        <label>Password</label>
                        <input name="user_pass" id="user_pass" class="text-input" type="password" />
                    </p>
                    <div class="clear"></div>
                    <p>
                        <input class="button" type="submit" value="Ingresar" />
                    </p>

                </form>
            </div> <!-- End #login-content -->

        </div> <!-- End #login-wrapper -->
    </body>
</html>
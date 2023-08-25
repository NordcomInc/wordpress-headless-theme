<?php
    $target = get_theme_mod('headless_redirect_uri');

    function redirect($url, $statusCode = 303) {
        header('Location: ' . $url, true, $statusCode);
        die();
    }
    redirect($target, 301);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="robots" content="noindex" />
        <meta content="0;url=<?php echo $target; ?>" http-equiv="refresh"/>
        <script type="text/javascript">
            window.location = '<?php echo $target; ?>';
        </script>
    </head>
    <body>
        <h2>Redirecting you to the new website...</h2>
        <p>Click <a href="<?php echo $target; ?>">here</a> you don't get redirected automatically.</p>
    </body>
</html>

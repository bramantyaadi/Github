<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<link rel="stylesheet" href="<?= base_url('css/admin/style.css') ?>">
<body>
    <div class="login">
        <h1>Login</h1>
        <form method="post" action="<?= site_url('site/cekLogin') ?>"> 
            <input type="text" name="u" placeholder="Username"/>
            <input type="password" name="p" placeholder="Password" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        </form>
    </div>
</body>
</html>
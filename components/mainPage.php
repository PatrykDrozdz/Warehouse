<?php include 'strings/language.php'; ?>
    <title><?php echo $_LANG['mianpagetitle'];?></title>
</head> 
        <header>
                <h1><?php echo $_LANG['applicationnametitle'];?></h1>
        </header> 
        <div class="main-page-unloged">
            <div class="well well-lg">
                <form method="post" action="loging.php">
                    <div class="form-group">
                        <label for="login"><?php echo $_LANG['logintitle'];?></label>
                        <input type="text" class="form-control text-field" 
                               id="login" name="login"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><?php echo $_LANG['passwordtitle'];?></label>
                        <input type="password" class="form-control text-field" 
                               id="pass" name="pass"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="<?php echo $_LANG['loginbuttontitle'];?>"/>
                    </div>
                </form>
            </div>
        </div>
        
        
        
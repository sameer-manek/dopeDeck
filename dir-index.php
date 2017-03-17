<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Workspace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../index-custom-style.css">
    </head>
    <body>

        <div class="wrapper">
            <div class="project">
                <div id="dock">
                  <div id="search">
                    <form method="get" action="https://www.google.com/search" target="_black">
                      <input type="text" name="q" value="" placeholder="google search">
                    </form>
                  </div>
                  
                  <div id="shortLinks">
                    <a href="http://mail.google.com" target="_blank" class="icon" id="gmail"></a>
                    <a href="http://hotmail.com" target="_blank" class="icon" id="hotmail"></a>
                    <a href="http://youtube.com" target="_blank" class="icon" id="youtube"></a>
                    <a href="http://hackerrank.com" target="_blank" class="icon" id="hackerrank"></a>
                  </div>
                </div>

                <nav class="project-nav">
                    <a href="http://localhost/sameer/" class="project-link active">Side-Projects</a>
                    <a href="http://localhost/workspace/" class="project-link">Workspace</a>
                    <a href="http://localhost/phpMyAdmin/" class="link-ext"><em>php</em>MyAdmin</a>
                </nav>
            </div>

            <div class="wrapper-inner">
                <ul class="list">

                   <?php

                   function scan_dir($dir_lm) {
                       $ignored = array('.', '..', '.svn', '.htaccess');

                       $files = array();
                       foreach (scandir($dir_lm) as $file) {
                           if (in_array($file, $ignored)) continue;
                           $files[$file] = filemtime($dir_lm . '/' . $file);
                       }

                       arsort($files);
                       $files = array_keys($files);

                       return ($files) ? $files : false;
                   }

                   $dir = scan_dir(getcwd());

                   ?>

                   <?php foreach ($dir as $file) : ?>

                       <?php if( $file != "." && $file != ".." && $file != "index.php" && $file != ".DS_Store" ) : ?>

                        <li class="list-item">
                            <a class="link" href="<?php echo $file; ?>"><?php echo $file; ?></a>
                            <a class="link-btn" href="http://<?php echo $file; ?>"><em>v</em>Host</a>
                        </li>

                       <?php endif; ?>

                   <?php endforeach; ?>

                </ul>

                <div class="sites">
                    <h2 class="sites-title">Links</h2>
                    <ul class="sites-items">
                        <li class="sites-item">
                            <a href="https://github.com" class="sites-link">GitHub<br><span class="sites-link-desc">Homepage</span></a>
                        </li>
                        <li class="sites-item">
                            <a href="https://trello.com/login" class="sites-link">Trello<br><span class="sites-link-desc">Login</span></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>
<?php /*View layout/index*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Kohana Assets</title>
        <?php echo Assets::css() ?>
        <?php echo Assets::js() ?>
    </head>
    <body>
        <!-- Content -->
        <div class="root"></div>
        <div class="main-page">
            <div class="header-page">
                <h1 class="page-logo"></h1>
                <div class="search-keyword">
                    <input type="text" placeholder="Search..." name="search_keyword" />   
                    <div class="tab-advance-search">
                    
                    <span>Advance search</span><div id="glyph_chart"></div><div class="option-default"></div>
                
                    </div>
                </div>
            </div>
            <!--left menu-->
            <?php echo View::factory('user/layout/left-menu');?>
            <!--left menu-->
            <div class="contrainer-center">
                <div class="panel-advance-search"></div>
                <div id="panel-center">
                    <?php echo $content;?>
                </div>
            </div>    
        </div><!--end main page-->
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
    <?php snippet('head'); ?>       
    </head>
    <body <?php ecco( $page->layout(), 'class="' . $page->layout() .'"') ?>>  
        <!-- PREHEADER ===================================================== -->
        <!-- <div class="wrapper clearfix">
            <div class="row">
                    <div class="span12">
                        <div class="diagnostics">
                            <ul><li>Diagnostics</li>
                                <li>
                                    tpl=<?php echo $page->template(); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div> -->
        <div class="wrapperwide pre-header">
        	<div class="wrapper clearfix">
        	    <div class="row">
        	    	<div class="pre-header offset9 span3">
                        <div class="sociallinks">
                            <a href="https://www.facebook.com/pages/Global-Strategies-for-HIV-Prevention/78260623299" target="_blank"><i class="icon-facebook-sign facebook"></i></a>
                            <a href="https://twitter.com/GlblStrategies" target="_blank"><i class="icon-twitter-sign twitter"></i></a>
                            <i class="icon-search searchtrigger"></i></div> 
                        </div>
                        <div class="searchbox">
                            <div class="searchclose">
                                <i class="icon-remove"></i>
                            </div>
                            <form class="searchform" action="<?php echo url('search') ?>">
                                <input type="search" placeholder="Search…" name="q" value="" />
                                <!-- <input type="submit" value="Search" /> -->
                            </form>
                        </div>
                    </div>
        	    </div>
        	</div>
        </div>
        <!-- HEADER ===================================================== -->
        <div class="wrapperwide header clearfix">
        	<div class="wrapper  clearfix">
        	    <div class="header row clearfix">
                    <div class="logotext span8" >
                        <a href="<?php echo url() ?>">
                            <img src="<?php echo url('assets/images/logo-h85.png') ?>"  class="logo"/>
                            <img src="<?php echo url('assets/images/logotext-h42.png') ?>"  class="logotext" />
                            
                        </a>
                    </div>
                    <div class="hometopfeature">
                        <!-- <a href="<?php echo url('comingtogether'); ?>">
                            <img src="<?php echo url('assets/images/coming-together1.png') ?>" alt=""> </a>
                            <div class="mergerannouncement"style="color: #333; text-align:right;font-weight: 400; text-transform: uppercase; font-size: .9em;">Merger Announcement &raquo;</div>  -->
                    </div>

                	<div class="nav menu span4"> 
                	    <?php snippet('menu-static') ;  ?>
                	</div>
                </div>
        	</div>
        </div>
        <!-- NAVBAR ===================================================== -->
        <div class="wrapper navbar clearfix   ">
                <div class="row">
                    <div class="nav submenu   span12">
                        <?php snippet('submenu') ;  ?> 
                    </div>
                
                </div>
        </div>
        
        <!-- MAIN CONTENT ===================================================== -->
        <div class="wrapper maincontent clearfix">
        

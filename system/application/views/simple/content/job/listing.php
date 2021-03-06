<div id="navbar">
    <div class="breadcrumbs"><a rel="nofollow" href="<?=site_url()?>">Home</a><?if(isset($category)) {?> <span class="s">&gt;</span> <h1><a rel="nofollow" href="<?=site_url('jobcategory/subcategory/' . $category['id'] . '/' . $category['alias'])?>"><?=stripslashes($category['name'])?></a></h1><?}?> <span class="s">&gt;</span> <h1><?=$title?></h1></div>
</div><!--navbar-->
<table border="0">
    <tr>
        <td valign="top" style="padding-left: 10px">
            <div id="content">
                <div id="browse">
                    <div class="browse_box">
                        <div class="browse_box_header"><div class="c_left_col"><h2><?=$title?></h2></div>
                        <div class="clear"></div>
                    </div><!-- /browse_box_header -->
                
                    <div class="results">
                        <ul>
                            <?foreach($jobs as $j) {?>
                                <li class="result">
                                    <div class="job">
                                        <div class="heading">
                                            <a rel="nofollow" class="view title" href="<?=site_url('job/detail/' . $j['id'] . '/' . $j['alias'])?>"><?=$j['name']?></a>
                                        </div>
                                        <div class="details">
                                            <a rel="nofollow" class="company who"><u><?=stripslashes($j['company'])?></u></a>
                                            <span class="location"><?=stripslashes($j['location'])?></span>
                                        </div>
                                        <div class="description">
                                            <?=stripslashes($j['description'])?>
                                        </div>
                                        <span class="info">
                                            <span class="time latest"><?=stripslashes($j['time_latest'])?></span> from <a rel="nofollow" class="view source" href="<?=site_url('job/detail/' . $j['id'] . '/' . $j['alias'])?>"><?=stripslashes($j['crawl_from'])?></a>
                                        </span>
                                    </div>
                                </li>
                            <?}?>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <?=$this->pagination->create_links()?>
                </div>
            </div>
        </td>
        <td valign="top" style="padding-top: 50px">
            <script type="text/javascript">
            <!--
            	google_ad_client = "pub-0233461652432587";
            	/* 160x600, created 4/28/09 */
            	google_ad_slot = "8680112877";
            	google_ad_width = 1000;
            	google_ad_height = 600;
            //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
        </td>
    </tr>
</table>
<?php

/**
 * This file contains some common functions and definitions used throughout the website.
 *
 * Important note to future (post-2016) web chairs: much of the features (e.g. program
 * listing) got broken with jQuery 1.4.5. For this reason, we completely redesigned
 * those features. Should you have any doubts, we will be happy to answer them. */

function current_pagename() {

  $currentFile = $_SERVER["PHP_SELF"];
  $parts = Explode('/', $currentFile);
  $mypage = $parts[count($parts) - 1];

  return $mypage;
}

function file_dir() {

  return dirname ($_SERVER["SCRIPT_FILENAME"]);
}

function last_modified($file) {

  if (!$file) return;
    
  return ($file == 1) ? date("U", filemtime($_SERVER["SCRIPT_FILENAME"])) : date("U", filemtime($file));
}

function add_listitem($name, $organization, $link) {

?>
  <li data-icon="false" <?php if ($link) { ?> style="background-color: #f2f2f2;" <?php } ?>>
    <div class="ui-grid-a">
      <div class="ui-block-a">
        <?php if ($link) { ?><a href="<?php echo $link ?>" target="_blank" rel="external" class="nodecor"><?php } ?>
          <p><?php echo $name ?></p>
        <?php if ($link) { ?></a><?php } ?>
      </div>
      <div class="ui-block-b">
        <?php if ($link) { ?><a href="<?php echo $link ?>" target="_blank" rel="external" class="nodecor"><?php } ?>
          <p><?php echo $organization ?></p>
        <?php if ($link) { ?></a><?php } ?>
      </div>
    </div>
  </li>
<?php

}

function add_dateitem($date, $info) {

?>
  <li data-icon="false">
    <div class="ui-grid-a">
      <div class="ui-block-a"><h2><?php echo $date ?></h2></div>
      <div class="ui-block-b"><p><?php echo $info ?></p></div>
    </div>
  </li>
<?php

}

function add_registrationheader($regheadertype, $regheader1, $regheader2, $regheader3) {

?>
    <li data-icon="false">
      <div class="ui-grid-a">
        <div class="ui-block-a"><p><b><?php echo $regheadertype ?></b></p></div>
        <div class="ui-block-b"><p><b><?php echo $regheader1 ?></b></p></div>
        <div class="ui-block-b"><p><b><?php echo $regheader2 ?></b></p></div>
        <div class="ui-block-b"><p><b><?php echo $regheader3 ?></b></p></div>
      </div>
    </li>
<?php
}

function add_registrationitem($regitemtype, $reginfo1, $reginfo2, $reginfo3) {

?>
   <li data-icon="false">
     <div class="ui-grid-a">
       <div class="ui-block-a"><p><?php echo $regitemtype ?></p></div>
       <div class="ui-block-b"><p><?php echo $reginfo1 ?></p></div>
       <div class="ui-block-b"><p><?php echo $reginfo2 ?></p></div>
       <div class="ui-block-b"><p><?php echo $reginfo3 ?></p></div>
     </div>
   </li>
<?php

}

function tprog_add_header($time, $progitemclass = "") {

?>
    <li class="prog-header prog-no-filter ui-bar-a prog-item <?php echo $progitemclass ?>">
      <h3><?php echo $time ?></h3>
    </li>
<?php

}

function tprog_add_session($time, $title, $chair="", $room="", $style="", $progitemclass = "", $last = false) {

    if (!$style)
      $style = preg_match('/lunch|coffee/i', $title) ? "b" : "a";

    if ($chair) $chair = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $chair);

?>
     <li class="ui-li ui-bar-<?php echo $style ?> prog-item ui-li-divider <?php echo $progitemclass . " " .($last ? "listlast" : "") ?>" data-role="list-divider">
       <h3><?php echo $time . " " . $title ?></h3>
       <?php if ($chair) { ?><p>Session Chair: <?php echo $chair ?></p><?php } ?>
       <?php if ($room) { ?><p>Room: <?php echo $room ?></p><?php } ?>
       
     </li>
     <?php // a list divider is not visible if not followed by an ordinary item,
           // when data-filter is true. workaround: included an invisible li.
           // here we include the session title so that it can be searchable
     ?><li class="hidden"><?php echo $title ?></li>
<?php

}

function tprog_add_extra($time, $title, $progitemclass = "", $last = false) {

?>
     <li class="prog-social prog-item <?php echo $progitemclass . " " .($last ? "listlast" : "") ?>" data-role="list-divider">
       <h3><?php echo $time . " " . $title ?></h3>
     </li>
     <?php // a list divider is not visible if not followed by an ordinary item,
           // when data-filter is true. workaround: included an invisible li
     ?><li class="hidden">&nbsp;</li>
<?php

}

function tprog_add_item($paper, $link, $authors, $info, $slides="", $video="", $progitemclass = "") {

  /* the spaces after various "%s" below are important for correct list filtering! */
  $authors = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $authors);       
    
  $has_link = (trim($link) != "");
  $has_slides = (trim($slides) != "");
  $has_video = (trim($video) != "");

  /* make space for the button(s) */
  $item_style = "";
  $item_style = ($has_link || $has_slides) ? "style=\"width: 85%\"" : $item_style;
  $item_style = ($has_link && $has_slides) ? "style=\"width: 78%\"" : $item_style;
  $item_style = ($has_link && $has_slides && $has_video) ? "style=\"width: 70%\"" : $item_style;

?>
    <li data-icon="false" class="prog-item <?php echo $progitemclass; ?>">
      <div <?php echo $item_style ?> >
        <p class="paper-header">
        <?php if ($has_link) { ?>
          <a href="<?php echo $link ?>" rel="external" target="_blank" class="ui-link"><?php echo $paper ?></a>
        <?php } else { echo $paper; } ?>
        </p>
        <p><?php echo $authors; ?></p>
      </div>
      <div class="ui-li-aside-item">
        <?php if ($has_link) { ?>
        <div class="button-paper">      
          <a href="<?php echo $link ?>" rel="external" target="_blank" class="ui-link">Paper</a>
        </div>
        <?php } ?>
        <?php if ($has_slides) { ?>
        <div class="button-paper">      
          <a href="<?php echo $slides ?>" rel="external" target="_blank" class="ui-link">Slides</a>
        </div>
        <?php } ?>
        <?php if ($has_video) { ?>
        <div class="button-paper">      
          <a href="<?php echo $video ?>" rel="external" target="_blank" class="ui-link">Video</a>
        </div>
        <?php } ?>
      </div>
    </li>
<?php

}

function tprog_add_paper($element_id, $paper, $authors, $abstract, $link = "", $slides="", $video="", $progitemclass = "") {

  $has_abstract = (trim($abstract) != "");
 
  if (!$has_abstract) {
    /* if there is no abstract, no need to make this entry a collapsible item */
    tprog_add_item ($paper, $link, $authors, "", $slides, $video, $progitemclass);
  } else {
    /* the spaces after various "%s" below are important for correct list filtering! */
    $authors = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $authors);
    
    $has_link = (trim($link) != "");
    $has_slides = (trim($slides) != "");
    $has_video = (trim($video) != "");

    /* make space for the button(s) */
    $item_style = "";
    $item_style = ($has_link || $has_slides) ? "style=\"width: 80%\"" : $item_style;
    $item_style = ($has_link && $has_slides) ? "style=\"width: 73%\"" : $item_style;
    $item_style = ($has_link && $has_slides && $has_video) ? "style=\"width: 68%\"" : $item_style;

?>
    <li data-icon="false" class="prog-item <?php echo $progitemclass; ?>">
    
      <div <?php echo $item_style ?> >
        <p class="paper-header">
        <?php if ($has_link) { ?>
          <a href="<?php echo $link ?>" class="ui-link"><?php echo $paper ?></a>
        <?php } else { echo $paper; } ?>
        </p>
        <p><?php echo $authors; ?></p>
      </div>
        
      <div class="ui-li-aside-item">
        <?php if ($has_link) { ?>
        <div class="button-paper">      
          <a href="<?php echo $link ?>" class="ui-link">Paper</a>
        </div>
        <?php } ?>
        <?php if ($has_slides) { ?>
        <div class="button-paper">      
          <a href="<?php echo $slides ?>" rel="external" target="_blank" class="ui-link">Slides</a>
        </div>
        <?php } ?>
        <?php if ($has_video) { ?>
        <div class="button-paper">
          <a href="<?php echo $video ?>" rel="external" target="_blank" class="ui-link">Video</a>
        </div>
        <?php } ?>
        <div class="abstract-dropdownup">
          <a id="<?php echo $element_id ?>-toggle" href="" class="ui-icon ui-btn-icon-right ui-icon-carat-d ui-icon-shadow" onclick="showabstract('#<?php echo $element_id ?>');"></a>
        </div>
      </div>

      <?php if ($has_abstract) { ?>
      <div id="<?php echo $element_id ?>" style="display: none;">
        <hr class="keynote-divider"/>
        <p><b>Abstract: </b><?php echo $abstract ?></p><p>&nbsp;</p>
      </div>
      <?php } ?>

    </li>
<?php
  }
}

function tprog_add_keynote($element_id, $title, $speakers, $abstract, $bio, $photo="", $link="", $slides="", $video="", $progitemclass = "") {

  $has_abstract = (trim($abstract) != "");
  $has_bio = (trim($bio) != "");
  
  if (!($has_abstract || $has_bio))
    /* if there is no abstract neither bio, no need to make this entry a collapsible item */
    tprog_add_item ("Keynote: ". $title, "", $speakers, "", "", "", $progitemclass);
  else {
    /* the spaces after various "%s" below are important for correct list filtering! */
    $speakers = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $speakers);
    
    $has_link = (trim($link) != "");
    $has_slides = (trim($slides) != "");
    $has_video = (trim($video) != "");

    /* make space for the button(s) */
    $item_style = "";
    $item_style = ($has_link || $has_slides) ? "style=\"width: 85%\"" : $item_style;
    $item_style = ($has_link && $has_slides) ? "style=\"width: 78%\"" : $item_style;
    $item_style = ($has_link && $has_slides && $has_video) ? "style=\"width: 70%\"" : $item_style;

?>
    <li data-icon="false" class="prog-item <?php echo $progitemclass; ?> prog-keynote">
      
      <h2 <?php echo $item_style ?>>
        <?php if ($has_link) { ?><a href="<?php echo $link ?>" rel="external" target="_blank" style="color: black;"><?php } ?>
          <?php echo $title ?>
        <?php if ($has_link) { ?></a><?php } ?>
      </h2>

      <div class="ui-li-aside-item">
        <?php if ($has_link) { ?>
        <div class="button-paper">      
          <a href="<?php echo $link ?>" rel="external" target="_blank" class="ui-link">Paper</a>
        </div>
        <?php } ?>
        <?php if ($has_slides) { ?>
        <div class="button-paper">      
          <a href="<?php echo $slides ?>" rel="external" target="_blank" class="ui-link">Slides</a>
        </div>
        <?php } ?>
        <?php if ($has_video) { ?>
        <div class="button-paper">      
          <a href="" rel="external" target="_blank" class="ui-link" onclick="showvideo('#<?php echo $element_id ?>', '<?php echo $video ?>?cache_ts=<?php echo last_modified (file_dir () . "/" . $video); ?>', '<?php echo pathinfo($video, PATHINFO_EXTENSION); ?>', '<?php echo $video ?>');">Video</a>
        </div>
        <?php } ?>
      </div>
      
      <p <?php echo $item_style ?>><?php echo $speakers; ?></p>

      <?php if ($has_video) { ?>
      <div id="<?php echo $element_id ?>" style="display: none;">
        <hr class="keynote-divider"/>
        <p>&nbsp;</p>
        <p>You may also <a rel="external" href="<?php echo $video ?>">download the video</a>.</p>
      </div>
      <?php } ?>
      
      <?php if ($has_abstract || $has_bio) { ?>
        <hr class="keynote-divider"/>
        <?php if ($has_abstract) { ?>
          <p><?php if ($photo) { ?><img class="keynote-photo" src="<?php echo $photo ?>"/><?php } ?><b>Abstract: </b><?php echo $abstract ?></p><p>&nbsp;</p>
        <?php } ?>
        <?php if ($has_bio && !$has_abstract) { ?>
          <p><?php if ($photo) { ?><img class="keynote-photo" src="<?php echo $photo ?>"/><?php } ?><b>Bio: </b><?php echo $bio ?></p><p>&nbsp;</p>
        <?php } ?>
      <?php } ?>
    </li>
<?php

  }
}

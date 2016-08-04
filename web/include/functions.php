<?php
/* some common functions and definitions */

/* read a specified number of lines from a file */
function read_lines($file,$num)
{
    $content = file_get_contents($file);
    $content = preg_replace("/<!--.*-->/Us", "", $content);
    $content = preg_replace("/\n\n/", "\n", $content);
    $lines = preg_split("/\n/", $content);
    $length = count($lines);
    $num = ($num > 0 && $num <= $length ? $num : $length);
    for ($i = 0; $i < $num; $i++) {
        echo "$lines[$i]\n";
    }
}

/* get the time a file was last modified */
function last_modified($file)
{
    if (!$file) {
        return;
    }
    echo "Last modified: ";
    if ($file==1) {
        echo date("c", filemtime($_SERVER["SCRIPT_FILENAME"]));
    } else {
        echo date("c", filemtime($file));
    }
    /*echo "Last modified: " . date("d M Y Hi T", filemtime($_SERVER["SCRIPT_FILENAME"]));*/

    }

function current_pagename()
{
	$currentFile = $_SERVER["PHP_SELF"];
	$parts = Explode('/', $currentFile);
	$mypage = $parts[count($parts) - 1];
	return $mypage;
}

function add_listitem($name, $organization, $link)
{
	print('<li data-icon="false">');
	if ($link) {
	   printf('<a href="%s" target="_blank" rel="external">', $link);
	}
	printf('<div class="ui-grid-a"><div class="ui-block-a"><p>%s</p></div><div class="ui-block-b"><p>%s</p></div></div>',
		   $name, $organization);
	if ($link) {
	   printf('</a>');
	}
	print('</li>');
}

function add_dateitem($date, $info)
{
	printf('<li data-icon="false"><div class="ui-grid-a"><div class="ui-block-a"><h2>%s</h2></div><div class="ui-block-b"><p>%s</p></div></div></li>',
		   $date, $info);
}

function add_registrationheader($regheadertype, $regheader1, $regheader2, $regheader3)
{
    printf('<li data-icon="false"><div class="ui-grid-a"><div class="ui-block-a"><p><b>%s</b></p></div><div class="ui-block-b"><p><b>%s</b></p></div><div class="ui-block-b"><p><b>%s</b></p></div><div class="ui-block-b"><p><b>%s</b></p></div></div></li>', $regheadertype, $regheader1, $regheader2, $regheader3);
}

function add_registrationitem($regitemtype, $reginfo1, $reginfo2, $reginfo3)
{
    printf('<li data-icon="false"><div class="ui-grid-a"><div class="ui-block-a"><p>%s</p></div><div class="ui-block-b"><p>%s</p></div><div class="ui-block-b"><p>%s</p></div><div class="ui-block-b"><p>%s</p></div></div></li>', $regitemtype, $reginfo1, $reginfo2, $reginfo3);
}

function tprog_add_header($time, $progitemclass = "")
{
?>
    <li class="prog-header prog-no-filter ui-bar-a prog-item <?php echo $progitemclass ?>">
      <h3><?php echo $time ?></h3>
    </li>
<?php

}

function tprog_add_session($time, $title, $chair="", $style="", $progitemclass = "", $last = false)
{
    if (!$style) {
        $style = preg_match('/lunch|coffee/i', $title) ? "b" : "a";
    }
	printf('<li class="ui-li ui-bar-%s prog-item ui-li-divider %s %s" data-role="list-divider"><h3>%s %s</h3>',
	         $style, $progitemclass, ($last ? "listlast" : ""), $time, $title);
	if ($chair) {
		$chair = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $chair);
		printf('<p>Session Chair: %s</p>', $chair);
	}
	print("</li>\n");
        // a list divider is not visible if not followed by an ordinary item,
        // when data-filter is true. workaround: included an invisible li
        print ("<li class=\"hidden\">%s %s</li>\n");

}

function tprog_add_extra($time, $title, $progitemclass = "", $last = false)
{
        printf('<li class="prog-social prog-item %s %s" data-role="list-divider"><h3>%s %s</h3>', 
                 $progitemclass, ($last ? "listlast" : ""), $time, $title);
        print("</li>\n");
        // a list divider is not visible if not followed by an ordinary item,
        // when data-filter is true. workaround: included an invisible li
        print ("<li class=\"hidden\"></li>\n");

}

function tprog_add_item($paper, $link, $authors, $info, $slides="", $video="", $progitemclass = "")
{
	/* the spaces after various "%s" below are important for correct list filtering! */
	$authors = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $authors);	
	
	$item_style = (trim($link) != "") ? "style=\"width: 85%\"" : "";
?>
    <li data-icon="false" class="prog-item <?php echo $progitemclass; ?>">

      <?php if (trim($link) != "") { ?>
      <p class="ui-li-aside button-paper" style="padding: 6px; border-radius: 5px; top: 0.5em !important;">
        <a href="<?php echo $link ?>" rel="external" target="_blank" class="ui-link" style="text-decoration: none; color: white">Paper</a>
      </p>                                        
      <?php } ?>
      
      <h2 <?php echo $item_style ?>>
      <?php if (trim($link) != "") { ?>
        <a href="<?php echo $link ?>" rel="external" target="_blank" style="color: black;">
      <?php } ?>
        <?php echo $paper ?>
      <?php if (trim($link) != "") { ?>
        </a>
      <?php } ?>
      </h2>
      <p <?php echo $item_style ?>><?php echo $authors; ?></p>

    </li>
<?php
}

function tprog_add_keynote($title, $speakers, $abstract, $bio, $photo="", $link="", $progitemclass = "")
{
  if (trim($abstract) == "" && trim($bio) == "")
    /* if there is no abstract neither bio, no need to make this entry a collapsible item */
    tprog_add_item ("Keynote: ". $title, "", $speakers, "", "", "", $progitemclass);
  else {
    /* the spaces after various "%s" below are important for correct list filtering! */
    $speakers = preg_replace('/\(([^\)]*)\)/', '<em>(${1})</em>', $speakers);
    
    $item_style = (trim($link) != "") ? "style=\"width: 85%\"" : "";
?>
    <li data-icon="false" class="prog-item <?php echo $progitemclass; ?> prog-keynote">
      
      <?php if (trim($link) != "") { ?>
      <p class="ui-li-aside button-paper" style="padding: 6px; border-radius: 5px; top: 0.5em !important;">
        <a href="<?php echo $link ?>" rel="external" target="_blank" class="ui-link" style="text-decoration: none; color: white">Paper</a>
      </p>                                        
      <?php } ?>
      
      <h2 <?php echo $item_style ?>><?php echo $title ?></h2><p <?php echo $item_style ?>><?php echo $speakers; ?></p>
      <?php if (trim($abstract) != "" || trim($bio) != "") { ?>
        <hr class="keynote-divider"/>
      <?php } ?>
        <?php if (trim($abstract) != "") { ?>
          <p><?php if ($photo) { ?><img class="keynote-photo" src="<?php echo $photo ?>"/><?php } ?><b>Abstract: </b><?php echo $abstract ?></p><p>&nbsp;</p>
        <?php } ?>
        <?php if (trim($bio) != "") { ?>
          <p><b>Bio: </b><?php echo $bio ?></p><p>&nbsp;</p>
        <?php } ?>
    </li>
<?php
  }
}       

function check_downloadcode($code, $code_file)
{
	/* Load the code table */
	$content = strtoupper(file_get_contents($code_file));
	preg_match_all('/\S+/', $content, $ctable);
	/* Format the code */
	$code = strtoupper(sha1($code));
	return in_array($code, $ctable[0]);
}

function send_paper_archive($file)
{
	if (file_exists($file)) {
    	header('Content-Description: File Transfer');
    	header('Content-Type: application/octet-stream');
    	header('Content-Disposition: attachment; filename='.basename($file));
    	header('Content-Transfer-Encoding: binary');
    	header('Expires: 0');
    	header('Cache-Control: must-revalidate');
    	header('Pragma: public');
    	header('Content-Length: ' . filesize($file));
    	ob_clean();
    	flush();
    	readfile($file);
    	exit;
	}
}

?>


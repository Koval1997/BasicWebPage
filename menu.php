<?php
  class Menu{
      
 public static $items = [   
  1 => array( 'title' => 'Start'),
  2 => array( 'title' => 'About'),
  3 => array( 'title' => 'Top list')
  ];  
 
public static function GetMenu($selected_item) {
        $menu = '<ul class="main-menu">';  
        foreach (self::$items as $key => $value) {
            if($key == $selected_item) {
			$menu = $menu.'<li><a id = "Active">'."{$value['title']}</a></li>";
            }
            else {
                $menu = $menu.'<li><a '."href=index.php?page=$key>{$value['title']}</a></li>";
            }
        }
        $menu = $menu.'</ul>';
        return $menu;
    }
  }
 
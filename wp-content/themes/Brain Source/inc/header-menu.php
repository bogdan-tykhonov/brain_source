<?php
function clean_custom_main_menu() {
    $menu_name = 'Верхнее меню'; // specify custom menu slug
    $menu_list = '<ul class="header-nav-linklist">' ."\n";

    if ($menu_items = wp_get_nav_menu_items($menu_name)) { 
        $count = 0;
        $submenu = false;
        $parent_id = 0;
        $previous_item_has_submenu = false;

        foreach ((array) $menu_items as $key => $menu_item) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            // check if it's a top-level item
            if ($menu_item->menu_item_parent == 0) {
                $item_classes = $menu_item->classes;
                $is_parent = in_array('parent', $item_classes);
                $parent_id = $menu_item->ID;
                if(!$is_parent){
                    $menu_list .= "\t". '<li><div class="header-navlink-wrap"
                    x-data="dropDown()" 
                    x-on:mouseover="toggleDropdown" 
                    x-on:mouseout="closeDropdown">
                    <a href="'.$menu_item->url.'">'.$title.'</a>';
                }else {
                    $menu_list .= "\t". '<li><div class="header-navlink-wrap header-navlink-parent"
                    x-data="dropDown()" 
                    x-on:mouseover="toggleDropdown" 
                    x-on:mouseout="closeDropdown">
                    <button>'.$title.'</button>';
                };
            }
            // if this item has a (nonzero) parent ID, it's a second-level (child) item
            else {
                if ( !$submenu ) { // first item
                    // add the dropdown arrow to the parent
                    // start the child list
                    $submenu = true;
                    $previous_item_has_submenu = true;
                    $menu_list .= "\t\t" . ' <div class="header-navlink-dropdown"
                    x-show.transition.origin.top="open" x-cloak="closedNav">
                    <ul>' ."\n";
               }

                $menu_list .= "\t\t\t" . '<a href="'.$url.'">';
                $menu_list .= '<li>'.$title.'</li>';
                $menu_list .= '</a>' ."\n";

                // if it's the last child, close the submenu code
                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= "\t\t" . '</ul></div>' ."\n";
                    $submenu = false;
                }
            }

            // close the parent (top-level) item
            if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id )
            {
               if ($previous_item_has_submenu)
                {
                    // the a link and list item were already closed
                    $previous_item_has_submenu = false; //reset
                }
                else {
                    // close a link and list item
                    $menu_list .= "\t" . '</li>' . "\n";
                }
            }

            $count++;
        }
    } else {
         $menu_list .= '<!-- no list defined -->';
    }
    $menu_list .= "\t". '</ul>' ."\n";
    echo $menu_list;
}

clean_custom_main_menu();
?>
<!-- <ul class="header-nav-linklist">
                <li>
                    <div class="header-navlink-wrap">
                        <button>Про компанію</button>
                        <div class="header-navlink-dropdown">
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="header-navlink-wrap">
                        <button>Наші послуги</button>
                        <div class="header-navlink-dropdown">
                            
                        </div>
                    </div>
                </li>
                <li>
                    <div class="header-navlink-wrap"
                     x-data="dropDown()" 
                     x-on:mouseover="toggleDropdown" 
                     x-on:mouseout="closeDropdown" 
                     >
                        <button>Наша репутація</button>
                        <div 
                        class="header-navlink-dropdown"
                        x-show.transition.origin.top="open"
                        
                         >
                            <ul>
                                <li><a href="#">Відгуки клієнтів</a></li>
                                <li><a href="#">Досягнення</a></li>
                                <li><a href="#">Публікації та новини</a></li>
                                <li><a href="#">Партнерство</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="header-navlink-wrap">
                        <a href="#">Наші бренди</a>
                    </div>
                </li>
                <li>
                    <div class="header-navlink-wrap">
                        <a href="#">Контакти</a>
                    </div>
                </li>
            </ul> -->
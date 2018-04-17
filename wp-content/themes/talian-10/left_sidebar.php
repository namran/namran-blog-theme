</div>
 <div class="left-content-talia">
  <div id="left-sidebars">
   <div class="sidebar-box">
    <?php if(function_exists("wp_theme_switcher")) : ?>
     <ul>
      <li><?php wp_theme_switcher('dropdown'); ?></li>
     </ul>
     <?php endif; ?>
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
      <!-- put here whatever to be displayed if got no widget -->
     <?php endif; ?>
    </div>
  </div>
</div>
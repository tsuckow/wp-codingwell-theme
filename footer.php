<?php
  function is_ipv6() {
    $address = $_SERVER["REMOTE_ADDR"];
    $ipv4_mapped_ipv6 = strpos($address, "::ffff:");
    return (strpos($address, ":") !== FALSE) &&
      ($ipv4_mapped_ipv6 === FALSE || $ipv4_mapped_ipv6 != 0);
  }
?>
    <!-- body div.center -->
    <div style="clear:both;"></div>
      <div id="wp-footer">
        <!--
          No HTTPS version, and just not needed
          <a href="http://www.siteuptime.com/statistics.php?Id=75211&amp;UserId=93771"><img style="width:85px; height:16px;" alt="Website Uptime" src="http://btn.siteuptime.com/genbutton.php?u=93771&amp;m=75211&amp;c=blue&amp;p=total"></a>
        -->
        <span class="<?php print is_ipv6()?"ipv6":"ipv4"; ?>"></span>
        <span id="pagestats"><?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds</span>
        <a href="<?php bloginfo('url'); ?>/wp-admin/" style="float: right; color: inherit; text-decoration: none;" >&pi;</a>
        <?php wp_footer(); ?>
      </div>
    </div>
  </body>
</html>
<!-- vim: set ts=2 sw=2: -->

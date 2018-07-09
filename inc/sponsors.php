<?php

function datafutbol_sponsors(){
  add_menu_page('Data Futbol', 'Data Futbol Ads', 'administrator', 'datafutbol_ads', 'datafutbol_ads', '', '20');

  //Register function Ads
  add_action('admin_init', 'datafutbol_register_ads');

}
add_action( 'admin_menu', 'datafutbol_sponsors' );

function datafutbol_register_ads(){
  register_setting('datafutbol_ads_group', 'datafutbol_728_90');
  register_setting('datafutbol_ads_group', 'datafutbol_300_250_1');
  register_setting('datafutbol_ads_group', 'datafutbol_300_250_2');
}

function datafutbol_ads(){
  ?>
    <div class="wrap">
      <h1>Ajustes de AdSense</h1>
      <form action="options.php" method="post">
        <?php settings_fields('datafutbol_ads_group'); ?>
        <?php do_settings_sections('datafutbol_ads_group'); ?>
        <table class="form-table">  
          <tr valing="top">
            <th scope="row">Horizontal Ad - 728px * 90px </th>
            <td scope="row"><textarea name="datafutbol_728_90" id="" cols="30" rows="8" value="" style="overflow:auto;resize:none"><?php echo get_option('datafutbol_728_90'); ?></textarea> </td>
          </tr>
          <tr valing="top">
            <th scope="row">Vertical Ad 1 - 300px * 250px </th>
            <td scope="row"><textarea name="datafutbol_300_250_1" id="" cols="30" rows="8" value="" style="overflow:auto;resize:none"><?php echo get_option('datafutbol_300_250_1'); ?></textarea> </td>
          </tr>
          <tr valing="top">
            <th scope="row">Vertical Ad 2 - 300px * 250px </th>
            <td scope="row"><textarea name="datafutbol_300_250_2" id="" cols="30" rows="8" value="" style="resize:none"><?php echo get_option('datafutbol_300_250_2'); ?></textarea> </td>
          </tr>
        </table>
         <?php submit_button() ?>
      </form>
    </div>
<?php 
}
?>
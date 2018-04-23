<?php
  $this->load->view('templates/header_view');
?>
<section>
 <?php echo $the_view_content;?>
</section>
<?php

if($this->ion_auth->logged_in()) {
$this->load->view('templates/nav_view');}
$this->load->view('templates/footer_view');
?>
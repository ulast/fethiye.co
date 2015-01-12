<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 14:50
 * Mail  : ulas@mail.com
 */
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <?php
        $data   =   $this->session->userdata();
        $data['last_activity']  =   date("d-m-Y H:i:s",$data['last_activity']);

        var_dump($data);
        ?>
    </div>
</div>

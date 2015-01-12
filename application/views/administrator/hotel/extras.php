<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 03.12.2014 - 22:30
 * Mail  : ulas@mail.com
 */
?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" class="form-horizontal">
                    <div class="form-actions fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-offset-10 col-md-9">
                                    <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-responsive">
                        <tr>
                            <th>Icon</th>
                            <?php
                            foreach($langs AS $lang)
                            {
                                echo '<th><img src="assets/images/flags/'.$lang['icon'] .'"> '. $lang['title'] .'</th>';
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <select name="add[icon]" id="icon" class="form-control">
                                                <option value="icon">ICON</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <?php
                            foreach($langs AS $lang)
                            {
                                echo '<td>';
                                ?>
                                <div class="form-group">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" name="add[<?php echo $lang['iso']; ?>]" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo '</td>';
                            }
                            ?>
                            <td></td>
                        </tr>
                        <?php
                        if($extras)
                        {
                            foreach($extras AS $ID => $extra)
                            {
                                echo '<tr>';
                                echo '<td></td>';
                                foreach($langs AS $lang)
                                {
                                    echo '<td>';
                                    ?>
                                    <div class="form-group">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <input type="text" value="<?php echo $extras[$ID][$lang['iso']]; ?>" name="data[<?php echo $ID; ?>][<?php echo $lang['iso']; ?>]" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    echo '</td>';
                                }
                                echo '<td>SİL</td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
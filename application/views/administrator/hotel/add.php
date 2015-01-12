<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 15:13
 * Mail  : ulas@mail.com
 */
?>
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="row">
    <div class="col-md-12">
    <div class="tabbable tabbable-custom boxless tabbable-reversed">
        <div id="success"></div>
    <ul class="nav nav-tabs">
        <?php
        foreach($langs AS $lang)
        {
            echo '<li';
            if($langs[0]['iso'] == $lang['iso']){echo ' class="active"';}
            echo '><a href="#'. $lang['iso'] .'" data-toggle="tab"><img style="height:12px;" src="assets/images/flags/'. $lang['icon'] .'"> '. $lang['title'] .'</a></li>';
        }
        ?>
        <li><a href="#extras" data-toggle="tab">Extras</a></li>
    </ul>
    <form action="administrator/hotel/save" method="POST" class="form-horizontal form-row-seperated" style="margin-top: 3px;">
        <div class="tab-content">
            <div class="tab-pane" id="extras">
                Test
            </div>
        <?php
        foreach($langs AS $lang)
        {
            ?>
            <div class="tab-pane <?php if($langs[0]['iso'] == $lang['iso']){echo ' active';} ?>" id="<?php echo $lang['iso']; ?>">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-reorder"></i>Add Hotel (<?php echo $lang['title']; ?>)
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-2">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="<?php echo $lang['iso']; ?>[title]" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Link</label>
                                    <div class="col-md-10">
                                        <input type="text" name="<?php echo $lang['iso']; ?>[seflink]" class="form-control"/>
                                        <span class="help-block">
                                             if left blank, automatically creates
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Content</label>
                                    <div class="col-md-10">
                                        <textarea class="ckeditor form-control" name="<?php echo $lang['iso']; ?>[content]" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <?php
                                if($langs[0]['iso'] == $lang['iso']){
                                ?>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Address</label>
                                    <div class="col-md-10">
                                        <input type="text" name="address" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Telephone</label>
                                    <div class="col-md-10">
                                        <input type="text" name="telephone" class="form-control"/>
                                        <span class="help-block">
                                             ex : Number1,Number2,Number3
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">E-Mail</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
            <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="fa fa-pencil"></i> SAVE</button>
                            <button type="button" class="btn default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</div>
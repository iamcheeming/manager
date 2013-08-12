<div class="page-title">
    <div>
        <h1><i class="icon-file-alt"></i>系统设置</h1>
    </div>
</div>
<div id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>Home
            <span class="divider"><i class="icon-angle-right"></i></span>
        </li>
        <li class="active">友情链接</li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-reorder"></i>友情链接</h3>
            </div>
            <div class="box-content">

                <?php $this->renderPartial('../_flashes'); ?>

                <form action="#" class="form-horizontal" method="post">
                    <div class="control-group">
                        <p>一行一个链接，名称和链接中间用竖线隔开。例如：百度|http://www.baidu.com</p>
                        <textarea class="input-xxlarge" name="link" rows="15" style="font-size: 16px;"><?php echo $link; ?></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Save</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('partial/header.php');?>

<?php include('partial/loader.php');?>

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include('partial/topbar.php');?>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include('partial/sidebar.php');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <?php include('partial/breadcrumb.php'); ?>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic Tooltip</h5>
                            </div>
                            <div class="card-body btn-showcase">
                                <button class="example-popover btn btn-primary" type="button" data-container="body"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Popover title">Hover
                                    Me</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Directions</h5>
                            </div>
                            <div class="card-body btn-showcase">
                                <button class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Tooltip on right">Tooltip on right</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Tooltip on left">Tooltip on left</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>HTML elements</h5>
                            </div>
                            <div class="card-body btn-showcase">
                                <button class="btn btn-primary" type="button" data-bs-toggle="m-tooltip"
                                    data-bs-trigger="click" data-bs-placement="top"
                                    title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"
                                    data-bs-html="true"
                                    data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?"
                                    data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click
                                    me</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="m-tooltip"
                                    data-bs-trigger="click" data-bs-placement="right"
                                    title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"
                                    data-bs-html="true"
                                    data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?"
                                    data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click
                                    me</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="m-tooltip"
                                    data-bs-trigger="click" data-bs-placement="bottom"
                                    title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"
                                    data-bs-html="true"
                                    data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?"
                                    data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click
                                    me</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="m-tooltip"
                                    data-bs-trigger="click" data-bs-placement="left"
                                    title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"
                                    data-bs-html="true"
                                    data-content="And here's some amazing &lt;b&gt;HTML&lt;/b&gt; content. It's very &lt;code&gt;engaging&lt;/code&gt;. Right?"
                                    data-original-title="Tooltip &lt;b&gt;with&lt;/b&gt; &lt;code&gt;HTML&lt;/code&gt;">Click
                                    me</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        
        <?php include('partial/footer.php');?>
    </div>
</div>

<?php include('partial/scripts.php'); ?>

<script src="assets/js/tooltip-init.js"></script>

<?php include('partial/footer-end.php'); ?>
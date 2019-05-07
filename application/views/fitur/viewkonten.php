<!doctype html>
<html lang="en">

<head>
    <title><?= $data ?></title>
    <!--     Fonts and icons     -->
    <!-- <link rel="icon" href=""> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Kit CSS -->
    <link href="<?= base_url(); ?>.../css/material-kit.css?v=2.0.5" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <style>
        .mainbody {
            background: #f0f0f0;
        }

        /* Special class on .container surrounding .navbar, used for positioning it into place. */
        .navbar-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 20;
            margin-left: -15px;
            margin-right: -15px;
        }

        /* Flip around the padding for proper display in narrow viewports */
        .navbar-wrapper .container {
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-wrapper .navbar {
            padding-left: 15px;
            padding-right: 15px;
        }

        .navbar-content {
            width: 320px;
            padding: 15px;
            padding-bottom: 0px;
        }

        .navbar-content:before,
        .navbar-content:after {
            display: table;
            content: "";
            line-height: 0;
        }

        .navbar-nav.navbar-right:last-child {
            margin-right: 15px !important;
        }

        .navbar-footer {
            background-color: #DDD;
        }

        .navbar-footer-content {
            padding: 15px 15px 15px 15px;
        }

        .dropdown-menu {
            padding: 0px;
            overflow: hidden;
        }

        .brand_network {
            color: #9D9D9D;
            float: left;
            position: absolute;
            left: 70px;
            top: 30px;
            font-size: smaller;
        }

        .post-content {
            margin-left: 58px;
        }

        .badge-important {
            margin-top: 3px;
            margin-left: 25px;
            position: absolute;
        }

        body {
            background-color: #e8e8e8;
        }
    </style>


</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-transparent bg-dark navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100">
        <div class=" container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?= base_url(); ?>Home">Nelayan Belajar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Wawasan</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Peraturan UU</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Forum</a>
                    </li>
                </ul>

                <form class="form-inline ml-auto nav-item navbar-nav">
                    <div class="form-group no-border pr-4">
                        <input type="text" class="form-control place" placeholder="Search" style="color: grey;">
                    </div>
                    <!-- <button type="submit" class="btn bg-transparent btn-just-icon btn-round" style="color: grey;">
                        <i class="material-icons">search</i>
                    </button> -->
                </form>

                <div class="btn-group nav-item navbar-nav">
                    <a href="<?= base_url(); ?>Login">
                        <button class="btn bg-transparent btn-round" style="border:thick; color: grey;">Masuk</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->



    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <div class="mainbody container-fluid">
        <div class="row">
            <div class="navbar-wrapper">
                <div class="container-fluid">
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="./ORqmj" style="margin-right:-8px; margin-top:-5px;">
                                    <img alt="Brand" src="https://lut.im/7trApsDX08/GeilMRp1FIm4f2p7.png" width="30px" height="30px">
                                </a>
                                <a class="navbar-brand" href="./ORqmj">Project*</a>
                                <i class="brand_network"><small><small>diaspora* Network</small></small></i>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="./ORqmj">Stream</a></li>
                                    <li><a href="#">My Activity</a></li>
                                    <li><span class="badge badge-important">2</span><a href="#"><i class="fa fa-bell-o fa-lg" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                                <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                                            </span>
                                            <span class="user-name">
                                                John Doe
                                            </span>
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" alt="Alternate Text" class="img-responsive" width="120px" height="120px" />
                                                            <p class="text-center small">
                                                                <a href="./3X6zm">Change Photo</a></p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span>John Doe</span>
                                                            <p class="text-muted small">
                                                                example@pods.tld</p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="./56ExR" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts</a>
                                                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                                            <a href="#" class="btn btn-default btn-xs"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Help!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="#" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Passowrd</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-top:50px;"> </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div align="center">
                                <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                            </div>
                            <div class="media-body">
                                <hr>
                                <h3><strong>Bio</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                                <hr>
                                <h3><strong>Location</strong></h3>
                                <p>Earth</p>
                                <hr>
                                <h3><strong>Gender</strong></h3>
                                <p>Unknown</p>
                                <hr>
                                <h3><strong>Birthday</strong></h3>
                                <p>January 01 1901</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <span>
                            <h1 class="panel-title pull-left" style="font-size:30px;">John Doe <small>example@pods.tld</small> <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="John Doe is sharing with you"></i></h1>
                            <div class="dropdown pull-right">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Friends
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Familly</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Friends</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add a new aspect</a></li>
                                </ul>
                            </div>
                        </span>
                        <br><br>
                        <i class="fa fa-tags" aria-hidden="true"></i> <a href="/tags/diaspora" class="tag">#diaspora</a> <a href="/tags/hashtag" class="tag">#hashtag</a> <a href="/tags/caturday" class="tag">#caturday</a>
                        <br><br>
                        <hr>
                        <span class="pull-left">
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-files-o" aria-hidden="true"></i> Posts</a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i> Photos <span class="badge">42</span></a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Contacts <span class="badge">42</span></a>
                        </span>
                        <span class="pull-right">
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-envelope-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Message"></i></a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-ban" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Ignore"></i></a>
                        </span>
                    </div>
                </div>
                <hr>
                <!-- Simple post content example. -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                            </a>
                        </div>
                        <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                        <span>
                            <div class="navbar-right">
                                <div class="dropdown">
                                    <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                                        <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </span>
                        <hr>
                        <div class="post-content">
                            <p>Simple post content example.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                        </div>
                        <hr>
                        <div>
                            <div class="pull-right btn-group-xs">
                                <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
                            </div>
                            <div class="pull-left">
                                <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reshare Example -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                            </a>
                        </div>
                        <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                        <span>
                            <div class="navbar-right">
                                <div class="dropdown">
                                    <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                                        <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </span>
                        <hr>
                        <div class="post-content">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pull-left">
                                        <a href="#">
                                            <img class="media-object img-circle" src="https://diaspote.org/uploads/images/thumb_large_283df6397c4db3fe0344.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                                        </a>
                                    </div>
                                    <h4><a href="#" style="text-decoration:none;"><strong>✪ SтeғOғғιcιel ✪ ツ</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> about 15 hours ago</i></a></small></small></h4>
                                    <hr>
                                    <div class="post-content">
                                        Reshare post example.
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="pull-right btn-group-xs">
                                <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
                            </div>
                            <div class="pull-left">
                                <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sample post content with picture. -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                            </a>
                        </div>
                        <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                        <span>
                            <div class="navbar-right">
                                <div class="dropdown">
                                    <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                                        <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </span>
                        <hr>
                        <div class="post-content">
                            <p>Sample post content with picture.</p>
                            <img class="img-responsive" src="https://media.giphy.com/media/j1QQj6To9Pbxu/giphy.gif">
                            <p><br><a href="/tags/christmas" class="tag">#Christmas</a> <a href="/tags/caturday" class="tag">#Caturday</a></p>
                        </div>
                        <hr>
                        <div>
                            <div class="pull-right btn-group-xs">
                                <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
                            </div>
                            <div class="pull-left">
                                <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public <strong>via mobile</strong></p>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sample post content with comments. -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                            </a>
                        </div>
                        <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                        <span>
                            <div class="navbar-right">
                                <div class="dropdown">
                                    <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                                        <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                                        <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </span>
                        <hr>
                        <div class="post-content">
                            <p>Sample post content with comments.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                        </div>
                        <hr>
                        <div>
                            <div class="pull-right btn-group-xs">
                                <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
                            </div>
                            <div class="pull-left">
                                <p class="text-muted" style="margin-left:5px;"><i class="fa fa-user-secret" aria-hidden="true"></i> Limited</p>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div>
                            <a class="btn btn-default btn-xs"><i class="fa fa-bars" aria-hidden="true"></i> Show 12 more comments</a>
                            <hr>
                            <div class="post-content">
                                <div class="panel-default">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <a href="#">
                                                <img class="media-object img-circle" src="https://diaspote.org/uploads/images/thumb_large_283df6397c4db3fe0344.png" width="35px" height="35px" style="margin-right:8px; margin-top:-5px;">
                                            </a>
                                        </div>
                                        <h4><a href="#" style="text-decoration:none;"><strong>✪ SтeғOғғιcιel ✪ ツ</strong></a></h4>
                                        <hr>
                                        <div class="post-content">
                                            Comment example.<br><br>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit ipsum elit, a elementum nulla ultrices eu. In posuere mollis efficitur. Maecenas justo turpis, tristique sit amet ultricies quis, molestie eget ex. Nam vestibulum consequat tincidunt. Morbi vitae placerat sapien. Phasellus quis mi tincidunt sem scelerisque tincidunt. Ut viverra porttitor sagittis. Phasellus aliquam auctor purus, id sollicitudin mauris pulvinar ac. Vivamus vel erat nec orci ultricies iaculis quis sit amet augue. Vestibulum aliquam felis lorem, interdum porttitor sapien sodales ac. Maecenas id ullamcorper risus. Suspendisse id dui sed urna rutrum pharetra. Nam eu lectus et orci vestibulum bibendum. Mauris et pulvinar dui, ac facilisis leo.
                                            <br><small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 12 minutes ago</i></a></small></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <div class="panel-default">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <a href="#">
                                                <img class="media-object img-circle" src="https://lut.im/yR07xwobAA/bZpvdTZmBBTZDJDd.png" width="35px" height="35px" style="margin-right:8px; margin-top:-5px;">
                                            </a>
                                        </div>
                                        <h4><a href="#" style="text-decoration:none;"><strong>Mi Chleen</strong></a></h4>
                                        <hr>
                                        <div class="post-content">
                                            Another comment.<br><br>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit ipsum elit, a elementum nulla ultrices eu. In posuere mollis efficitur. Maecenas justo turpis, tristique sit amet ultricies quis, molestie eget ex. Nam vestibulum consequat tincidunt. Morbi vitae placerat sapien. Phasellus quis mi tincidunt sem scelerisque tincidunt. Ut viverra porttitor sagittis. Phasellus aliquam auctor purus, id sollicitudin mauris pulvinar ac. Vivamus vel erat nec orci ultricies iaculis quis sit amet augue. Vestibulum aliquam felis lorem, interdum porttitor sapien sodales ac. Maecenas id ullamcorper risus. Suspendisse id dui sed urna rutrum pharetra. Nam eu lectus et orci vestibulum bibendum. Mauris et pulvinar dui, ac facilisis leo.
                                            <br><small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 9 minutes ago</i></a></small></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="post-content">
                                <div class="panel-default">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <a href="#">
                                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-right:8px; margin-top:-5px;">
                                            </a>
                                        </div>
                                        <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a></h4>
                                        <hr>
                                        <div class="post-content">
                                            Yet another post.<br><br>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit ipsum elit, a elementum nulla ultrices eu. In posuere mollis efficitur. Maecenas justo turpis, tristique sit amet ultricies quis, molestie eget ex. Nam vestibulum consequat tincidunt. Morbi vitae placerat sapien. Phasellus quis mi tincidunt sem scelerisque tincidunt. Ut viverra porttitor sagittis. Phasellus aliquam auctor purus, id sollicitudin mauris pulvinar ac. Vivamus vel erat nec orci ultricies iaculis quis sit amet augue. Vestibulum aliquam felis lorem, interdum porttitor sapien sodales ac. Maecenas id ullamcorper risus. Suspendisse id dui sed urna rutrum pharetra. Nam eu lectus et orci vestibulum bibendum. Mauris et pulvinar dui, ac facilisis leo.
                                            <br><small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 2 minutes ago</i></a></small></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="title">Nelayan Belajar</h1>
                </div>

                <div class="col-md-4 pt-5 pl-5">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                License
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="title">Follow us:</h3>
                    <div class="btn-wrapper profile">
                        <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="#" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->


    <!--   Core JS Files   -->

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>

    <script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url(); ?>assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>
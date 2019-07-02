<?php /*a:2:{s:63:"/www/wwwroot/aa.ggfb.cc/application/api/view/account/index.html";i:1561974717;s:64:"/www/wwwroot/aa.ggfb.cc/application/api/view/common/default.html";i:1561710918;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no, email=no"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover, shrink-to-fit=no" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="theme-color" content="#4188c9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="/favicon.ico?2" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?2" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/dashboard.css?3" />
    <link rel="stylesheet" href="/static/css/global.css?3" />
    <title><?php echo htmlentities(app('config')->get('hello.title')); ?></title>
    <style>
        @media (max-width: 360px) {
            .icon-group {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .icon-news {
                display: none !important;
            }
        }
    </style>
    

</head>

<body>
<!-- content -->
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <img src="<?php echo htmlentities(app('config')->get('hello.logo')); ?>" class="header-brand-img" alt="tabler logo">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="nav-item d-xs-flex" style="display: none !important;">
                            <?php if(app('session')->get('platform') != 'app'): if(!(empty(app('config')->get('hello.appurl')) || ((app('config')->get('hello.appurl') instanceof \think\Collection || app('config')->get('hello.appurl') instanceof \think\Paginator ) && app('config')->get('hello.appurl')->isEmpty()))): if($platform == 'android'): ?>
                            <a href="<?php echo htmlentities(app('config')->get('hello.appurl')); ?>" target="_blank" class="btn btn-sm btn-outline-primary btn-app-download">APP 下载</a>
                            <?php endif; else: ?>
                            <a href="javascript:;" class="btn btn-sm btn-outline-primary btn-app-download" data-toggle="tooltip" data-original-title="敬请期待">APP 下载</a>
                            <?php endif; endif; ?>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:;" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                               <span class="avatar me-avatar" style="background-image: url(<?php echo avatar(app('session')->get('user.profile.avatar'), app('session')->get('user.profile.idcard')); ?>);"><span class="avatar-status bg-green"></span></span>
                                <span class="ml-2 d-none d-lg-block">
                                  	<?php if(!empty(app('session')->get('user'))): ?>
                                    <span class="text-default"><?php echo htmlentities(app('session')->get('user.profile.nickname')); ?></span>
                                    <small class="text-muted d-block mt-1"><?php echo htmlentities(app('config')->get('hello.level')[app('session')->get('user.account.type')]['name']); ?></small>
                                  	<?php endif; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a> -->
                </div>
            </div>
        </div>
        <div class="color header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <!-- <div class="col-lg-3 ml-auto header-search-div">
                        <form class="input-icon my-3 my-lg-0">
                            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div> -->
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="/api" class="nav-link<?php echo app('request')->path()=='account' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-home"></i></span>
                                    <span>首页</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/market" class="nav-link<?php echo app('request')->path()=='market'?' active' : ''; ?>">
                                    <span><i class="fe fe-globe"></i></span>
                                    <span>市场</span>
                                </a>
                            </li>
                          	<li class="nav-item">
                                <a href="/funding" class="nav-link<?php echo app('request')->path()=='account' || app('request')->path() == ''?' active' : ''; ?>">
                                    <span><i class="fe fe-star"></i></span>
                                    <span>众筹</span>
                                </a>
                            </li>
                            <li class="nav-item d-md-block d-lg-block">
                                <a href="/account" class="nav-link<?php echo app('request')->path()=='help'?' active' : ''; ?>">
                                    <span><i class="fe fe-user"></i></span>
                                    <span>我的</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="my-3 my-md-5">
            <div class="container container-padding">
                
<div class="row row-cards mt-3">
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-blue mr-3" >
                            <img src="/static/image/icon-g.png" alt="">
                        </span>
                        <div>
                            <h4 class="m-0"><a href="/wallet/record.html"><?php echo htmlentities(money_show($user['wallet']['money'])); ?></a></h4>
                            <small class="text-muted">可用<?php echo htmlentities(app('config')->get('hello.unit')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-gray mr-3">
                            <img src="/static/image/icon-g.png" alt="">
                        </span>
                        <div>
                            <h4 class="m-0"><a href="/wallet/record.html?c=2"><?php echo htmlentities(money_show($user['wallet']['deposit'])); ?></a></h4>
                            <small class="text-muted">冻结<?php echo htmlentities(app('config')->get('hello.unit')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(!(empty(app('config')->get('hello.score.enable')) || ((app('config')->get('hello.score.enable') instanceof \think\Collection || app('config')->get('hello.score.enable') instanceof \think\Paginator ) && app('config')->get('hello.score.enable')->isEmpty()))): ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-azure mr-3">
                            <i class="fa fa-google"></i>
                        </span>
                        <div>
                            <h4 class="m-0"><a href="/wallet/record.html?c=2"><?php echo htmlentities(money_show($user['wallet']['score'])); ?></a></h4>
                            <small class="text-muted">可用<?php echo htmlentities(app('config')->get('hello.score.unit')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-gray mr-3">
                            <i class="fa fa-google"></i>
                        </span>
                        <div>
                            <h4 class="m-0"><a href="/wallet/record.html?c=2"><?php echo htmlentities(money_show($user['wallet']['score_deposit'])); ?></a></h4>
                            <small class="text-muted">冻结<?php echo htmlentities(app('config')->get('hello.score.unit')); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-green mr-3">
                            <i class="fa fa-star"></i>
                        </span>
                        <div>
                            <h4 class="m-0"><a href="/imtoken.html"><?php echo htmlentities(money_show($user['wallet']['cash'])); ?></a></h4>
                            <small class="text-muted"><?php echo htmlentities(app('config')->get('hello.cash')); ?>余额</small>
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                <div class="card p-3">
                    <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-green mr-3">
                            <i class="fa fa-users"></i>
                        </span>
                        <div>
                            <h4 class="m-0"><a href="/team"><?php echo htmlentities($user['dashboard']['team_count']); ?></a></h4>
                            <small class="text-muted">团队总人数</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="list-group quick-operation">
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/wallet/record">
                    <i class="fe fe-slack text-muted"></i>
                    <span class="ml-3">资产明细</span>
                    <span class="text-muted ml-auto"><i class="fe fe-chevron-right"></i></span>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/imtoken">
                    <i class="fe fe-aperture text-muted"></i>
                    <span class="ml-3">充币提币</span>
                    <span class="text-muted ml-auto"><i class="fe fe-chevron-right"></i></span>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/transfer">
                    <i class="fe fe-anchor text-muted"></i>
                    <span class="ml-3">内部转账</span>
                    <span class="text-muted ml-auto"><i class="fe fe-chevron-right"></i></span>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/account/authen.html">
                    <i class="fe fe-shield text-muted"></i>
                    <span class="ml-3">实名认证</span>
                    <span class="text-muted ml-auto">
                    <?php switch($user['account']['authen']): case "1": ?><i class="fe fe-check text-green"></i><?php break; case "2": ?><span class="status-icon bg-warning"></span>审核中<?php break; case "3": ?><span class="status-icon bg-red"></span>被拒绝<?php break; default: ?>
                            <i class="fe fe-chevron-right"></i>
                    <?php endswitch; ?>
                    </span>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/account/site">
                    <i class="fa fa-cog text-muted"></i>
                    <span class="ml-3">个人中心</span>
                    <span class="text-muted ml-auto"><i class="fe fe-chevron-right"></i></span>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/team/inviter">
                    <i class="fe fe-flag text-muted"></i>
                    <span class="ml-3">团队招募</span>
                    <span class="text-muted ml-auto"><i class="fe fe-chevron-right"></i></span>
                </a>
                <a class="list-group-item d-flex justify-content-between align-items-center" href="/signout.html">
                    <i class="fe fe-log-out text-muted"></i>
                    <span class="ml-3">退出登录</span>
                    <span class="text-muted ml-auto"><i class="fe fe-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
    <footer class="footer d-xs-none d-sm-none d-lg-block">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center"><?php echo htmlentities(date('Y-m-d g:i a',time())); ?></div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href="."><?php echo htmlentities(app('config')->get('hello.title')); ?></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade modal-group" id="modal-group" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">官方交流群</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $group['content']; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">我知道了</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

</body>
</html>
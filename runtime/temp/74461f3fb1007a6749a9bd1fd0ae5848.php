<?php /*a:2:{s:62:"/www/wwwroot/aa.ggfb.cc/application/api/view/market/index.html";i:1561543347;s:64:"/www/wwwroot/aa.ggfb.cc/application/api/view/common/default.html";i:1561710918;}*/ ?>
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
    <title>交易市场</title>
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
    
<style>
.btn-toggle-form {
     position: absolute;
    right: .3rem;
    top: 0rem;
    z-index: 1;
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
                
<!-- <div class="position-relative">
    <a class="btn btn-secondary btn-toggle-form btn-sm" data-toggle="card-collapse" data-target="card-form">一键挂单</a>
</div> -->
<div id="market" class="mb-3" data-market="<?php echo htmlentities(app('config')->get('hello.unit')); ?>" style="height: 10rem;"></div>
<div class="card card-form">
    <div class="card-body p-3">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="form-group">
                    <label class="form-label">数量</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="<?php echo htmlentities($config['buy']['number']['min']); ?> - <?php echo htmlentities($config['buy']['number']['max']); ?>" name="number" />
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div class="form-group">
                    <label class="form-label">单价</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text">￥</span>
                        </span>
                        <input type="text" class="form-control" placeholder="0" name="price" />
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <label hidden class="custom-switch m-0 mr-2">
                <input type="checkbox" value="1" class="custom-switch-input trade-switch" checked />
                <span class="custom-switch-indicator"></span>
                <span class="ml-2 trade-switch-label">我要买入</span>
            </label>
            <div>
                <button type="button" class="btn btn-secondary btn-submit mr-2" data-option="sell">我要卖出</button>
            </div>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-primary btn-submit" data-option="buy">我要买入</button>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title f1">订单列表</div>
        <div class="card-options">
            <div class="selectgroup selectgroup-pills list-switch">
                <label class="selectgroup-item mb-0">
                    <input type="radio" name="option" value="1" class="selectgroup-input" checked="true" />
                    <span class="selectgroup-button selectgroup-button-sm">买入</span>
                </label>
                <label class="selectgroup-item mb-0">
                    <input type="radio" name="option" value="2" class="selectgroup-input" />
                    <span class="selectgroup-button selectgroup-button-sm">卖出</span>
                </label>
                <label class="selectgroup-item mb-0">
                    <input type="radio" name="option" value="3" class="selectgroup-input" />
                    <span class="selectgroup-button selectgroup-button-sm">我的</span>
                </label>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-striped table-vcenter">
            <thead>
                <tr>
                    <th>用户</th>
                    <th width="20%" class="text-right">数量</th>
                    <th width="20%" class="text-right">单价</th>
                    <th width="20%" class="text-right pr-4">操作</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div hidden class="card-footer card-more">
        <div class="text-muted text-center">点击加载更多</div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document" style="margin-top: -10%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">安全验证</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="text-danger text-center mb-2">手续费 <span class="charge">0</span><?php echo htmlentities(app('config')->get('hello.unit')); ?></div>
                <div class="input-group">
                    <input type="password" name="safeword" class="form-control" placeholder="请输入安全密码" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary btn-confirm">确认提交</button>
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

<script>
var charge = parseFloat('<?php echo htmlentities($config['charge']); ?>', 10);
</script>
<script type="text/javascript" src="/static/js/market.js?2"></script>

</body>
</html>
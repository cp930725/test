<?php /*a:2:{s:63:"/www/wwwroot/aa.ggfb.cc/application/api/view/imtoken/index.html";i:1561981813;s:64:"/www/wwwroot/aa.ggfb.cc/application/api/view/common/default.html";i:1561710918;}*/ ?>
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
    <title>充币提币兑币</title>
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
                
<div class="card card-form">
    <div class="card-header">
        <div class="card-title f1"><span class="form-title">在线充币</span></div>
        <div class="card-options">
            <button class="btn btn-primary btn-sm mr-2" type="button" data-type="recharge">充币</button>
            <button class="btn btn-secondary btn-sm mr-2" type="button" data-type="withdraw">提币</button>
            <button class="btn btn-secondary btn-sm mr-2" type="button" data-type="exchange">兑换</button>
        </div>
    </div>
    <div class="card-body">
        <div class="dimmer">
            <div class="dimmer-content recharge">
                <div class="row">
                  <p style="color:red;" >1.QC钱包地址禁止充值除QC之外的其他资产，任何非QC资产充值将不可找回。2.充值地址已发生变更，充值前请确认地址</p>
                    <div class="col-sm-6 col-lg-4">
                      
                        <div class="form-group">
                          
                            <label class="form-label">收币地址：QC</label>
                            <div class="row gutters-xs">
                                <div class="col">
                                    <input type="text" class="form-control" name="imtoken_code" readonly="true" value="<?php echo htmlentities($config['code']); ?>" />
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-secondary" data-toggle="collapse" data-target="#qrcode">
                                        <i class="fa fa-qrcode"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 collapse" id="qrcode">
                        <div class="form-group">
                            <label class="form-label">收币地址：二维码</label>
                            <div class="input-group">
                                <img src="/upload/<?php echo htmlentities($config['qrcode']); ?>" style="max-height: 10rem;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">货币数量</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="0" name="number" />
                                <span class="input-group-append" id="basic-addon2">
                                    <span class="input-group-text"><?php echo htmlentities(app('config')->get('hello.cash')); ?></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <div class="form-label">支付凭证</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="certificate" accept="image/*">
                                <label class="custom-file-label">请选择截图</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">安全密码</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="******" name="safeword" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="ml-auto text-right">
                        <button type="submit" class="btn btn-primary btn-submit btn-post">提交申请</button>
                    </div>
                </div>
            </div>
            <div hidden class="dimmer-content withdraw">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">您的imToken钱包ETH地址</label>
                            <input type="text" class="form-control" name="imtoken_code" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <div class="form-label">您的imToken钱包ETH二维码，可选</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imtoken_qrcode" accept="image/*">
                                <label class="custom-file-label">二维码图片，选填</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">货币数量</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="0" name="number" />
                                <span class="input-group-append" id="basic-addon2">
                                    <span class="input-group-text"><?php echo htmlentities(app('config')->get('hello.unit')); ?></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">安全密码</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="******" name="safeword" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="small text-muted mt-2">
                        手续费：<span class="charge">0<?php echo htmlentities(app('config')->get('hello.unit')); ?></span>
                    </div>
                    <div class="ml-auto text-right">
                        <button type="submit" class="btn btn-primary btn-submit btn-post">提交申请</button>
                    </div>
                </div>
            </div>
            <div hidden class="dimmer-content exchange">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">货币数量</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="0" name="number" />
                                <span class="input-group-append" id="basic-addon2">
                                    <span class="input-group-text"><?php echo htmlentities(app('config')->get('hello.cash')); ?></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">安全密码</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="******" name="safeword" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="small text-muted mt-2">
                        可兑换：<span class="duihuan">0<?php echo htmlentities(app('config')->get('hello.unit')); ?></span>
                    </div>
                    <div class="ml-auto text-right">
                        <button type="submit" class="btn btn-primary btn-submit btn-post">提交申请</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title f1"><span class="table-title">充币记录</span></div>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-striped table-vcenter">
            <thead>
            <tr>
                <th>信息</th>
                <th width="30%" class="text-right pr-4">状态</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div hidden class="card-footer card-more">
        <div class="text-muted text-center">点击加载更多</div>
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

<script type="text/javascript">
    var charge = parseFloat('<?php echo htmlentities((isset($config['charge']) && ($config['charge'] !== '')?$config['charge']:0)); ?>');
    var duihuan = parseFloat('<?php echo htmlentities((isset($price) && ($price !== '')?$price:0.2)); ?>');
</script>
<script type="text/javascript" src="/static/js/imtoken.js"></script>

</body>
</html>
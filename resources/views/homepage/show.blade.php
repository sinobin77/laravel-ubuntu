
@extends("layout.main")

@section("diy-css")
    <style>
        .swiper-container { width: 100%; }
        .swiper-container img { display: block; width: 100%; }
        .weui-grid info  {
            position: relative;
            float: left;
            padding: 20px 10px;
            width: 50%;
            box-sizing: border-box;
        }
    </style>
@endsection

@section("content")
    <div class="weui-tab">
        <div class="weui-tab__bd">
            <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
                <!--h1>页面一</h1-->

                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="/images/swiper-111.jpg" /></div>
                        <div class="swiper-slide"><img src="/images/swiper-112.jpg" /></div>
                        <div class="swiper-slide"><img src="/images/swiper-113.jpg" /></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>

                <!-- ---------------- Grids ------------------------- -->

                <div class="weui-grids">
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_button.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Button
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_cell.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            List
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_toast.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Toast
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_dialog.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Dialog
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_progress.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Progress
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_article.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Article
                        </p>
                    </a>
                </div>

                <!-- ---------------- Grids 资讯 ------------------------- -->

                <!-- div class="weui-grids" >
                    <a href="" class="weui-grid-info js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_button.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Button
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_cell.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            List
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_cell.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Form
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_cell.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            Flex
                        </p>
                    </a>
                </div -->


                <div class="weui-panel weui-panel_access">
                    <div class="weui-panel__hd">重要资讯</div>
                    <div class="weui-panel__bd">
                        <div class="weui-media-box weui-media-box_text">
                            <h4 class="weui-media-box__title">十九届中央政治局常委同中外记者见面</h4>
                            <p class="weui-media-box__desc">10月25日，刚刚在中共十九届一中全会上当选的中共中央总书记习近平和中央政治局常委李克强、栗战书、汪洋、王沪宁、赵乐际、韩正在北京人民大会堂同采访十九大的中外记者见面。新华社记者 马占成</p>
                        </div>
                        <div class="weui-media-box weui-media-box_text">
                            <h4 class="weui-media-box__title">央行媒体：房住不炒奠定楼市调控主基调</h4>
                            <p class="weui-media-box__desc">住房定位写入十九大报告意味着，对于住房的功能已经彻底达成共识，也将奠定楼市调控的主基调，以此为基础构建房地产市场长效调控机制。</p>
                        </div>
                    </div>
                    <div class="weui-panel__ft">
                        <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
                            <div class="weui-cell__bd">查看更多</div>
                            <span class="weui-cell__ft"></span>
                        </a>
                    </div>
                </div>


                <!--  ---------------------  Panel -------------------------- -->

                <div class="weui-panel weui-panel_access">
                    <div class="weui-panel__hd">热门楼盘</div>
                    <div class="weui-panel__bd">
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-1.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万达茂</h4>
                                <p class="weui-media-box__desc">栖霞区-金鹰奥莱城           均价：28000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-2.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">弘阳燕江府</h4>
                                <p class="weui-media-box__desc">栖霞区-小庄彩虹广场        均价：32000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-3.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万科金域东方</h4>
                                <p class="weui-media-box__desc">江宁区-纯化            均价：23000元/平</p>
                            </div>
                        </a>
                    </div>
                    <div class="weui-panel__ft">
                        <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
                            <div class="weui-cell__bd">查看更多</div>
                            <span class="weui-cell__ft"></span>
                        </a>
                    </div>
                </div>


            </div>

            <div id="tab2" class="weui-tab__bd-item">
                <!-- h1>页面二</h1-->
                <div class="weui-search-bar" id="searchBar">
                    <form class="weui-search-bar__form">
                        <div class="weui-search-bar__box">
                            <i class="weui-icon-search"></i>
                            <input type="search" class="weui-search-bar__input" id="searchInput" placeholder="搜索" required="">
                            <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
                        </div>
                        <label class="weui-search-bar__label" id="searchText" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
                            <i class="weui-icon-search"></i>
                            <span>搜索</span>
                        </label>
                    </form>
                    <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
                </div>

                <!--  ---------------------  Panel -------------------------- -->

                <div class="weui-panel weui-panel_access">
                    <div class="weui-panel__hd">楼盘</div>
                    <div class="weui-panel__bd">
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-1.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万达茂</h4>
                                <p class="weui-media-box__desc">栖霞区-金鹰奥莱城           均价：28000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-2.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">弘阳燕江府</h4>
                                <p class="weui-media-box__desc">栖霞区-小庄彩虹广场        均价：32000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-3.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万科金域东方</h4>
                                <p class="weui-media-box__desc">江宁区-纯化            均价：23000元/平</p>
                            </div>
                        </a><a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-1.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万达茂</h4>
                                <p class="weui-media-box__desc">栖霞区-金鹰奥莱城           均价：28000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-2.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">弘阳燕江府</h4>
                                <p class="weui-media-box__desc">栖霞区-小庄彩虹广场        均价：32000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-3.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万科金域东方</h4>
                                <p class="weui-media-box__desc">江宁区-纯化            均价：23000元/平</p>
                            </div>
                        </a><a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-1.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万达茂</h4>
                                <p class="weui-media-box__desc">栖霞区-金鹰奥莱城           均价：28000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-2.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">弘阳燕江府</h4>
                                <p class="weui-media-box__desc">栖霞区-小庄彩虹广场        均价：32000元/平</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/panel-list-3.jpg" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">万科金域东方</h4>
                                <p class="weui-media-box__desc">江宁区-纯化            均价：23000元/平</p>
                            </div>
                        </a>
                    </div>
                    <div class="weui-panel__ft">
                        <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
                            <div class="weui-cell__bd">查看更多</div>
                            <span class="weui-cell__ft"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div id="tab3" class="weui-tab__bd-item">
                <!-- h1-- 页面三</h1 -->
                <div class="weui-search-bar" id="searchBar">
                    <form class="weui-search-bar__form">
                        <div class="weui-search-bar__box">
                            <i class="weui-icon-search"></i>
                            <input type="search" class="weui-search-bar__input" id="searchInput" placeholder="搜索" required="">
                            <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
                        </div>
                        <label class="weui-search-bar__label" id="searchText" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
                            <i class="weui-icon-search"></i>
                            <span>搜索</span>
                        </label>
                    </form>
                    <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
                </div>


                <!--  ---------------------  Panel -------------------------- -->

                <div class="weui-panel weui-panel_access">
                    <div class="weui-panel__hd">客户</div>
                    <div class="weui-panel__bd">
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">张三丰</h4>
                                <p class="weui-media-box__desc">138-1818-5678 &nbsp;&nbsp;&nbsp; 老客户 &nbsp;&nbsp; 住宅90平左右</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">李世民</h4>
                                <p class="weui-media-box__desc">139-2345-6688 &nbsp;&nbsp;&nbsp; 新客户 &nbsp;&nbsp; 别墅1000平以上</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">王力宏</h4>
                                <p class="weui-media-box__desc">158-6666-7777 &nbsp;&nbsp;&nbsp; 已认购 &nbsp;&nbsp; 临街商铺50平</p>
                            </div>
                        </a><a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">张三丰</h4>
                                <p class="weui-media-box__desc">138-1818-5678 &nbsp;&nbsp;&nbsp; 老客户 &nbsp;&nbsp; 住宅90平左右</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">李世民</h4>
                                <p class="weui-media-box__desc">139-2345-6688 &nbsp;&nbsp;&nbsp; 新客户 &nbsp;&nbsp; 别墅1000平以上</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">王力宏</h4>
                                <p class="weui-media-box__desc">158-6666-7777 &nbsp;&nbsp;&nbsp; 已认购 &nbsp;&nbsp; 临街商铺50平</p>
                            </div>
                        </a><a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">张三丰</h4>
                                <p class="weui-media-box__desc">138-1818-5678 &nbsp;&nbsp;&nbsp; 老客户 &nbsp;&nbsp; 住宅90平左右</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">李世民</h4>
                                <p class="weui-media-box__desc">139-2345-6688 &nbsp;&nbsp;&nbsp; 新客户 &nbsp;&nbsp; 别墅1000平以上</p>
                            </div>
                        </a>
                        <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                            <div class="weui-media-box__hd">
                                <img class="weui-media-box__thumb" src="/images/icon_nav_photo.png" alt="">
                            </div>
                            <div class="weui-media-box__bd">
                                <h4 class="weui-media-box__title">王力宏</h4>
                                <p class="weui-media-box__desc">158-6666-7777 &nbsp;&nbsp;&nbsp; 已认购 &nbsp;&nbsp; 临街商铺50平</p>
                            </div>
                        </a>
                    </div>
                    <div class="weui-panel__ft">
                        <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
                            <div class="weui-cell__bd">查看更多</div>
                            <span class="weui-cell__ft"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab4" class="weui-tab__bd-item">
                <!-- h1>页面四</h1 -->


                <!-- ---------------- Grids ------------------------- -->

                <div class="weui-grids">
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_button.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            业绩
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_cell.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            我的账户
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_toast.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            日程
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_dialog.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            工作报表
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_progress.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            排行榜
                        </p>
                    </a>
                    <a href="" class="weui-grid js_grid">
                        <div class="weui-grid__icon">
                            <img src="/images/icon_nav_article.png" alt="">
                        </div>
                        <p class="weui-grid__label">
                            我的报备
                        </p>
                    </a>
                </div>


                <div class="weui-cells__title">列表项</div>
                <div class="weui-cells">
                    <a class="weui-cell weui-cell_access" href="javascript:;">
                        <div class="weui-cell__bd">
                            <p>报备规则</p>
                        </div>
                        <div class="weui-cell__ft">
                        </div>
                    </a>
                    <a class="weui-cell weui-cell_access" href="javascript:;">
                        <div class="weui-cell__bd">
                            <p>常见问题</p>
                        </div>
                        <div class="weui-cell__ft">
                        </div>
                    </a><a class="weui-cell weui-cell_access" href="javascript:;">
                        <div class="weui-cell__bd">
                            <p>分享给好友</p>
                        </div>
                        <div class="weui-cell__ft">
                        </div>
                    </a>
                </div>


            </div>
        </div>

        <div class="weui-tabbar">
            <a href="#tab1" class="weui-tabbar__item weui-bar__item--on">
                <span class="weui-badge" style="position: absolute;top: -.4em;right: 1em;">8</span>
                <div class="weui-tabbar__icon">
                    <img src="/images/icon_nav_button.png" alt="">
                </div>
                <p class="weui-tabbar__label">首页</p>
            </a>
            <a href="#tab2" class="weui-tabbar__item">
                <div class="weui-tabbar__icon">
                    <img src="/images/icon_nav_msg.png" alt="">
                </div>
                <p class="weui-tabbar__label">楼盘</p>
            </a>
            <a href="#tab3" class="weui-tabbar__item">
                <div class="weui-tabbar__icon">
                    <img src="/images/icon_nav_article.png" alt="">
                </div>
                <p class="weui-tabbar__label">客户</p>
            </a>
            <a href="#tab4" class="weui-tabbar__item">
                <div class="weui-tabbar__icon">
                    <img src="/images/icon_nav_cell.png" alt="">
                </div>
                <p class="weui-tabbar__label">我</p>
            </a>
        </div>

    </div>
@endsection

@section("script")

    <script>
        $("#a").select({
            title: "选择职业",
            items: ["法官", "医生", "猎人", "学生", "记者", "其他"]
        });
    </script>

    <script src="/js/swiper.js"></script>
    <script>
        $(".swiper-container").swiper({
            loop: true,
            autoplay: 3000
        });
    </script>
@endsection
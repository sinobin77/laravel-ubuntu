
@extends("layout.main")

@section("diy-css")
@endsection

@section("content")
    <header class='demos-header'>
        <h1 class="demos-title">Toptip</h1>
    </header>

    <div class='demos-content-padded'>
        <a href="javascript:;" id='show-success' class="weui-btn weui-btn_primary">显示成功</a>
        <a href="javascript:;" id='show-error' class="weui-btn weui-btn_primary">显示失败</a>
        <a href="javascript:;" id='show-warning' class="weui-btn weui-btn_primary">显示警告</a>
    </div>
@endsection

@section("script")
    <script>
        $(document)
            .on('click', '#show-success', function() {
                $.toptip('操作成功', 'success');
            })
            .on('click', '#show-error', function() {
                $.toptip('操作失败', 'error');
            })
            .on('click', '#show-warning', function() {
                $.toptip('警告', 'warning');
            })
    </script>
@endsection

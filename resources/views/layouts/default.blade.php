<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', '图像识别')</title>
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('css/element-ui.css') }}">
</head>
<body>

<script src="{{ \Illuminate\Support\Facades\URL::asset('js/vue@2.6.12.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('js/element-ui.js') }}"></script>

<div>
    <el-container id="">
        @include('layouts._header')
    </el-container>
  <div>
    @yield('content')
  </div>
</div>
</body>
</html>

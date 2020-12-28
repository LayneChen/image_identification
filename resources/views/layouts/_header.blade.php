<el-header id="header">
    <el-menu :default-active="1" class="el-menu-demo" mode="horizontal" >
        <el-menu-item index="1">1 V 1</el-menu-item>
        <el-menu-item index="2">1 V N</el-menu-item>
        <el-menu-item index="3">申请接口</el-menu-item>
        <el-menu-item index="4">访问日志</el-menu-item>
    </el-menu>
</el-header>
<script>
    new Vue({
        el: '#header',
        data: function() {
            return { visible: false }
        }
    })
</script>

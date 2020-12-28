@extends('layouts.default')

@section('content')
    <script src="{{ \Illuminate\Support\Facades\URL::asset('js/index.js') }}"></script>

    <div>
        <div>
            <label>用户登录</label><br>
            <label>用户登录使用场景说明</label><br>
            <label>证件核对</label><br>
            <label>证件核对使用场景说明</label><br>
        </div>
        <div>
                <el-upload
                    action="https://jsonplaceholder.typicode.com/posts/"
                    list-type="picture-card"
                    :on-preview="handlePictureCardPreview"
                    :on-remove="handleRemove">
                    <i class="el-icon-plus"></i>
                </el-upload>
                <el-dialog :visible.sync="dialogVisible">
                    <img width="100%" :src="dialogImageUrl" alt="">
                </el-dialog>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: function() {
                return {
                    visible: false,
                    dialogImageUrl: '',
                    dialogVisible: false
                }
            },
            methods: {
                handleRemove(file, fileList) {
                    console.log(file, fileList);
                },
                handlePictureCardPreview(file) {
                    this.dialogImageUrl = file.url;
                    this.dialogVisible = true;
                }
            }
        })
    </script>
@stop


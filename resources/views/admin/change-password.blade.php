@extends('tamplate.admin')
@section('admin')
<div class="col-md-6">
    <div class="tile">
        <h3 class="tile-title">Change Password</h3>
        <div class="tile-body">
            <form class="row" method="post">
                <div class="form-group col-md-12">
                    <label class="control-label">Old Password</label>
                    <input type="password" name="password" id="password" placeholder="Old Password" class="form-control" autocomplete="off">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">New Password</label>
                    <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="New Password" autocomplete="off">
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" autocomplete="off" class="form-control">

                </div>

                <div class="form-group col-md-4 align-self-end">
                    <input type="Submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
  <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
@endsection
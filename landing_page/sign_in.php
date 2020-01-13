
<?php
    require('header.php');
?>

<style>
    /*
    @media only screen and (max-width: 700px) {
        .margin{
            margin : 0px 0px;
        }
    }
    @media only screen and (min-width: 700px) {
        .margin{
            margin : 0px 250px;
        }
    }
*/
</style>

<section class="h-100">
    <div class="align-items-center h-100">
        <div class="mx-auto col-md-5 col-sm-5">
            <div class="card" style="margin-top:10rem!important">
                <div class="card-header  text-center">
                    Insert Title Here
                </div>
                <div class="card-body">
                    <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-4 col-lg-3 col-form-label">Username</label>
                        <div class="col-sm-8 col-8 col-lg-9">
                        <input type="text" class="form-control" >
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-4 col-lg-3 col-form-label">Password</label>
                            <div class="col-sm-8 col-8 col-lg-9">
                            <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="offset-lg-5 offset-5 form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    require('footer.php');
?>

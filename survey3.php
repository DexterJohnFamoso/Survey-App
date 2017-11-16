<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>
<body>
<div class="container" id="cnt1">
    <div class="col-md-3">
    </div>

    <div class="col-md-6" id="panel1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="fa fa-question-circle">What is your feeling to live in this world?</span></h3>
            </div>
            <div class="panel-body two-col">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Happy
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Sad
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Angry
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well well-sm margin-bottom-none">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Inloved
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                 <label for="usr">Others specify</label>
                <input type="text" class="form-control" id="usr">
                <hr />

            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success btn-sm btn-block">
                            <span class="fa fa-send"></span>Submit</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-sm btn-block">
                            View Result</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
#cnt1 {
    background-color: rgba(215, 212, 212, 0.88);
    margin-bottom: 70px;
}

#panel1 {
    padding:20px;
}

.panel-body:not(.two-col) {
    padding: 0px;
}

.panel-body .radio, .panel-body .checkbox {
    margin-top: 0px;
    margin-bottom: 0px;
}

.panel-body .list-group {
    margin-bottom: 0;
}

.margin-bottom-none {
    margin-bottom: 0;
}
</style>
</body>
</html>
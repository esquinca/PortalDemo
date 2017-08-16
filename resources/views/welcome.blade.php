<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
        <!--Import bootstrap.css-->
        <link href="{{ asset('/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <!--Import materialize.css-->
        <link href="{{ asset('/plugins/materialize/css/materialize.css') }}" rel="stylesheet" type="text/css" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
         <!--Import materialize.js-->
        <script src="{{ asset('/plugins/materialize/js/materialize.js') }}" type="text/javascript"></script>

        <!--Import validator.js-->
        <script src="{{ asset('/js/validator.js') }}" type="text/javascript"></script>

        <style>
        </style>
    </head>
    <body>
        <div class="container">

            <div class="content">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="white-box">
                          <h3 class="box-title m-b-0">Iniciar sesión</h3>
                          <p class="text-muted m-b-30"> Bootstrap Form Validation</p>
                          <form data-toggle="validator">
                              <div class="form-group">
                                  <label for="inputEmail" class="control-label">Email</label>
                                  <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                  <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>

        </div>
    </body>
</html>

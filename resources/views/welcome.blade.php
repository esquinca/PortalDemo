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
        <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
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
                          <form data-toggle="validator" id="formZD" name="formZD" method="POST" action="http://{{ isset($_GET['sip']) ? $_GET['sip'] : '' }}:9997/login">
                              <div class="form-group">
                              {{ csrf_field() }}
                                  <label for="inputEmail" class="control-label">Email</label>
                                  <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                  <div class="help-block with-errors"></div>
                              </div>

                              <input type="hidden" id="username" name="username" value="GUESTOMR" />
                              <input type="hidden" id="password" name="password" value="123" />
                              <input type="hidden" id="sip" name="sip" value="{{ isset($_GET['sip']) ? $_GET['sip'] : '' }}" class="form-control" />
                              <input type="hidden" id="mac" name="mac" value="{{ isset($_GET['mac']) ? $_GET['mac'] : '' }}" class="form-control" />
                              <input type="hidden" id="client_mac" name="client_mac" value="{{ isset($_GET['client_mac']) ? $_GET['client_mac'] : '' }}" class="form-control" />
                              <input type="hidden" id="uip" name="uip" value="{{ isset($_GET['uip']) ? $_GET['uip'] : '' }}" class="form-control" />
                              <input type="hidden" id="ssid" name="ssid" value="{{ isset($_GET['ssid']) ? $_GET['ssid'] : '' }}" class="form-control" />
                              <input type="hidden" id="vlan" name="vlan" value="{{ isset($_GET['vlan']) ? $_GET['vlan'] : '' }}" class="form-control" />

                              <input type="hidden" id="res" name="res" value="{{ isset($_GET['res']) ? $_GET['res'] : '' }}" class="form-control" />
                              <input type="hidden" id="auth" name="auth" value="{{ isset($_GET['auth']) ? $_GET['auth'] : '' }}" class="form-control">


                              <div class="form-group">
                                  <button type="button" id="btnsubmit" name="btnsubmit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>

        </div>
    </body>
    <script src="{{ asset('/js/system.js') }}" type="text/javascript"></script>
</html>

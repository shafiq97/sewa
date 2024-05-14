<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title></title>

  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

  <style>
    #success_message {
      display: none;
    }
  </style>

</head>

<body translate="no">
  <div class="container">

    <form class="well form-horizontal" action=" " method="post" id="contact_form">
      <fieldset>

        <!-- Form Name -->
        <legend>Sewaan Tapak Stor <small>(Storage Space Rental)</small></legend>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Nama Penuh <small>(Full Name)</small></label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="full_name" placeholder="Nama Penuh (Full Name)" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input for Gender -->
        <div class="form-group">
          <label class="col-md-4 control-label">Jantina <small>(Gender)</small></label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <select name="gender" class="form-control selectpicker">
                <option value="male">Lelaki (Male)</option>
                <option value="female">Perempuan (Female)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Nombor Matrik <small>(Matric Number)</small></label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="matric_number" placeholder="Nombor Matrik (Matric Number)" class="form-control" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Nombor Kad Pengenalan <small>(IC Number)</small></label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="ic_number" placeholder="Nombor Kad Pengenalan (IC Number)" class="form-control" type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Nombor Telefon <small>(Phone Number)</small></label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="phone" placeholder="Nombor Telefon (Phone Number)" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Select Basic -->

        <div class="form-group">
          <label class="col-md-4 control-label">Negeri Menetap <small>(State of residence)</small></label>
          <div class="col-md-4 selectContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="state" class="form-control selectpicker">
                <option value=" ">Sila pilih negeri anda (Please select your state)</option>
                <option>Johor</option>
                <option>Kedah</option>
                <option>Kelantan</option>
                <option>Melaka</option>
                <option>Negeri Sembilan</option>
                <option>Pahang</option>
                <option>Perak</option>
                <option>Perlis</option>
                <option>Pulau Pinang</option>
                <option>Sabah</option>
                <option>Sarawak</option>
                <option>Selangor</option>
                <option>Terengganu</option>
                <option>Wilayah Persekutuan Kuala Lumpur</option>
                <option>Wilayah Persekutuan Labuan</option>
                <option>Wilayah Persekutuan Putrajaya</option>
              </select>
            </div>
          </div>
        </div>


        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Berjaya <i class="glyphicon glyphicon-thumbs-up"></i> Terima kasih kerana menghubungi kami, kami akan kembali kepada anda secepat mungkin. (Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.)</div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-warning">Hantar <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>
  </div><!-- /.container -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
  <script id="rendered-js">
    $(document).ready(function() {
      $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
          first_name: {
            validators: {
              stringLength: {
                min: 2
              },

              notEmpty: {
                message: 'Sila masukkan nama pertama anda (Please supply your first name)'
              }
            }
          },



          last_name: {
            validators: {
              stringLength: {
                min: 2
              },

              notEmpty: {
                message: 'Sila masukkan nama terakhir anda (Please supply your last name)'
              }
            }
          },



          email: {
            validators: {
              notEmpty: {
                message: 'Sila masukkan alamat emel anda (Please supply your email address)'
              },

              emailAddress: {
                message: 'Sila masukkan alamat emel yang sah (Please supply a valid email address)'
              }
            }
          },



          address: {
            validators: {
              stringLength: {
                min: 8
              },

              notEmpty: {
                message: 'Sila masukkan alamat jalan anda (Please supply your street address)'
              }
            }
          },



          city: {
            validators: {
              stringLength: {
                min: 4
              },

              notEmpty: {
                message: 'Sila masukkan bandar anda (Please supply your city)'
              }
            }
          },



          state: {
            validators: {
              notEmpty: {
                message: 'Sila pilih negeri anda (Please select your state)'
              }
            }
          },



          zip: {
            validators: {
              notEmpty: {
                message: 'Sila masukkan kod zip anda (Please supply your zip code)'
              },

              zipCode: {
                country: 'US',
                message: 'Sila masukkan kod zip yang sah (Please supply a valid zip code)'
              }
            }
          },



          comment: {
            validators: {
              stringLength: {
                min: 10,
                max: 200,
                message: 'Sila masukkan sekurang-kurangnya 10 aksara dan tidak melebihi 200 aksara (Please enter at least 10 characters and no more than 200)'
              },

              notEmpty: {
                message: 'Sila berikan keterangan projek anda (Please supply a description of your project)'
              }
            }
          }
        }
      }).





      on('success.form.bv', function(e) {
        $('#success_message').slideDown({
          opacity: "show"
        }, "slow"); // Do something ...
        $('#contact_form').data('bootstrapValidator').resetForm();

        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function(result) {
          console.log(result);
        }, 'json');
      });
    });
    //# sourceURL=pen.js
  </script>


</body>

</html>

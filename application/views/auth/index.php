<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6">
          <div
            class="card p-4"
            style="border-radius: 10px; box-shadow: 5px 10px #dbdada"
          >
            <div class="card-body">
              <div class="text-center">
                <h1>
                  <i class="bx bxl-c-plus-plus icon"></i>
                </h1>
                <h4
                  class="card-title mt-4"
                  style="font-size: 24px; color: #202124; font-weight: 400"
                >
                  Login
                </h4>
                <p
                  class="card-subtitle mb-5"
                  style="font-size: 16px; line-height: 1.5"
                >
                  Gunakan Akun Clinic Anda
                </p>
              </div>
              <div class="row">
                <div class="col-12">
                  <?php if (validation_errors()): ?>
                  <div class="alert alert-danger" role="alert">
                      <?=validation_errors();?>
                  </div>
                  <?php endif?>
                  <?php if ($this->session->flashdata('gagal')): ?>
                  <div class="alert alert-danger" role="alert">
                      <?=$this->session->flashdata('gagal');?>
                  </div>
                  <?php endif?>
                  <form method="POST">
                    <div class="form-group">
                      <label for="exampleInputEmail1" class="text-primary"
                        >Email</label
                      >
                      <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Email"
                        name="email"
                        autofocus
                      />
                      <small id="emailHelp" class="form-text text-muted"
                        >We'll never share your email with anyone else.</small
                      >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="text-primary"
                        >Password</label
                      >
                      <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword1"
                        placeholder="Password"
                        name="password"
                      />
                    </div>
                    <div class="form-group form-check align-content-center">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                      />
                      <label
                        class="form-check-label text-muted"
                        for="exampleCheck1"
                        >Show</label
                      >
                    </div>
                    <button type="submit" class="btn btn-primary float-right">
                      Submit
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

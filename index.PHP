<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CatFeeder</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <style>
  body, h1, h2, h3, h4
  {
    font-family: Comfortaa
  }
</style>
</head>



<!-- About Section style="font-family: Comfortaa" -->
<section class="bg-primary text-white mb-0"  id="about"> 
  <div class="container">
    <h1 class="text-center text-uppercase text-white">Отчет</h1>
      <table class="table">
      <thead>

      <!-- <tr v-for="row in list"> <td>{{row.name }}</td> <td>{{ row.lastname}} </td> <td>{{row.email}} </td> </tr> -->

      <tr>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Почта</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>Иван</td>
      <td>Николайчук</td>
      <td>ivan@example.com</td>
      </tr>
      <tr>
      <td>Мария</td>
      <td>Иванова</td>
      <td>mary@example.com</td>
      </tr>
      <tr>
      <td>Юлия</td>
      <td>Петренко</td>
      <td>julia@example.com</td>
      </tr>
      </tbody>
      </table>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">Время роботы кормушки</h2>
    <hr class="star-dark mb-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
        <form name="sentMessage" id="contactForm" novalidate="novalidate">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>От</label>
              <input class="form-control" id="name" type="text" placeholder="От" required="required" data-validation-required-message="Пожалуйста введи время с которого кормушка будет работать">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>До</label>
              <input class="form-group", id="email" type="text" placeholder="До" required="required" data-validation-required-message="Пожалуйста введи время после которого кормушка не будет работать">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Изменить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <h4 class="text-uppercase mb-4">Мы тут</h4>
    <ul class="list-inline mb-0">
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-odnoklassniki"></i>
                </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-vk"></i>
                </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-telegram"></i>
                </a>
      </li>
    </ul>
  </div>
</footer>

<div class="copyright py-4 text-center text-white">
  <div class="container">
    <small>No Copyright &copy; CatFeeder 2018</small>
  </div>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

</body>

</html>
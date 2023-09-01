<?php
if($_SESSION['perfil'] == 1):
  ?>
  <script>
    $('#mCompras').removeClass('hide').addClass('active');
  </script>
  <?php
elseif ($_SESSION['perfil'] == 2):
  ?>
  <script>
    $('#mSeguranca').removeClass('hide');
    $('#mSeguranca').addClass('active');
  </script>
  <?php
elseif ($_SESSION['perfil'] == 3):
  ?>
  <script>
    $('#mPrivacidade').removeClass('hide');
    $('#mPrivacidade').addClass('active');
  </script>
  <?php
elseif ($_SESSION['perfil'] == 4):
  ?>
  <script>
    $('#mGestao').removeClass('hide');
    $('#mGestao').addClass('active');
  </script>
  <?php
elseif ($_SESSION['perfil'] == 5):
  ?>
  <script>
    $('#mRisco').removeClass('hide');
    $('#mRisco').addClass('active');
  </script>
  <?php
elseif ($_SESSION['perfil'] == 6):
  ?>
  <script>
    $('#mRiscoSeg').removeClass('hide');
    $('#mRiscoSeg').addClass('active');
  </script>
  <?php
elseif ($_SESSION['perfil'] == 7):
  ?>
  <script>
    $('#mUsuarios').removeClass("hide");
    $('#mCompras').removeClass("hide");
    $('#mGestao').removeClass("hide");
    $('#mPrivacidade').removeClass("hide");
    $('#mSeguranca').removeClass("hide");
    $('#mRisco').removeClass("hide");
    $('#mRiscoSeg').removeClass("hide");
  </script>
  <?php
endif;
?>
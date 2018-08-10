<?php
    $upload_dir = 'uploads';
    if(is_uploaded_file($_FILES['upload']['tmp_name'])){
        $tmp_name = $_FILES['upload']['tmp_name'];
        $name = basename($_FILES['upload']['name']);

        move_uploaded_file($tmp_name, "$upload_dir/01");
    }

    system("./compile");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>assist translate</title>

        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css' integrity='sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ' crossorigin='anonymous'>
    <head>

    <body>
        <div class='row'>
            <div class='col-sm-12'>
                <div class="navbar navbar-inverse" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="https://www.minwt.com">Minwt</a>
                        </div>
                    
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">選單1</a></li>
                                <li class="dropdown-submenu"><a href="#" data-toggle="dropdown" >選單2 </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">次選單1</a></li>
                                    <li class="dropdown-submenu"><a href="#" data-toggle="dropdown">次選單2</a>
                                        <ul class="dropdown-menu">
                                        <li><a href="#">次次選單1</a></li>
                                        <li><a href="#">次次選單2</a></li>
                                        <li class="dropdown-submenu"><a href="#" data-toggle="dropdown">次次選單3</a>
                                            <ul class="dropdown-menu">
                                            <li><a href="#">次次次選單1</a></li>
                                            <li><a href="#">次次次選單2</a></li>
                                            </ul>
                                        </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">次選單3</a></li>
                                </ul>
                                </li>
                                <li><a href="#">選單3</a></li>
                                <li><a href="#">選單4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-sm-2'></div>

            <div class='col-sm-8'>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>text</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="finish.php" method="POST" target="_blank" enctype="multipart/form-data">
                            <?php
                                $file = file("compile_dir/02");
                                $count = 1;
                                foreach($file as $line){
                                    echo "<tr>";
                                    echo "<td>$count</td>";
                                    echo "<td>$line</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>";
                                    echo "<div class='input-group'>";
                                    echo "<div class='input-group-prepend'>";
                                    echo "<span class='input-group-text'>Translate text</span>";
                                    echo "</div>";
                                    echo "<textarea class='form-control' name='XD[]' aria-label='translate-test'></textarea>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $count++;
                                }
                            ?>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="upload">
                            </div>
                        </form>
                    </tbody>
                </table>
            </div>

            <div class='col-sm-2'></div>
            <div class='col-sm-12'></div>
        </div>
    </body>
</html>
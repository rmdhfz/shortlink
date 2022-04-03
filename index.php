<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortlink - App | Universitas Pamulang</title>
    <link rel="icon" href="img/shortlink.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen, projection">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
    </script>
    <style type="text/css">
        #box {
            margin-top: 10rem;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">Shortlink App</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="modal-trigger" href="#modal-login">Signin</a></li>
                <li><a href="">Signup</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div id="box">
            <h3> <b> The Shortest Link Shortener </b></h3>
            <form id="form-shortlink" class="col s12" method="post" autocomplete="off" accept-charset="utf-8">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="url" name="url" type="url" class="validate" placeholder="https://yourdomain.id/very-long-link" required>
                        <label for="url">Long URL</label>
                    </div>
                </div>
                <button type="submit" class="btn waves-effect waves-light blue" style="width: 100%;">SHORT IT!</button>
            </form>
        </div>
    </div>
    <!-- Modal Structure -->
    <div id="modal-login" class="modal">
        <div class="modal-content">
            <h4>Form Login</h4>
            <div class="row">
                <form id="form-login" class="col s12" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</body>
<script type="text/javascript">
    const APPURL = "pendek.id", API = "http://localhost:1000";

    $("#form-shortlink").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: API+"/link/submit",
            data: JSON.stringify({
                "longurl": $("#url").val()
            }),
            headers: {
                "Content-Type": 'application/json'
            },
            dataType: "json",
            type: "post"
        }).done((data, status, xhr) => {
            if (data.status == 201) {
                 M.toast({html: 'Success!', classes: 'rounded'});
            }
        })
    });
</script>
</html>
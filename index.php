<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortlink | Universitas Pamulang</title>
    <link rel="icon" href="img/shortlink.png">
    <meta name="keyword" content="url shortener, pendek.id, penyingkat url">
    <meta name="description" content="Make your long links into short just in one click, or create your personal / business microsite easily.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen, projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" media="screen, projection">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" media="screen, projection">
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="css/loading.css">
    <script>
        $(document).ready(function(){
            $('.modal').modal();
            $('.sidenav').sidenav();
            $('.dropdown-trigger').dropdown();
        });
    </script>
    <style type="text/css">
        #box, #box-al {
            margin-top: 8rem;
        }
        nav {
            background-color: #2196F3 !important;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo">Shortlink</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="modal-trigger" href="#modal-signin" id="sign-in">Signin</a></li>
                <li><a class="modal-trigger" href="#modal-signup" id="sign-up">Signup</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a class="modal-trigger" href="#modal-signin" id="sign-in-mobile">Signin</a></li>
        <li><a class="modal-trigger" href="#modal-signup" id="sign-up-mobile">Signup</a></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col s12" id="box">
                <h4> <b> The Link Shortener </b></h4> <br>
                <form id="form-shortlink" class="col s12" method="post" autocomplete="off" accept-charset="utf-8">
                <div class="row">
                        <div class="input-field col s12">
                            <input id="namelink" name="namelink" type="text" class="validate" placeholder="my facebook" required>
                            <label for="namelink">Link Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="url" name="url" type="url" class="validate" placeholder="https://yourdomain.id/very-long-link" required>
                            <label for="url">Long URL</label>
                        </div>
                        <div class="col s12">
                            <p id="result"></p>
                        </div>
                    </div>
                    <button type="submit" class="btn waves-effect waves-light blue" style="width: 100%;">SHORT IT!</button>
                </form>  
            </div>
            <div class="col s6" id="box-al" hidden="true">
                <h4><b>My Shortlink</b></h4>
                <table id="mytable" class="display responsive nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Short</th>
                            <th>Alias</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div><br>
        <center>Powered by Universitas Pamulang</center>
    </div>

    <div id="modal-signin" class="modal">
        <div class="modal-content">
            <h4><b>Form Login</b></h4>
            <div class="divider"></div><br>
            <div class="row">
                <form id="form-login" class="col s12" method="post" autocomplete="off">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" name="username" type="text" class="validate" required pattern="[a-zA-Z0-9\s]{3,20}" minlength="3" maxlength="20">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate" required pattern="[a-zA-Z0-9\s]{3,20}" minlength="3" maxlength="20">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button id="login" type="submit" hidden></button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
            <a href="#!" onclick="$('#login').click()" class="btn blue white-text waves-effect waves-light btn-flat">
                Login
            </a>
        </div>
    </div>

    <div id="modal-signup" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4><b>Form Signup</b></h4>
            <div class="divider"></div><br>
            <div class="row">
                <form id="form-signup" class="col s12" method="post" autocomplete="off">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" name="name" type="text" class="validate" required pattern="[a-zA-Z0-9\s]{3,20}" minlength="3" maxlength="20">
                            <label for="name">Full Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="uname" name="username" type="text" class="validate" required pattern="[a-zA-Z0-9\s]{3,20}" minlength="3" maxlength="20">
                            <label for="uname">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pwd" name="password" type="password" class="validate" required pattern="[a-zA-Z0-9\s]{3,20}" minlength="3" maxlength="20">
                            <label for="pwd">Password</label>
                        </div>
                    </div>
                    <button id="btn-signup" type="submit" hidden></button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
            <a href="#!" onclick="$('#btn-signup').click()" class="btn blue white-text waves-effect waves-light btn-flat">
                Signup
            </a>
        </div>
    </div>

    <div id="modal-editlink" class="modal modal-fixed-footer" style="height: 30%">
        <div class="modal-content">
            <h4><b>Form Edit Link</b></h4>
            <div class="divider"></div><br>
            <div class="row">
                <form id="form-editlink" class="col s12" method="post" autocomplete="off">
                    <input type="hidden" id="link_id" name="link_id">
                    <input type="hidden" id="linkname" name="linkname">
                    <input type="hidden" id="longurl" name="longurl">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="defaultlink" name="defaultlink" type="text" disabled="true" value="https://pendek.id" readonly="true" style="cursor: not-allowed">
                            <label for="defaultlink">Default</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="aliasurl" name="aliasurl" autofocus="true" type="text" class="validate" required pattern="[a-zA-Z0-9]{3,15}" minlength="3" maxlength="15" placeholder="my-custom-link">
                            <label for="aliasurl">Custom</label>
                        </div>
                    </div>
                    <button id="btneditlink" type="submit" hidden></button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
            <a href="#!" onclick="$('#btneditlink').click()" class="btn blue white-text waves-effect waves-light btn-flat">
                Submit Changes
            </a>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {

        const APPURL = "https://pendek.id", API = "http://localhost:1000";
        init();
        function init(){
            islogin = getItemWithExpiry('is_login');
            if (islogin) {
                $("#box-al").prop('hidden', false);
                $("#box").removeClass('col s12').addClass('col s6');
                name = getItemWithExpiry('name');
                $("#sign-in, #sign-in-mobile").text(`Welcome, ${name}!`).prop('href', '#');
                $("#sign-up, #sign-up-mobile").text("Logout").prop('href', '#').click(function(event) {
                    if (confirm("Are you sure want to logout ?")) {
                        $("body").addClass('loading');
                        window.localStorage.clear();
                        window.location.reload(0);
                        setTimeout(function(){
                            $("body").removeClass('loading');
                        }, 1000);
                    }
                });
            }
            console.log("init");
        }

        function setItemWithExpiry(key, value, ttl = 2592000000) {
            const now = new Date();
            const item = {
                value: value,
                expiry: now.getTime() + ttl
            };
            localStorage.setItem(key, JSON.stringify(item));
        }

        function getItemWithExpiry(key) {
            const itemStr = localStorage.getItem(key);
            if (!itemStr) {
                return null;
            }
            const item = JSON.parse(itemStr),
                  now = new Date();
            if (now.getTime() > item.expiry) {
                localStorage.removeItem(key);
                return null;
            }
            return item.value;
        }
        let table;
        if (getItemWithExpiry('is_login')) {
            table = $("#mytable").DataTable({
                searching: false,
                responsive: {
                    detail: false
                },
                fixedHeader: true,
                pageLength: 5,
                ajax: {
                    url: API+"/link/me/" + getItemWithExpiry('user_id'),
                    type: "get",
                    dataSrc: function(json) {
                        return json.response.data;
                    }
                },
                columns: [
                    { 
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return ++meta.row;
                        },
                        "defaultContent": ""
                    },
                    { 
                        "data": "name",
                        "defaultContent": ""
                    },
                    { 
                        "data": "shorturl",
                        "defaultContent": "",
                        "render": function(data, type, row) {
                            let link = "";
                            if (row.aliasurl) {
                                link = `<a href="${APPURL}/${row.aliasurl}?utm_source=pendek.id" target="_blank">${APPURL}/${row.aliasurl}</a>`;
                            }else{
                                link = `<a href="${APPURL}/${row.shorturl}?utm_source=pendek.id" target="_blank">${APPURL}/${row.shorturl}</a>`;
                            }
                            return link;
                        }
                    },
                    { 
                        "data": "aliasurl",
                        "render": function(data, type, row) {
                            return data ? data.split("\n").join("<br/>") : "-";
                        },
                        "defaultContent": ""
                    },
                    {
                        "data":"id",
                        "render": function(data, type, row) {
                            return `
                                <a id="editlink" data-id="${row.id}" data-name="${row.name}" data-short="${row.shorturl}" data-long="${row.longurl}" class='btn btn-small blue white-text btn-flat waves-effect waves-light'> edit </a>
                                <a id="deletelink" data-id="${row.id}" data-name="${row.name}" data-short="${row.shorturl}" data-long="${row.longurl}" class='btn btn-small red white-text btn-flat waves-effect waves-light'> delete </a>
                            `;
                        },
                        "defaultContent": ""
                    }
                ]
            });
        }

        $("#form-shortlink").submit(function(event) {
            event.preventDefault();
            islogin = getItemWithExpiry('is_login');
            $("body").addClass('loading');
            if (islogin) {
                data = JSON.stringify({
                    "name": $("#namelink").val(),
                    "longurl": $("#url").val(),
                    "user_id": getItemWithExpiry("user_id")
                });
            }else{
                data = JSON.stringify({
                    "longurl": $("#url").val(),
                });
            }
            $.ajax({
                url: API+"/link/submit",
                data: data,
                headers: {
                    "Content-Type": 'application/json'
                },
                dataType: "json",
                type: "post"
            }).done((data, status, xhr) => {
                if (data.status == 201) {
                    $("body").removeClass('loading');
                    const response = data.response.data;
                    M.toast({html: 'Yeay. Your link has been shortened!', classes: 'rounded'});
                    $("#result").html(
                        `
                        Result: <a href='https://${APPURL}/${response.short_url}' target='_blank'>https://${APPURL}/${response.short_url}</a> - 
                        
                        <i id="editlink" data-id="${response.id}" data-name="${response.name}" data-short="${response.short_url}" data-long="${response.long_url}" class='material-icons tiny'> edit </i>
                        <i id="sharelink" data-id="${response.id}" data-name="${response.name}" data-short="${response.short_url}" data-long="${response.long_url}" class='dropdown-trigger tiny material-icons' data-target='sharelist'> share </i>

                        <ul id='sharelist' class='dropdown-content'>
                            <li><a href="#!">one</a></li>
                            <li><a href="#!">two</a></li>
                            <li><a href="#!">three</a></li>
                        </ul>`
                    );
                    table.ajax.reload();
                }
            }).fail((xhr, status, err) => {
                table.ajax.reload();
                $("body").removeClass('loading');
                if (xhr.status == 400) {
                    M.toast({html: 'Ups. Your link is invalid :('});
                }
            });
        });
        function PrepareEditMyLink(link_id, name, short_url, long_url) {
            if (!link_id) {
                return false;
            }
            $("#modal-editlink").modal('open');
            $("#link_id").val(link_id);
            $("#linkname").val(name);
            $("#defaultlink").val(`${APPURL}/${short_url}`);
            $("#aliasurl").val(short_url);
            $("#longurl").val(long_url);
        }
        function ShareMyLink(link_id, short_url) {
            if (!link_id) {
                return false;
            }
            $('.dropdown-trigger').dropdown('open');
        }
        $("#result").on('click', '#editlink', function(){
            PrepareEditMyLink($(this).data('id'), $(this).data('name'), $(this).data('short'), $(this).data('long'));
        });
        $("#result").on('click', '#sharelink', function(){
            ShareMyLink($(this).data('id'), $(this).data('short'));
            $('.dropdown-trigger').dropdown('open');
        });
        $("#mytable").on('click', '#editlink', function(){
            PrepareEditMyLink($(this).data('id'), $(this).data('name'), $(this).data('short'), $(this).data('long'));
        });
        $("#mytable").on('click', '#deletelink', function(){
            DeleteMyLink($(this).data('id'), $(this).data('short'));
        });
        $("#form-editlink").submit(function(event){
            event.preventDefault();
            $("body").addClass('loading');
            $.ajax({
                url: API + "/link/custom/" + $("#link_id").val(),
                type: "PUT",
                data: JSON.stringify({
                    "name": $("#linkname").val(),
                    "aliasurl": $("#aliasurl").val(),
                    "longurl": $("#longurl").val()
                }),
                dataType: "json",
                headers: {
                    "Content-Type": 'application/json'
                },
            }).done((data, status, xhr) => {
                $("body").removeClass('loading');
                if (data.status == 201) {
                    M.toast({html: 'Yeay. Your custom link is here!', classes: 'rounded'});
                    table.ajax.reload();
                }
            }).fail((xhr, status, err) => {
                $("body").removeClass('loading');
                table.ajax.reload();
                if (xhr.status == 400) {
                    M.toast({html: 'Ups. Your link is invalid :('});
                }else if (xhr.status == 302) {
                    M.toast({html: 'Sorry. Your custom link is already taken!', classes: 'rounded'});
                    table.ajax.reload();
                }
            })
        });
        async function login(username, password) {
            $("body").addClass('loading');
            await $.ajax({
                url: API+"/user/login",
                data: JSON.stringify({
                    "username": username,
                    "password": password
                }),
                headers: {
                    "Content-Type": 'application/json'
                },
                dataType: "json",
                type: "post"
            }).done((data, status, xhr) => {
                if (data.status == 200) {
                    const response = data.response;
                    M.toast({html: 'You are successfully logged in!', classes: 'rounded'});
                    $("body").removeClass('loading');
                    setItemWithExpiry('is_login', true);
                    setItemWithExpiry('is_login', true);
                    setItemWithExpiry('username', $("#username").val());
                    setItemWithExpiry('name', response.data.name);
                    setItemWithExpiry('user_id', response.data.id);
                    init();
                    $("#modal-signin, #modal-signup").modal('close');
                    setTimeout(function(){
                        window.location.reload(0);
                    }, 1000);
                }
            }).fail((xhr, status, err) => {
                $("body").removeClass('loading');
                if (xhr.status == 404 || xhr.status == 400) {
                    M.toast({html: 'Username or password is wrong!', classes: 'rounded'});
                }
            })
        }
        $("#form-login").submit(function(event) {
            event.preventDefault();
            M.toast({html: 'Please wait...', classes: 'rounded'});
            const username = $("#username").val(), password = $("#password").val();
            login(username, password);
        });
        $("#form-signup").submit(function(event) {
            event.preventDefault();
            M.toast({html: 'Please wait...', classes: 'rounded'});
            $.ajax({
                url: API+"/user/signup",
                data: JSON.stringify({
                    "name": $("#name").val(),
                    "username": $("#uname").val(),
                    "password": $("#pwd").val()
                }),
                headers: {
                    "Content-Type": 'application/json'
                },
                dataType: "json",
                type: "post"
            }).done((data, status, xhr) => {
                if (data.status == 201) {
                    M.toast({html: 'Congratulations, your account has been successfully created!', classes: 'rounded'});
                    M.toast({html: 'Login... please wait', classes: 'rounded'});
                    setTimeout(function(){
                        login($("#uname").val(), $("#pwd").val());
                    }, 1000);
                }
            }).fail((xhr, status, err) => {
                if (xhr.status == 404 || xhr.status == 400) {
                    M.toast({html: 'Bad Request!', classes: 'rounded'});
                }
            })
        });
    });
</script>
</html>
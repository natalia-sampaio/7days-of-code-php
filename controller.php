<?php
require "view.php";

function do_home()
{
    http_response_code(200);
    return render_view('register.view');
}

function do_register()
{
    http_response_code(200);
    return render_view('register.view');
}

function do_login()
{
    http_response_code(200);
    return render_view('login.view');
}

function do_not_found()
{
    http_response_code(404);
    return render_view('not_found.view');
}


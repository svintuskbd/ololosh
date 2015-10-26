<?php

/* adminTemplateView.php */
class __TwigTemplate_0246bd80be2e48280715d866588713005b03c947584884fdec6de50223e1f17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"/css/simple-sidebar.css\" rel=\"stylesheet\">
    <script type=\"text/javascript\" src=\"/ckeditor/ckeditor.js\"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\">
            <div class=\"title_sidebar\">
            <?php 
                if(isset(\$_SESSION['userName'])){
                    echo '<h4>Вы вошли как: <a href=\"/admin\">'.\$_SESSION['userName'].'</a></h4>';
                }
             ?>
            </div>
            <ul class=\"sidebar-nav\">
                <li class=\"sidebar-brand\">
                    <a href=\"/logout\">Выйти</a>
                </li>
                <li>
                    <a href=\"/admin\">Главная</a>
                </li>
                <li>
                    <a href=\"/admin?portfolio\">Портфолио</a>
                </li>
                <li>
                    <a href=\"/admin?posts\">Новости</a>
                </li>
                <li>
                    <a href=\"/admin?page\">Страницы</a>
                </li>
                <li>
                    <a href=\"/admin?manager_user\">Пользователи</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id=\"page-content-wrapper\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "                        <?php include 'application/views/'.\$content_view; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src=\"/js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"/js/bootstrap.min.js\"></script>

    <!-- Menu Toggle Script -->

</body>

</html>";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "adminTemplateView.php";
    }

    public function getDebugInfo()
    {
        return array (  121 => 72,  118 => 71,  94 => 73,  92 => 71,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Simple Sidebar - Start Bootstrap Template</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="/css/simple-sidebar.css" rel="stylesheet">*/
/*     <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div id="wrapper">*/
/* */
/*         <!-- Sidebar -->*/
/*         <div id="sidebar-wrapper">*/
/*             <div class="title_sidebar">*/
/*             <?php */
/*                 if(isset($_SESSION['userName'])){*/
/*                     echo '<h4>Вы вошли как: <a href="/admin">'.$_SESSION['userName'].'</a></h4>';*/
/*                 }*/
/*              ?>*/
/*             </div>*/
/*             <ul class="sidebar-nav">*/
/*                 <li class="sidebar-brand">*/
/*                     <a href="/logout">Выйти</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin">Главная</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?portfolio">Портфолио</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?posts">Новости</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?page">Страницы</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/admin?manager_user">Пользователи</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /#sidebar-wrapper -->*/
/* */
/*         <!-- Page Content -->*/
/*         <div id="page-content-wrapper">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         {% block content %}*/
/*                         {% endblock %}*/
/*                         <?php include 'application/views/'.$content_view; ?>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /#page-content-wrapper -->*/
/* */
/*     </div>*/
/*     <!-- /#wrapper -->*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="/js/jquery.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Menu Toggle Script -->*/
/* */
/* </body>*/
/* */
/* </html>*/
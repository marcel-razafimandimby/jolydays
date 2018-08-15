<?php

/* base.html.twig */
class __TwigTemplate_a3ff094b32a2ba9e6cb768f0d5f308d2bdf1043689bcf514fd663fa5586e87c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"jolydays\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_jolydays_white.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo_home\" width=\"130px\" height=\"30px\"></a>
        </div>
        
      </div>
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Sommaire</a></li>
            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\">Hello world</a></li>
            <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_param_route", array("_locale" => "fr", "year" => "2018", "slug" => "publicite-auto", "_format" => "html")), "html", null, true);
        echo "\">Configuration route</a></li>
            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_categorie_index");
        echo "\">Categorie</a>
              <ul>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_categorie_index");
        echo "\">Liste</a></li>
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_categorie_new");
        echo "\">Ajouter</a></li>
                </ul>
            </li>
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_annonce_index");
        echo "\">Annonce</a>
              <ul>
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_annonce_index");
        echo "\">Liste</a></li>
                    <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_annonce_new");
        echo "\">Ajouter</a></li>
                </ul>
            </li>
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_annonce_liste");
        echo "\">Toutes les annonces</a></li>
          </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
           ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/docs.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function deleteList(){
            if(confirm('Voulez-vous vraiement le supprimer?')){
                return true;
            }else{
                return false;
            }
        }
    </script>
    ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue Jolydays.com";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 87,  200 => 66,  182 => 10,  169 => 88,  167 => 87,  154 => 77,  150 => 76,  139 => 67,  137 => 66,  130 => 62,  122 => 57,  118 => 56,  113 => 54,  105 => 49,  101 => 48,  96 => 46,  92 => 45,  88 => 44,  75 => 34,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"jolydays\">
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\">
    <title>{% block title %}Bienvenue Jolydays.com{% endblock %}</title>
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('images/logo_jolydays_white.png') }}\" alt=\"\" class=\"logo_home\" width=\"130px\" height=\"30px\"></a>
        </div>
        
      </div>
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Sommaire</a></li>
            <li><a href=\"{{ path('main_homepage')}}\">Hello world</a></li>
            <li><a href=\"{{ path('check_param_route',{'_locale':'fr','year':'2018','slug':'publicite-auto','_format':'html'})}}\">Configuration route</a></li>
            <li><a href=\"{{ path('annonce_categorie_index')}}\">Categorie</a>
              <ul>
                    <li><a href=\"{{ path('annonce_categorie_index')}}\">Liste</a></li>
                    <li><a href=\"{{ path('annonce_categorie_new')}}\">Ajouter</a></li>
                </ul>
            </li>
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"{{ path('annonce_annonce_index')}}\">Annonce</a>
              <ul>
                    <li><a href=\"{{ path('annonce_annonce_index')}}\">Liste</a></li>
                    <li><a href=\"{{ path('annonce_annonce_new')}}\">Ajouter</a></li>
                </ul>
            </li>
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"{{ path('main_annonce_liste')}}\">Toutes les annonces</a></li>
          </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
           {% block body %} {% endblock %}
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }} \"></script>
    <script src=\"{{ asset('js/docs.min.js') }}\"></script>
    <script type=\"text/javascript\">
        function deleteList(){
            if(confirm('Voulez-vous vraiement le supprimer?')){
                return true;
            }else{
                return false;
            }
        }
    </script>
    {% block javascripts %}{% endblock %}
    
  </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\jolydays\\app\\Resources\\views\\base.html.twig");
    }
}

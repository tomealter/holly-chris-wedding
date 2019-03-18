<?php

/* partials/base.html.twig */
class __TwigTemplate_f9efd183f5f2d570ec0667e8e15939e052d67a398ce0a8f59c4e4444fde2dac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body id=\"top\" class=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('bottom', $context, $blocks);
        // line 70
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700|Sail\" rel=\"stylesheet\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styles.css", 1 => 98], "method");
        // line 21
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 110], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"], "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"], "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/script.js"], "method");
        // line 29
        echo "    ";
    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"header\">
        <div class=\"header__inner\">
            <!-- <a href=\"#\" class=\"site-name\">Holly & Chris Wedding</a> -->
            ";
        // line 40
        $this->loadTemplate("partials/menu.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "            <a href=\"#\" class=\"mobile-menu-button\">
                <div class=\"mobile-menu-button__bar\"></div>
            </a>
        </div>
    </div>
    <div class=\"mobile-menu\">
        ";
        // line 47
        $this->loadTemplate("partials/menu.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        // line 52
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>
    </section>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        // line 60
        echo "    <!-- <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div> -->
";
    }

    // line 67
    public function block_bottom($context, array $blocks = [])
    {
        // line 68
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 68,  213 => 67,  204 => 60,  201 => 59,  196 => 54,  190 => 55,  188 => 54,  184 => 52,  181 => 51,  176 => 48,  174 => 47,  166 => 41,  164 => 40,  159 => 37,  156 => 36,  152 => 29,  149 => 28,  146 => 27,  143 => 26,  140 => 25,  137 => 24,  133 => 21,  130 => 20,  127 => 19,  124 => 18,  121 => 17,  113 => 30,  111 => 24,  105 => 22,  103 => 17,  98 => 15,  94 => 14,  91 => 13,  89 => 12,  77 => 7,  74 => 6,  71 => 5,  64 => 70,  62 => 67,  59 => 66,  57 => 59,  54 => 58,  52 => 51,  49 => 50,  47 => 36,  42 => 34,  39 => 33,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700|Sail\" rel=\"stylesheet\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/styles.css', 98) %}
    {% endblock %}
    {{ assets.css() }}
    
    {% block javascripts %}
        {% do assets.addJs('jquery', 110) %}
        {% do assets.addJs('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js') %}
        {% do assets.addJs('//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js') %}
        {% do assets.addJs('theme://js/script.js') %}
    {% endblock %}
    {{ assets.js()|raw }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"header__inner\">
            <!-- <a href=\"#\" class=\"site-name\">Holly & Chris Wedding</a> -->
            {% include \"partials/menu.html.twig\" %}
            <a href=\"#\" class=\"mobile-menu-button\">
                <div class=\"mobile-menu-button__bar\"></div>
            </a>
        </div>
    </div>
    <div class=\"mobile-menu\">
        {% include \"partials/menu.html.twig\" %}
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <!-- <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div> -->
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/base.html.twig");
    }
}

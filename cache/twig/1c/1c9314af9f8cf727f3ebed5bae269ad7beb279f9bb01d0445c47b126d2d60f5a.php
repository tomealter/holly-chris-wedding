<?php

/* partials/details.html.twig */
class __TwigTemplate_21907bf8b08e0c419673c71a03af28f781ef95767534df66aef9d8ed76ce9319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"section section--peach\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>";
        // line 4
        echo ($context["details_title"] ?? null);
        echo "</h2>
    </div>
  </div>
  <div class=\"details\">
    <div class=\"l-constrain\">
      <div class=\"details__row\">
        <div class=\"details__map\"></div>
        <div class=\"details__content\">
          ";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction(($context["details_content"] ?? null));
        echo "
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section section--peach\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>{{ details_title }}</h2>
    </div>
  </div>
  <div class=\"details\">
    <div class=\"l-constrain\">
      <div class=\"details__row\">
        <div class=\"details__map\"></div>
        <div class=\"details__content\">
          {{ details_content|markdown }}
        </div>
      </div>
    </div>
  </div>
</div>", "partials/details.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/details.html.twig");
    }
}

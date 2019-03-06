<?php

/* partials/hero.html.twig */
class __TwigTemplate_77872edc1c8590ad9a1b7f834c7f5286c8361e6c543eee6045708b9fb8683a35 extends Twig_Template
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
        echo "<div class=\"hero\" style=\"background-image: url(";
        echo ($context["image"] ?? null);
        echo ")\">
  <div class=\"l-constrain\">
    <div class=\"hero__content\">
      <h1 class=\"hero__title\">";
        // line 4
        echo ($context["title"] ?? null);
        echo "</h1>
      <div class=\"hero__subtitle\">";
        // line 5
        echo ($context["subtitle"] ?? null);
        echo "</div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hero\" style=\"background-image: url({{ image }})\">
  <div class=\"l-constrain\">
    <div class=\"hero__content\">
      <h1 class=\"hero__title\">{{ title }}</h1>
      <div class=\"hero__subtitle\">{{ subtitle }}</div>
    </div>
  </div>
</div>", "partials/hero.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/hero.html.twig");
    }
}

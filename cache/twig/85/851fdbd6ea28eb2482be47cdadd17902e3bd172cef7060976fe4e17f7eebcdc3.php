<?php

/* partials/registry.html.twig */
class __TwigTemplate_51eded71c8e1fcaa06ea90d95cdd41d239a5362a6a32508267314fcc4582cde7 extends Twig_Template
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
        echo "<div class=\"section section--peach\" id=\"registry\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>";
        // line 4
        echo ($context["registry_title"] ?? null);
        echo "</h2>
    </div>
  </div>
  <div class=\"registry\">
    <div class=\"l-constrain\">
      <div class=\"registry__grid\">
        <a href=\"";
        // line 10
        echo ($context["zola_url"] ?? null);
        echo "\" class=\"registry__link registry__link--zola\" target=\"_blank\">Zola</a>
        <a href=\"";
        // line 11
        echo ($context["ws_url"] ?? null);
        echo "\" class=\"registry__link registry__link--ws\" target=\"_blank\">William Sonoma</a>
        <a href=\"";
        // line 12
        echo ($context["cb_url"] ?? null);
        echo "\" class=\"registry__link registry__link--cb\" target=\"_blank\">Crate & Barrel</a>
        <a href=\"";
        // line 13
        echo ($context["wayfair_url"] ?? null);
        echo "\" class=\"registry__link registry__link--wayfair\" target=\"_blank\">Wayfair</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/registry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 12,  37 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section section--peach\" id=\"registry\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>{{ registry_title }}</h2>
    </div>
  </div>
  <div class=\"registry\">
    <div class=\"l-constrain\">
      <div class=\"registry__grid\">
        <a href=\"{{ zola_url }}\" class=\"registry__link registry__link--zola\" target=\"_blank\">Zola</a>
        <a href=\"{{ ws_url }}\" class=\"registry__link registry__link--ws\" target=\"_blank\">William Sonoma</a>
        <a href=\"{{ cb_url }}\" class=\"registry__link registry__link--cb\" target=\"_blank\">Crate & Barrel</a>
        <a href=\"{{ wayfair_url }}\" class=\"registry__link registry__link--wayfair\" target=\"_blank\">Wayfair</a>
      </div>
    </div>
  </div>
</div>", "partials/registry.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/registry.html.twig");
    }
}

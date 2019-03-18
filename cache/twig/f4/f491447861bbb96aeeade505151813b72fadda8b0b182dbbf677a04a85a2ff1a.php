<?php

/* partials/card.html.twig */
class __TwigTemplate_8d3e88890edb17a57dcd6692fa21ee560bfbb5fd92e39fa834dc588ec320b3d4 extends Twig_Template
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
        echo "<a href=\"";
        echo ($context["url"] ?? null);
        echo "\" class=\"card ";
        echo ($context["custom_classes"] ?? null);
        echo "\" target=\"_blank\">
  <div class=\"card__eyebrow\">";
        // line 2
        echo ($context["eyebrow"] ?? null);
        echo "</div>
  <h4 class=\"card__title\">";
        // line 3
        echo ($context["title"] ?? null);
        echo "</h4>
  ";
        // line 4
        if (($context["summary"] ?? null)) {
            // line 5
            echo "    <div class=\"card__summary\">";
            echo ($context["summary"] ?? null);
            echo "</div>
  ";
        }
        // line 7
        echo "  ";
        if (($context["distance"] ?? null)) {
            // line 8
            echo "    <div class=\"card__distance\">";
            echo ($context["distance"] ?? null);
            echo "</div>
  ";
        }
        // line 10
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "partials/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 8,  42 => 7,  36 => 5,  34 => 4,  30 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ url }}\" class=\"card {{ custom_classes }}\" target=\"_blank\">
  <div class=\"card__eyebrow\">{{ eyebrow }}</div>
  <h4 class=\"card__title\">{{ title }}</h4>
  {% if summary %}
    <div class=\"card__summary\">{{ summary }}</div>
  {% endif %}
  {% if distance %}
    <div class=\"card__distance\">{{ distance }}</div>
  {% endif %}
</a>", "partials/card.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/card.html.twig");
    }
}

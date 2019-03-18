<?php

/* partials/activities.html.twig */
class __TwigTemplate_a1c44fbde43e877270fc2ec126fa0cc688bdafc6302abaf1f6f50d7a0a75a315 extends Twig_Template
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
        echo "<div class=\"section\" id=\"activities\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>";
        // line 4
        echo ($context["activities_title"] ?? null);
        echo "</h2>
    </div>
  </div>
  <div class=\"activities\">
    <div class=\"l-constrain\">
      <div class=\"flex-grid\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities_cards"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 11
            echo "          <div class=\"flex-column\">
            ";
            // line 12
            $this->loadTemplate("partials/card.html.twig", "partials/activities.html.twig", 12)->display(array_merge($context, ["title" => $this->getAttribute(            // line 13
$context["card"], "title", []), "summary" => $this->getAttribute(            // line 14
$context["card"], "summary", []), "eyebrow" => $this->getAttribute(            // line 15
$context["card"], "type", []), "url" => $this->getAttribute(            // line 16
$context["card"], "link", [])]));
            // line 18
            echo "          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  59 => 18,  57 => 16,  56 => 15,  55 => 14,  54 => 13,  53 => 12,  50 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"activities\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>{{ activities_title }}</h2>
    </div>
  </div>
  <div class=\"activities\">
    <div class=\"l-constrain\">
      <div class=\"flex-grid\">
        {% for card in activities_cards %}
          <div class=\"flex-column\">
            {% include \"partials/card.html.twig\" with {
              title: card.title,
              summary: card.summary,
              eyebrow: card.type,
              url: card.link
            }%}
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
</div>", "partials/activities.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/activities.html.twig");
    }
}

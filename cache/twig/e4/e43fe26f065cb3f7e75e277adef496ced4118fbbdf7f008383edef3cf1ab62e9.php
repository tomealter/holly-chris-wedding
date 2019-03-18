<?php

/* partials/accomodations.html.twig */
class __TwigTemplate_1a0ff713c8ef9d67961bb3027f93a5a42268dde9390527f13afb81766eeeaadf extends Twig_Template
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
        echo "<div class=\"section section--blue\" id=\"accomodations\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>";
        // line 4
        echo ($context["accomodations_title"] ?? null);
        echo "</h2>
    </div>
  </div>
  <div class=\"accomodations\">
    <div class=\"l-constrain\">
      <div class=\"flex-grid\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accomodations_cards"] ?? null));
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
            $this->loadTemplate("partials/card.html.twig", "partials/accomodations.html.twig", 12)->display(array_merge($context, ["title" => $this->getAttribute(            // line 13
$context["card"], "title", []), "summary" => $this->getAttribute(            // line 14
$context["card"], "summary", []), "eyebrow" => $this->getAttribute(            // line 15
$context["card"], "price", []), "url" => $this->getAttribute(            // line 16
$context["card"], "url", []), "custom_classes" => "card--peach", "distance" => $this->getAttribute(            // line 18
$context["card"], "distance", [])]));
            // line 20
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
        // line 22
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/accomodations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  60 => 20,  58 => 18,  57 => 16,  56 => 15,  55 => 14,  54 => 13,  53 => 12,  50 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section section--blue\" id=\"accomodations\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>{{ accomodations_title }}</h2>
    </div>
  </div>
  <div class=\"accomodations\">
    <div class=\"l-constrain\">
      <div class=\"flex-grid\">
        {% for card in accomodations_cards %}
          <div class=\"flex-column\">
            {% include \"partials/card.html.twig\" with {
              title: card.title,
              summary: card.summary,
              eyebrow: card.price,
              url: card.url,
              custom_classes: 'card--peach',
              distance: card.distance
            }%}
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
</div>", "partials/accomodations.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/accomodations.html.twig");
    }
}

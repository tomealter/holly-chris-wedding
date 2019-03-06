<?php

/* forms/fields/columns/columns.html.twig */
class __TwigTemplate_1faf134f8cfbd80a450922de51ed22b64513748efbdbc2a9ba31726d61ecd209 extends Twig_Template
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
        echo "<div class=\"form-columns grid pure-g\">
";
        // line 2
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 3
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fields", []));
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 5
                echo "        ";
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/column/column.html.twig"], "forms/fields/columns/columns.html.twig", 5)->display(array_merge($context, ["cols" => ($context["cols"] ?? null)]));
                // line 6
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 8
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/columns/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  48 => 6,  45 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-columns grid pure-g\">
{% if field.fields %}
    {% set cols = field.fields|length %}
    {% for field in field.fields %}
        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/column/column.html.twig'] with {'cols':cols}  %}
    {% endfor %}
{% endif %}
</div>

", "forms/fields/columns/columns.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/plugins/admin/themes/grav/templates/forms/fields/columns/columns.html.twig");
    }
}

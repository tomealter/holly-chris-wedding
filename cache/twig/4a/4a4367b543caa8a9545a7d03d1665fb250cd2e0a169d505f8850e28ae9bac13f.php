<?php

/* partials/about.html.twig */
class __TwigTemplate_b998337bc10a5a9af7f96c6c84d24e68b4481e3f7fe4a28e0d2fc22a76f88027 extends Twig_Template
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
        echo "<div class=\"section\" id=\"about\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>";
        // line 4
        echo ($context["about_title"] ?? null);
        echo "</h2>
    </div>
  </div>
  <div class=\"about\">
    <div class=\"l-constrain l-constrain--narrow\">
      <div class=\"about__row\">
        <div class=\"about__profile about__profile--holly\">
          <div class=\"about__image\">";
        // line 11
        echo ($context["about_image_holly"] ?? null);
        echo "</div>
          <div class=\"about__name\">Holly</div>
          <div class=\"about__tinder-buttons\">
            <div class=\"about__cross\"></div>
            <div class=\"about__heart\"></div>
          </div>
        </div>
        <div class=\"about__profile about__profile--chris\">
          <div class=\"about__image\">";
        // line 19
        echo ($context["about_image_chris"] ?? null);
        echo "</div>
          <div class=\"about__name\">Chris</div>
          <div class=\"about__tinder-buttons\">
            <div class=\"about__cross\"></div>
            <div class=\"about__heart\"></div>
          </div>
        </div>
        <div class=\"about__profile about__profile--group\">
          <div class=\"about__image\">";
        // line 27
        echo ($context["about_image_group"] ?? null);
        echo "</div>
          <div class=\"about__name\">The Kovalskys</div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  45 => 19,  34 => 11,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\" id=\"about\">
  <div class=\"section__header\">
    <div class=\"l-constrain\">
      <h2>{{ about_title }}</h2>
    </div>
  </div>
  <div class=\"about\">
    <div class=\"l-constrain l-constrain--narrow\">
      <div class=\"about__row\">
        <div class=\"about__profile about__profile--holly\">
          <div class=\"about__image\">{{ about_image_holly }}</div>
          <div class=\"about__name\">Holly</div>
          <div class=\"about__tinder-buttons\">
            <div class=\"about__cross\"></div>
            <div class=\"about__heart\"></div>
          </div>
        </div>
        <div class=\"about__profile about__profile--chris\">
          <div class=\"about__image\">{{ about_image_chris }}</div>
          <div class=\"about__name\">Chris</div>
          <div class=\"about__tinder-buttons\">
            <div class=\"about__cross\"></div>
            <div class=\"about__heart\"></div>
          </div>
        </div>
        <div class=\"about__profile about__profile--group\">
          <div class=\"about__image\">{{ about_image_group }}</div>
          <div class=\"about__name\">The Kovalskys</div>
        </div>
      </div>
    </div>
  </div>
</div>", "partials/about.html.twig", "/Users/talter/MAMP-Sites/holly-chris-wedding/user/themes/holly-chris-wedding/templates/partials/about.html.twig");
    }
}

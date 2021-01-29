<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/frameworks.html.twig */
class __TwigTemplate_9af3dc0a5a167e982c2677873b495f5b25e67ec0c164974a2e2ef13d008c453e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", []), "enabled", [])) {
            // line 2
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 3
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", []), "ui_core", [])) {
                // line 4
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery.ui.core"], "method");
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", []), "ui_sortable", [])) {
                // line 7
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery.ui.sortable"], "method");
                // line 8
                echo "    ";
            }
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "bootstrap3", []), "enabled", [])) {
            // line 12
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "bootstrap.3"], "method");
        } elseif ($this->getAttribute($this->getAttribute(        // line 13
($context["particle"] ?? null), "bootstrap2", []), "enabled", [])) {
            // line 14
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "bootstrap.2"], "method");
        }
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "mootools", []), "enabled", [])) {
            // line 18
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "mootools"], "method");
            // line 19
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "mootools", []), "more", [])) {
                // line 20
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "mootools.more"], "method");
                // line 21
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@particles/frameworks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  79 => 20,  76 => 19,  73 => 18,  71 => 17,  68 => 16,  64 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/frameworks.html.twig", "C:\\xampp\\htdocs\\k-drive\\wp-content\\plugins\\gantry5\\engines\\nucleus\\particles\\frameworks.html.twig");
    }
}

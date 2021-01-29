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

/* @particles/fixed-header.html.twig */
class __TwigTemplate_29749dc4461bbf5ae180e48f1cdabbd343a94e2c05148b938cf1887bd5ea7cde extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/fixed-header.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 5
            echo "        ";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
        <style type=\"text/css\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
            echo ".g-fixed-element {
                position: fixed;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 1003;
            }
        </style>
    ";
        }
    }

    // line 18
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 20
            echo "        ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 21
            echo "        ";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
        ";
            // line 22
            if ($this->getAttribute(($context["particle"] ?? null), "cssselector", [])) {
                // line 23
                echo "            <script>
                (function(\$) {
                    \$(window).load(function() {
                        var stickyOffset = \$('";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
                echo "').offset().top;
                        var stickyContainerHeight = \$('";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
                echo "').height();

                        \$('";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
                echo "').wrap( \"<div class='g-fixed-container'><\\/div>\" );
                        \$('.g-fixed-container').css(\"height\", stickyContainerHeight);

                        ";
                // line 32
                if (((($this->getAttribute(($context["particle"] ?? null), "mobile", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", []), "disable")) : ("disable")) == "disable")) {
                    // line 33
                    echo "                        \$(window).resize(function() {
                            if( \$(window).width() < 768 && \$('.g-fixed-container').length ) {
                                \$('";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
                    echo "').unwrap();
                            }

                            if( \$(window).width() > 767 && \$('.g-fixed-container').length == 0 ) {
                                \$('";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
                    echo "').wrap( \"<div class='g-fixed-container'><\\/div>\" );
                                \$('.g-fixed-container').css(\"height\", stickyContainerHeight);
                            }
                        });
                        ";
                }
                // line 44
                echo "
                        \$(window).scroll(function(){
                            var sticky = \$('";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cssselector", []));
                echo "'),
                                scroll = \$(window).scrollTop();

                            if (scroll > stickyOffset ";
                // line 49
                if (((($this->getAttribute(($context["particle"] ?? null), "mobile", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", []), "disable")) : ("disable")) == "disable")) {
                    echo "&& \$(window).width() > 767";
                }
                echo ") sticky.addClass('g-fixed-element');
                            else sticky.removeClass('g-fixed-element');

                            ";
                // line 52
                if ($this->getAttribute(($context["particle"] ?? null), "secondtrigger", [])) {
                    // line 53
                    echo "                                if (scroll >= ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "secondoffset", []));
                    echo " ";
                    if (((($this->getAttribute(($context["particle"] ?? null), "mobile", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", []), "disable")) : ("disable")) == "disable")) {
                        echo "&& \$(window).width() > 767";
                    }
                    echo ") sticky.addClass('g-fixed-second');
                                else sticky.removeClass('g-fixed-second');
                            ";
                }
                // line 56
                echo "                        });
                    });
                })(jQuery);
            </script>
        ";
            }
            // line 61
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/fixed-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  154 => 56,  143 => 53,  141 => 52,  133 => 49,  127 => 46,  123 => 44,  115 => 39,  108 => 35,  104 => 33,  102 => 32,  96 => 29,  91 => 27,  87 => 26,  82 => 23,  80 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  52 => 7,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/fixed-header.html.twig", "C:\\xampp\\htdocs\\k-drive\\wp-content\\themes\\g5_helium\\custom\\particles\\fixed-header.html.twig");
    }
}

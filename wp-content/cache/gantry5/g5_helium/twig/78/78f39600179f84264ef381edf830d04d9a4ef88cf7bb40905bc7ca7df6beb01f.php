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

/* @particles/analytics.html.twig */
class __TwigTemplate_c326fed55199c799c7557721a0be71c6bfb273e900c6f9debec1745ba812f47b extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "ua", []), "code", [])) {
            // line 2
            echo "
    ";
            // line 3
            $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
            $assetVariables = [];
            if ($assetVariables && !is_array($assetVariables)) {
                throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
            }
            $location = "head";
            if ($location && !is_string($location)) {
                throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
            }
            $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
            ob_start();
            // line 4
            echo "      <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "ua", []), "code", []), "html", null, true);
            echo "\"></script>
    ";
            $content = ob_get_clean();
            $assetFunction($content, $location, $priority);
            // line 6
            echo "
    ";
            // line 7
            ob_start(function () { return ''; });
            // line 8
            echo "      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "ua", []), "code", []), "html", null, true);
            echo "');

      ";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "ua", []), "anonym", [])) {
                // line 15
                echo "        gtag('set', { 'anonymize_ip': true });
      ";
            }
            // line 17
            echo "    ";
            $context["script"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo "
    ";
            // line 19
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addInlineScript", [0 => ($context["script"] ?? null), 1 => 0], "method");
        }
    }

    public function getTemplateName()
    {
        return "@particles/analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  76 => 17,  72 => 15,  70 => 14,  65 => 12,  59 => 8,  57 => 7,  54 => 6,  47 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/analytics.html.twig", "C:\\xampp\\htdocs\\k-drive\\wp-content\\plugins\\gantry5\\engines\\nucleus\\particles\\analytics.html.twig");
    }
}

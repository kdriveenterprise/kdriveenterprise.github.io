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

/* @particles/slideshow.html.twig */
class __TwigTemplate_787482523dd77844e70df21540c6e6e8f654d1b7cf886cca561a666cf7b2597f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "extra", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 12
        ob_start(function () { return ''; });
        // line 13
        echo "    <div class=\"g-particle-intro\">
        ";
        // line 14
        if ($this->getAttribute(($context["particle"] ?? null), "mainheading", [])) {
            // line 15
            echo "            <h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "mainheading", []);
            echo "</h3>
            <div class=\"g-title-separator ";
            // line 16
            if (($this->getAttribute(($context["particle"] ?? null), "introtext", []) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
        ";
        }
        // line 17
        echo " 
        ";
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "introtext", [])) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "introtext", []);
            echo "</p>";
        }
        // line 19
        echo "    </div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        ob_start(function () { return ''; });
        // line 23
        echo "{
        autoplay:";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplay", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplay", []), "true")) : ("true")));
        echo ",
        autoplayInterval:";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplayInterval", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplayInterval", []), 7000)) : (7000)));
        echo ",
        kenburns:";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "kenburns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "kenburns", []), "false")) : ("false")));
        echo ",
        animation:'";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animation", []), "fade")) : ("fade")));
        echo "',
        duration:";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animationDuration", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animationDuration", []), 500)) : (500)));
        echo ",
        pauseOnHover:";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "pauseOnHover", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "pauseOnHover", []), "true")) : ("true")));
        echo ",
        height:'";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "height", []), "auto")) : ("auto")));
        echo "'
    }";
        $context["slideshow_settings"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "
        ";
            // line 37
            ob_start(function () { return ''; });
            // line 38
            echo "            ";
            if ($this->getAttribute($context["item"], "image", [])) {
                // line 39
                echo "                <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", []));
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($context["item"], "image", []));
                echo ">
            ";
            }
            // line 41
            echo "            ";
            if ($this->getAttribute($context["item"], "videoiframe", [])) {
                // line 42
                echo "                ";
                echo $this->getAttribute($context["item"], "videoiframe", []);
                echo "
            ";
            }
            // line 44
            echo "        ";
            $context["slide_media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            echo " 

        ";
            // line 46
            ob_start(function () { return ''; });
            // line 47
            echo "
            ";
            // line 48
            ob_start(function () { return ''; });
            // line 49
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "bottom")) {
                // line 50
                echo "uk-overlay-bottom";
            }
            // line 53
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "left")) {
                // line 54
                echo "uk-overlay-left";
            }
            // line 57
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "right")) {
                // line 58
                echo "uk-overlay-right";
            }
            // line 61
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "top")) {
                // line 62
                echo "uk-overlay-top";
            }
            // line 65
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "bottom-left")) {
                // line 66
                echo "uk-flex-bottom";
            }
            // line 69
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "bottom-center")) {
                // line 70
                echo "uk-flex-bottom uk-flex-center";
            }
            // line 73
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "bottom-right")) {
                // line 74
                echo "uk-flex-bottom uk-flex-right";
            }
            // line 77
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "middle-left")) {
                // line 78
                echo "uk-flex-middle";
            }
            // line 81
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "middle-center")) {
                // line 82
                echo "uk-flex-middle uk-flex-center";
            }
            // line 85
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "middle-right")) {
                // line 86
                echo "uk-flex-middle uk-flex-right";
            }
            // line 89
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "top-left")) {
                // line 90
                echo "uk-flex-top";
            }
            // line 93
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "top-center")) {
                // line 94
                echo "uk-flex-top uk-flex-center";
            }
            // line 97
            if (((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "top-right")) {
                // line 98
                echo "uk-flex-top uk-flex-right";
            }
            $context["overlay_position"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            echo "
            ";
            // line 102
            ob_start(function () { return ''; });
            // line 103
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "fade")) {
                // line 104
                echo "uk-overlay-fade";
            }
            // line 107
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-left")) {
                // line 108
                echo "uk-overlay-slide-left";
            }
            // line 111
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-right")) {
                // line 112
                echo "uk-overlay-slide-right";
            }
            // line 115
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-top")) {
                // line 116
                echo "uk-overlay-slide-top";
            }
            // line 119
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-bottom")) {
                // line 120
                echo "uk-overlay-slide-bottom";
            }
            // line 123
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-left-short")) {
                // line 124
                echo "uk-overlay-slide-left uk-overlay-left-short";
            }
            // line 127
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-right-short")) {
                // line 128
                echo "uk-overlay-slide-right uk-overlay-right-short";
            }
            // line 131
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-top-short")) {
                // line 132
                echo "uk-overlay-slide-top uk-overlay-top-short";
            }
            // line 135
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "slide-bottom-short")) {
                // line 136
                echo "uk-overlay-slide-bottom uk-overlay-bottom-short";
            }
            // line 139
            if (((($this->getAttribute($context["item"], "overlayanimation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayanimation", []), "fade")) : ("fade")) == "scale")) {
                // line 140
                echo "uk-overlay-scale";
            }
            $context["slide_overlay_animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 143
            echo "
            ";
            // line 144
            ob_start(function () { return ''; });
            // line 145
            echo "                <h3 class=\"g-slideshow-title\">";
            // line 146
            if ($this->getAttribute($context["item"], "link", [])) {
                // line 147
                echo "<a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_parent")) : ("_parent")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                echo "\">";
            }
            // line 149
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "filter", [0 => $this->getAttribute($context["item"], "title", [])], "method"));
            // line 150
            if ($this->getAttribute($context["item"], "link", [])) {
                // line 151
                echo "</a>";
            }
            // line 153
            echo "</h3>
            ";
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            echo "
            ";
            // line 156
            ob_start(function () { return ''; });
            // line 157
            echo "                <div class=\"g-slideshow-desc\">";
            // line 158
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "filter", [0 => $this->getAttribute($context["item"], "description", [])], "method"));
            // line 159
            echo "</div>
            ";
            $context["description"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            echo "
            ";
            // line 162
            ob_start(function () { return ''; });
            // line 163
            echo "                <div class=\"g-slideshow-buttons\">
                    ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 165
                echo "                        <a class=\"button ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "buttonstyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "buttonstyle", []), "empty-light")) : ("empty-light")));
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "target", []), "_parent")) : ("_parent")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "link", []));
                echo "\">";
                // line 166
                if ($this->getAttribute($context["button"], "buttonicon", [])) {
                    // line 167
                    echo "<span class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "buttonicon", []));
                    echo "\"></span>";
                }
                // line 169
                echo $this->getAttribute($context["button"], "text", []);
                // line 170
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "    
                </div>
            ";
            $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            echo "
            ";
            // line 175
            if (((($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")) == "style1")) {
                // line 176
                echo "
                ";
                // line 177
                if ((((((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "bottom") || ((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "top")) || ((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "left")) || ((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "right"))) {
                    // line 178
                    echo "                    <div class=\"uk-overlay-panel uk-overlay-background ";
                    echo twig_escape_filter($this->env, ($context["overlay_position"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["slide_overlay_animation"] ?? null), "html", null, true);
                    echo " ";
                    if ((twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null))));
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption\">
                            ";
                    // line 180
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 181
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 183
                    echo "
                            ";
                    // line 184
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 185
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 187
                    echo "
                            ";
                    // line 188
                    if ($this->getAttribute($context["item"], "buttons", [])) {
                        // line 189
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["buttons"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 191
                    echo "                        </div>
                    </div>
                ";
                } else {
                    // line 194
                    echo "                    <div class=\"uk-overlay-panel uk-flex ";
                    echo twig_escape_filter($this->env, ($context["overlay_position"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["slide_overlay_animation"] ?? null), "html", null, true);
                    if (((($this->getAttribute($context["item"], "overlaycontainer", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaycontainer", []), 0)) : (0)) == 1)) {
                        echo " g-overlay-container";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption uk-overlay-background";
                    // line 195
                    if ((twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null))));
                    }
                    echo "\">
                            ";
                    // line 196
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 197
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 199
                    echo "
                            ";
                    // line 200
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 201
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 203
                    echo "
                            ";
                    // line 204
                    if ($this->getAttribute($context["item"], "buttons", [])) {
                        // line 205
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["buttons"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 207
                    echo "                        </div>
                    </div>
                ";
                }
                // line 210
                echo "
            ";
            }
            // line 212
            echo "
            ";
            // line 213
            if ((((($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")) == "style2") || ((($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")) == "style3"))) {
                // line 214
                echo "                
                ";
                // line 215
                if ((((((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "bottom") || ((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "top")) || ((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "left")) || ((($this->getAttribute($context["item"], "overlayposition", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlayposition", []), "bottom")) : ("bottom")) == "right"))) {
                    // line 216
                    echo "                     <div class=\"uk-overlay-panel ";
                    echo twig_escape_filter($this->env, ($context["overlay_position"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["slide_overlay_animation"] ?? null), "html", null, true);
                    echo " ";
                    if ((twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null))));
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption\">
                            ";
                    // line 218
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 219
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 221
                    echo "
                            ";
                    // line 222
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 223
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 225
                    echo "
                            ";
                    // line 226
                    if ($this->getAttribute($context["item"], "buttons", [])) {
                        // line 227
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["buttons"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 229
                    echo "                        </div>
                    </div>
                ";
                } else {
                    // line 232
                    echo "                    <div class=\"uk-overlay-panel uk-flex ";
                    echo twig_escape_filter($this->env, ($context["overlay_position"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["slide_overlay_animation"] ?? null), "html", null, true);
                    if (((($this->getAttribute($context["item"], "overlaycontainer", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaycontainer", []), 0)) : (0)) == 1)) {
                        echo " g-overlay-container";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaystyle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaystyle", []), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption";
                    // line 233
                    if ((twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "overlaywidth", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "overlaywidth", []), ($context["auto"] ?? null))) : (($context["auto"] ?? null))));
                    }
                    echo "\">
                            ";
                    // line 234
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 235
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 237
                    echo "
                            ";
                    // line 238
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 239
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 241
                    echo "
                            ";
                    // line 242
                    if ($this->getAttribute($context["item"], "buttons", [])) {
                        // line 243
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["buttons"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 245
                    echo "                        </div>
                    </div>
                ";
                }
                // line 248
                echo "
            ";
            }
            // line 250
            echo "
        ";
            $context["slide_overlay"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 252
            echo "
        <li class=\"g-slideshow-item";
            // line 253
            if ($this->getAttribute($context["item"], "class", [])) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
            }
            echo "\">
            ";
            // line 254
            echo twig_escape_filter($this->env, ($context["slide_media"] ?? null), "html", null, true);
            echo "
            ";
            // line 255
            if ((($this->getAttribute($context["item"], "title", []) || $this->getAttribute($context["item"], "description", [])) || $this->getAttribute($context["item"], "buttons", []))) {
                // line 256
                echo "                ";
                echo twig_escape_filter($this->env, ($context["slide_overlay"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 258
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["slideshow_slides"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/slideshow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 262
    public function block_particle($context, array $blocks = [])
    {
        // line 263
        echo "    
    <div class=\"g-slideshow";
        // line 264
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []));
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", [])) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">
        ";
        // line 265
        if (($this->getAttribute(($context["particle"] ?? null), "mainheading", []) || $this->getAttribute(($context["particle"] ?? null), "introtext", []))) {
            // line 266
            echo "            ";
            echo twig_escape_filter($this->env, ($context["particleheading"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 268
        echo "        <div class=\"uk-slidenav-position";
        if ((($this->getAttribute(($context["particle"] ?? null), "fullscreen", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "fullscreen", []), 0)) : (0))) {
            echo " fullscreen";
        }
        if ((((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "arrowsvisible") || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "bothvisible"))) {
            echo " nav-visible";
        }
        echo "\" data-uk-slideshow=\"";
        echo twig_escape_filter($this->env, ($context["slideshow_settings"] ?? null), "html", null, true);
        echo "\">
            <ul class=\"uk-slideshow uk-overlay-active";
        // line 269
        if ((($this->getAttribute(($context["particle"] ?? null), "fullscreen", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "fullscreen", []), 0)) : (0))) {
            echo " uk-slideshow-fullscreen";
        }
        echo "\">
                ";
        // line 270
        echo twig_escape_filter($this->env, ($context["slideshow_slides"] ?? null), "html", null, true);
        echo "
            </ul>

            ";
        // line 273
        if ((((((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "arrowsvisible")) || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "both")) || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "bothvisible"))) {
            // line 274
            echo "                <a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideshow-item=\"previous\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Previous", "IT_ACCESS_PREVIOUS"), "html", null, true);
            echo "\"></a>
                <a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideshow-item=\"next\" aria-label=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Next", "IT_ACCESS_NEXT"), "html", null, true);
            echo "\"></a>
            ";
        }
        // line 277
        echo "
            ";
        // line 278
        if (((((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "both")) || ((($this->getAttribute(($context["particle"] ?? null), "navigation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "navigation", []), "arrows")) : ("arrows")) == "bothvisible"))) {
            // line 279
            echo "                <ul class=\"uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center\">
                ";
            // line 280
            $context["counter"] = 0;
            // line 281
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 282
                echo "                    <li data-uk-slideshow-item=\"";
                echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                echo "\"><a href=\"\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter("Item", "IT_ACCESS_ITEM"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                echo "\"></a></li>
                    ";
                // line 283
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 284
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                </ul>
            ";
        }
        // line 287
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 287,  742 => 285,  736 => 284,  734 => 283,  725 => 282,  720 => 281,  718 => 280,  715 => 279,  713 => 278,  710 => 277,  705 => 275,  700 => 274,  698 => 273,  692 => 270,  686 => 269,  674 => 268,  668 => 266,  666 => 265,  655 => 264,  652 => 263,  649 => 262,  644 => 1,  636 => 258,  630 => 256,  628 => 255,  624 => 254,  617 => 253,  614 => 252,  610 => 250,  606 => 248,  601 => 245,  595 => 243,  593 => 242,  590 => 241,  584 => 239,  582 => 238,  579 => 237,  573 => 235,  571 => 234,  564 => 233,  552 => 232,  547 => 229,  541 => 227,  539 => 226,  536 => 225,  530 => 223,  528 => 222,  525 => 221,  519 => 219,  517 => 218,  502 => 216,  500 => 215,  497 => 214,  495 => 213,  492 => 212,  488 => 210,  483 => 207,  477 => 205,  475 => 204,  472 => 203,  466 => 201,  464 => 200,  461 => 199,  455 => 197,  453 => 196,  446 => 195,  434 => 194,  429 => 191,  423 => 189,  421 => 188,  418 => 187,  412 => 185,  410 => 184,  407 => 183,  401 => 181,  399 => 180,  384 => 178,  382 => 177,  379 => 176,  377 => 175,  374 => 174,  369 => 171,  362 => 170,  360 => 169,  355 => 167,  353 => 166,  345 => 165,  341 => 164,  338 => 163,  336 => 162,  333 => 161,  329 => 159,  327 => 158,  325 => 157,  323 => 156,  320 => 155,  316 => 153,  313 => 151,  311 => 150,  309 => 149,  302 => 147,  300 => 146,  298 => 145,  296 => 144,  293 => 143,  289 => 140,  287 => 139,  284 => 136,  282 => 135,  279 => 132,  277 => 131,  274 => 128,  272 => 127,  269 => 124,  267 => 123,  264 => 120,  262 => 119,  259 => 116,  257 => 115,  254 => 112,  252 => 111,  249 => 108,  247 => 107,  244 => 104,  242 => 103,  240 => 102,  237 => 101,  233 => 98,  231 => 97,  228 => 94,  226 => 93,  223 => 90,  221 => 89,  218 => 86,  216 => 85,  213 => 82,  211 => 81,  208 => 78,  206 => 77,  203 => 74,  201 => 73,  198 => 70,  196 => 69,  193 => 66,  191 => 65,  188 => 62,  186 => 61,  183 => 58,  181 => 57,  178 => 54,  176 => 53,  173 => 50,  171 => 49,  169 => 48,  166 => 47,  164 => 46,  158 => 44,  152 => 42,  149 => 41,  139 => 39,  136 => 38,  134 => 37,  131 => 36,  126 => 35,  124 => 34,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  92 => 23,  90 => 22,  86 => 19,  80 => 18,  77 => 17,  70 => 16,  65 => 15,  63 => 14,  60 => 13,  58 => 12,  47 => 7,  43 => 6,  39 => 5,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/slideshow.html.twig", "C:\\xampp\\htdocs\\k-drive\\wp-content\\themes\\g5_helium\\custom\\particles\\slideshow.html.twig");
    }
}

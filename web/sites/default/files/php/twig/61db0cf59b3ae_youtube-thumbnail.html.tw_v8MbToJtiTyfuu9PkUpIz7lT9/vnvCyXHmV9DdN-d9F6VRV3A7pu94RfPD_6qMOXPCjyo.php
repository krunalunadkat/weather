<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/youtube/templates/youtube-thumbnail.html.twig */
class __TwigTemplate_ad007ee1417bf3308db46b19786f92af2dbcff9ea508b9deaea202c92c33e4e3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 25, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/youtube/templates/youtube-thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display an embedded YouTube video.
 *
 * Available variables:
 * - video_id: The ID of the YouTube video. Used to construct the iframe's src.
 * - entity_title: The title of the entity with the YouTube video field value.
 * - image_style: The image style to render the image through, if selected in
 *   the field's display settings.
 * - image_link: The link object for where the image should be linked to, if
 *   selected in the field's display settings.
 * - image: An image render array. If an image_link was passed, a rendered link
 *   is wrapped around the image. The image has the following attributes:
 *   - src: The URL of the local image. This image is downloaded when the
 *     thumbnail display is first rendered. If the image is to be rendered
 *     through an image style, this URL will reflect that.
 *   - alt: Alternate text based on the title of the entity with this field.
 *
 * @see template_preprocess_youtube_thumbnail()
 *
 * @ingroup themeable
 */
#}
{{ image }}
", "modules/contrib/youtube/templates/youtube-thumbnail.html.twig", "D:\\install\\xampp\\htdocs\\weather\\web\\modules\\contrib\\youtube\\templates\\youtube-thumbnail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

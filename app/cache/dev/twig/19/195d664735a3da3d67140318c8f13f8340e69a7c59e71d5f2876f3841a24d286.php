<?php

/* base.html.twig */
class __TwigTemplate_e6d9f9069c27f36a4f9c7ced3ee61f1a09f9937607993a4f78d179bb0c76700b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445f7cbc386bc32041ffe35bff749f1fcdea2ff7569e04056cfc846a585d35c8 = $this->env->getExtension("native_profiler");
        $__internal_445f7cbc386bc32041ffe35bff749f1fcdea2ff7569e04056cfc846a585d35c8->enter($__internal_445f7cbc386bc32041ffe35bff749f1fcdea2ff7569e04056cfc846a585d35c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_445f7cbc386bc32041ffe35bff749f1fcdea2ff7569e04056cfc846a585d35c8->leave($__internal_445f7cbc386bc32041ffe35bff749f1fcdea2ff7569e04056cfc846a585d35c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2132f0e4361ab19dfb3566d015892a8d37e614346f3d953ef2e47dbf62c9a1a = $this->env->getExtension("native_profiler");
        $__internal_d2132f0e4361ab19dfb3566d015892a8d37e614346f3d953ef2e47dbf62c9a1a->enter($__internal_d2132f0e4361ab19dfb3566d015892a8d37e614346f3d953ef2e47dbf62c9a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2132f0e4361ab19dfb3566d015892a8d37e614346f3d953ef2e47dbf62c9a1a->leave($__internal_d2132f0e4361ab19dfb3566d015892a8d37e614346f3d953ef2e47dbf62c9a1a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f5f2605499066053ce4876d1d90bcec6167ef2dc34d4090396cb015361e8f34 = $this->env->getExtension("native_profiler");
        $__internal_8f5f2605499066053ce4876d1d90bcec6167ef2dc34d4090396cb015361e8f34->enter($__internal_8f5f2605499066053ce4876d1d90bcec6167ef2dc34d4090396cb015361e8f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f5f2605499066053ce4876d1d90bcec6167ef2dc34d4090396cb015361e8f34->leave($__internal_8f5f2605499066053ce4876d1d90bcec6167ef2dc34d4090396cb015361e8f34_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_810c6a84ad156224d887cba91a7c47f5ebbe3a03f4786f8e90d6d65ee43e454d = $this->env->getExtension("native_profiler");
        $__internal_810c6a84ad156224d887cba91a7c47f5ebbe3a03f4786f8e90d6d65ee43e454d->enter($__internal_810c6a84ad156224d887cba91a7c47f5ebbe3a03f4786f8e90d6d65ee43e454d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_810c6a84ad156224d887cba91a7c47f5ebbe3a03f4786f8e90d6d65ee43e454d->leave($__internal_810c6a84ad156224d887cba91a7c47f5ebbe3a03f4786f8e90d6d65ee43e454d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ceda851db13694e3fc3eb22201b90e8f4cb9e64b35ca6a43169cdc28faf4ec5a = $this->env->getExtension("native_profiler");
        $__internal_ceda851db13694e3fc3eb22201b90e8f4cb9e64b35ca6a43169cdc28faf4ec5a->enter($__internal_ceda851db13694e3fc3eb22201b90e8f4cb9e64b35ca6a43169cdc28faf4ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ceda851db13694e3fc3eb22201b90e8f4cb9e64b35ca6a43169cdc28faf4ec5a->leave($__internal_ceda851db13694e3fc3eb22201b90e8f4cb9e64b35ca6a43169cdc28faf4ec5a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

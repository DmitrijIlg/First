<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6eb62d7fdf22e0de450dd81196940adcbb950d4f672e24d583ade394cdd8d259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b9c3b1142b0097672acd3485b9dcf25224e7a5781fdd494bf6ab6874693c427 = $this->env->getExtension("native_profiler");
        $__internal_4b9c3b1142b0097672acd3485b9dcf25224e7a5781fdd494bf6ab6874693c427->enter($__internal_4b9c3b1142b0097672acd3485b9dcf25224e7a5781fdd494bf6ab6874693c427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9c3b1142b0097672acd3485b9dcf25224e7a5781fdd494bf6ab6874693c427->leave($__internal_4b9c3b1142b0097672acd3485b9dcf25224e7a5781fdd494bf6ab6874693c427_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3830ff16ed97a561a44be489b9b2dad783d664c712e5d96d733197c9568a0d57 = $this->env->getExtension("native_profiler");
        $__internal_3830ff16ed97a561a44be489b9b2dad783d664c712e5d96d733197c9568a0d57->enter($__internal_3830ff16ed97a561a44be489b9b2dad783d664c712e5d96d733197c9568a0d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3830ff16ed97a561a44be489b9b2dad783d664c712e5d96d733197c9568a0d57->leave($__internal_3830ff16ed97a561a44be489b9b2dad783d664c712e5d96d733197c9568a0d57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92ff3dd05b75100895cfd44e02ae50dd58da565cbf0398dbb9bda37048654192 = $this->env->getExtension("native_profiler");
        $__internal_92ff3dd05b75100895cfd44e02ae50dd58da565cbf0398dbb9bda37048654192->enter($__internal_92ff3dd05b75100895cfd44e02ae50dd58da565cbf0398dbb9bda37048654192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92ff3dd05b75100895cfd44e02ae50dd58da565cbf0398dbb9bda37048654192->leave($__internal_92ff3dd05b75100895cfd44e02ae50dd58da565cbf0398dbb9bda37048654192_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8452d665bb5f719369599a465520ec8fa718e4b73d0f4ad0e249236dfc32059 = $this->env->getExtension("native_profiler");
        $__internal_c8452d665bb5f719369599a465520ec8fa718e4b73d0f4ad0e249236dfc32059->enter($__internal_c8452d665bb5f719369599a465520ec8fa718e4b73d0f4ad0e249236dfc32059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8452d665bb5f719369599a465520ec8fa718e4b73d0f4ad0e249236dfc32059->leave($__internal_c8452d665bb5f719369599a465520ec8fa718e4b73d0f4ad0e249236dfc32059_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

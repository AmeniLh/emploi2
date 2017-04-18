<?php

/* eleve/index.html.twig */
class __TwigTemplate_ddbc407ea7da12cb919ba792d11a2628c6695cc33e80240e2ffeca3bf317e6a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout:base-layout.html.twig", "eleve/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_263823e85092f7cb7a58ce4c794f14e5c2370b4d9aee41f4b983255396bc84d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263823e85092f7cb7a58ce4c794f14e5c2370b4d9aee41f4b983255396bc84d6->enter($__internal_263823e85092f7cb7a58ce4c794f14e5c2370b4d9aee41f4b983255396bc84d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "eleve/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_263823e85092f7cb7a58ce4c794f14e5c2370b4d9aee41f4b983255396bc84d6->leave($__internal_263823e85092f7cb7a58ce4c794f14e5c2370b4d9aee41f4b983255396bc84d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76f73678ee19d8461fdca4c098abfe7dd4c4f97a1c6cae9a0e3eb7cd38ace6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f73678ee19d8461fdca4c098abfe7dd4c4f97a1c6cae9a0e3eb7cd38ace6ec->enter($__internal_76f73678ee19d8461fdca4c098abfe7dd4c4f97a1c6cae9a0e3eb7cd38ace6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Eleves list</h1>

    <table>
        <thead>
            <tr>
                <th>Ideleve</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Datenais</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve_show", array("id" => $this->getAttribute($context["eleve"], "ideleve", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "ideleve", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["eleve"], "datenais", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "datenais", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve_show", array("id" => $this->getAttribute($context["eleve"], "ideleve", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve_edit", array("id" => $this->getAttribute($context["eleve"], "ideleve", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eleve_new");
        echo "\">Create a new eleve</a>
        </li>
    </ul>
";
        
        $__internal_76f73678ee19d8461fdca4c098abfe7dd4c4f97a1c6cae9a0e3eb7cd38ace6ec->leave($__internal_76f73678ee19d8461fdca4c098abfe7dd4c4f97a1c6cae9a0e3eb7cd38ace6ec_prof);

    }

    public function getTemplateName()
    {
        return "eleve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout:base-layout.html.twig' %}

{% block body %}
    <h1>Eleves list</h1>

    <table>
        <thead>
            <tr>
                <th>Ideleve</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Datenais</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for eleve in eleves %}
            <tr>
                <td><a href=\"{{ path('eleve_show', { 'id': eleve.ideleve }) }}\">{{ eleve.ideleve }}</a></td>
                <td>{{ eleve.nom }}</td>
                <td>{{ eleve.prenom }}</td>
                <td>{% if eleve.datenais %}{{ eleve.datenais|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('eleve_show', { 'id': eleve.ideleve }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('eleve_edit', { 'id': eleve.ideleve }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('eleve_new') }}\">Create a new eleve</a>
        </li>
    </ul>
{% endblock %}
", "eleve/index.html.twig", "C:\\wamp\\www\\emploi2\\app\\Resources\\views\\eleve\\index.html.twig");
    }
}
